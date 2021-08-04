@extends('main')

@section('title', 'Eventos HDS')

@section('content')
<div id="search-container" class="col-md-12">
    <h1>Busque um Evento</h1>
    <form>
        <input type="text" name="search" class="form-control" placeholder="Procurar..." id="search">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="/img/upload_image/events/{{$event->image}}" alt="{{$event->title}}">
                <div class="card-body">
                    <p class="card-date">{{$event->created_at}}</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants">x Participantes</p>
                    <a href="/events/{{$event->id}}" class="btn btn-primary">Saber Mais...</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection