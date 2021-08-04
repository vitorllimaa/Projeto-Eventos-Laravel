<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    
    public function index() {

        $events = Event::all();
    
        return view('welcome',['events' => $events]);

    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {

        $events = new Event;

        $events->title = $request->title;
        $events->city = $request->city;
        $events->private = $request->private;
        $events->description = $request->description;
        $events->items = $request->items;
        $events->date = now();

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();
            
            $imageName = md5($request->image->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/upload_image/events'), $imageName);

            $events->image = $imageName;
        }

        $events->save();

        return redirect('/')->with('msg', 'Evento criado com Sucesso!!');
    }

    public function show($id) {

        $event = Event::findOrFail($id);
        return view('show', [
            'events' => $event
        ]);
    }

}