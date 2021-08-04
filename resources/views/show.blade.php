@extends('main')

@section('title', 'Detalhes do Evento - '.$events->title.' | Eventos HDS')

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/upload_image/events/{{$events->image}}" class="img-fluid" alt="{{$events->image}}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{$events->title}}</h1>
            <p class="event-city"><ion-icon name="location-outline"></ion-icon>{{$events->city}}</p>
            <p class="events-participants"><ion-icon name="people-outline"></ion-icon> X Participantes</p>
            <p class="event-owner"><ion-icon name="star-outline"></ion-icon> Dono do Evento</p>
            <a href="/" class="btn btn-success" id="event-submit">Confirmar Presença</a>
            <h3>O evento conta com: </h3>
            <ul id="items-list">
                @foreach ($events->items as $event)
                <li><ion-icon name="checkmark-outline"></ion-icon><span>{{$event}}</span></li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-12" id="description-container">
            <h3>Sobre o Evento:</h3>
            <p class="event-description">{{$events->description}}</p>
        </div>
    </div>
</div>
    
@endsection