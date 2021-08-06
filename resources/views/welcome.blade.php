@extends('main')

@section('title', 'Eventos HDS')

@section('content')
<div id="search-container" class="col-md-12">
    <h1>Busque um Evento</h1>
    <form action="/" method="GET">
        <input type="text" name="search" class="form-control" placeholder="Procurar..." id="search">
    </form>
</div>
<div id="events-container" class="col-md-12">
    
    @if ($search)
      <h2>Buscado por: <strong>{{$search}}</strong></h2>
      @else
      <h2>Próximos Eventos</h2>
    @endif
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="/img/upload_image/events/{{$event->image}}" alt="{{$event->title}}">
                <div class="card-body">
                    <p class="card-date">{{date('d/m/Y', strtotime($event->date))}}</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants">{{count($event->users)}} Participantes</p>
                    <a href="/events/{{$event->id}}" id="btn" class="btn btn-primary">Saber Mais...</a>
                </div>
            </div>
        @endforeach
        @if ($search && count($events) == 0)
        <div class="alert alert-danger" role="alert">
            <p id="">Não foi posspivel encontrar nenhum evento com: <strong>{{$search}}! </strong><a href="/"> Ver todos eventos</a></p>
          </div>
        @elseif(count($events) == 0)   
        <p>Não há eventos disponíveis</p> 
        @endif
    </div>
</div>
@endsection