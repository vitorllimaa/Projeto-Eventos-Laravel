<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    
    public function index() {

        $search = request('search');

        if($search){

            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();

        }else{
            
            $events = Event::all();

        }
        return view('welcome',[
            'events' => $events,
            'search' => $search
        ]);

    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {

        $events = new Event;

        $events->title = $request->title;
        $events->date = $request->date;
        $events->city = $request->city;
        $events->private = $request->private;
        $events->description = $request->description;
        $events->items = $request->items;

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();
            
            $imageName = md5($request->image->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/upload_image/events'), $imageName);

            $events->image = $imageName;
        }

        $user = auth()->user();

        $events->user_id = $user->id;

        $events->save();

        return redirect('/')->with('msg', 'Evento criado com Sucesso!!');
    }

    public function show($id) {

        $event = Event::findOrFail($id);

        $user = auth()->user();

        $hasUserJoined = false;

        if($user) {

            $userEvents = $user->eventsAsParticipant->toArray();

            foreach($userEvents as $userEvent) {
                if($userEvent['id'] == $id) {
                    $hasUserJoined = true;
                }
            }
        }

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('show', [
            'events' => $event,
            'eventOwner' => $eventOwner,
            'hasUserJoined'  => $hasUserJoined
        ]);
    }

    public function dashboard() {

        $user = auth()->user();

        $events = $user->events;

        $eventsAsParticipant = $user->eventsAsParticipant;

        return view('dashboard', [
            'events' => $events,
            'eventsAsParticipant' => $eventsAsParticipant
        ]);
    }

    public function destroy($id) {

        Event::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Evento exclu??do com sucesso!');
    }

    public function joinEvent($id) {

        $user = auth()->user();

        $user->eventsAsParticipant()->attach($id);

        $event = Event::findOrFail($id);

        return  redirect('/dashboard')->with('msg', 'Sua presen??a est?? confirmada no evento!');
    }

    public function leaveEvent($id) {

        $user = auth()->user();

        $user->eventsAsParticipant()->detach($id);

        $event = Event::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Voc?? saiu do evento com sucesso!');
    }

}