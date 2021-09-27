@extends('backoffice.template.template')

@section('back')
    
<h1> Event</h1> 

@foreach ($event as $item)
<div>
    Titre Events
    <p style="color: red">{{$item->titreevents}}</p>
    
</div>
    <div>
        Sous-titre
        <p style="color: red">{{$item->sous_titre}}</p>
        
    </div>
    {{-- Event 1 --}}
    <div>
        Event Name 1
        <p style="color: red">{{$item->event1name}}</p>
        
    </div>
    <div>
        Event Date 1
        <p style="color: red">{{$item->dateevent1}}</p>
        
    </div>
    <div>
        Event Titre 1
        <p style="color: red">{{$item->titreevent1}}</p>
        
    </div>

    <div>
        Event Description 1
        <p style="color: red">{{$item->descriptionevent1}}</p>
        
    </div>
   {{--  Event 2 --}}
    <div>
        Event Name 2
        <p style="color: red">{{$item->event2name}}</p>
        
    </div>
    <div>
        Event Date 2
        <p style="color: red">{{$item->dateevent2}}</p>
        
    </div>
    <div>
        Event Titre 2
        <p style="color: red">{{$item->titreevent2}}</p>
        
    </div>
    <div>
        Event Description 2
        <p style="color: red">{{$item->descriptionevent2}}</p>
        
    </div>

    {{--  Event 3 --}}
    <div>
        Event Name 3
        <p style="color: red">{{$item->event3name}}</p>
        
    </div>
    <div>
        Event Date 3
        <p style="color: red">{{$item->dateevent3}}</p>
        
    </div>
    <div>
        Event Titre 3
        <p style="color: red">{{$item->titreevent3}}</p>
        
    </div>
    <div>
        Event Description 3
        <p style="color: red">{{$item->descriptionevent3}}</p>
        
    </div>
    {{--  Event 4 --}}
    <div>
        Event Name 4
        <p style="color: red">{{$item->event4name}}</p>
        
    </div>
    <div>
        Event Date 4
        <p style="color: red">{{$item->dateevent4}}</p>
        
    </div>
    <div>
        Event Titre 4
        <p style="color: red">{{$item->titreevent4}}</p>
        
    </div>
    <div>
        Event Description 4
        <p style="color: red">{{$item->descriptionevent4}}</p>
        
    </div>
    <div class="d-flex justify-content-around my-3">
        
        <a class="btn btn-warning" href="{{route('event.edit', $item->id)}}">Modifier</a>
        
    </div>
@endforeach



@endsection