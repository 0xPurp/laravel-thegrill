@extends('backoffice.template.template')

@section('back')

    <section class="container bg-dark rounded  py-5">
        <form class="d-flex flex-column w-75" enctype="multipart/form-data" action="{{ route('event.update', $event->id) }}" method="post">
            @csrf
            @method('PUT')


    <div>
    <h3>Event</h3>
   
    <div>
        <label for="titreevents">Titre Event: </label>
        <input type="text" value="{{$event->titreevents}}" name="titreevents" id="titreevents">
    </div>
    <div>
        <label for="sous_titre">Sous titre : </label>
        <input type="text" name="sous_titre" id="sous_titre" value="{{ $event->sous_titre }}">
    </div>
    <div>
        <label for="event1name">Event Name 1 : </label>
        <input type="text" name="event1name" id="event1name" value="{{ $event->event1name }}">
    </div>
    <div>
        <label for="dateevent1">Event Date 1: </label>
        <input type="text" name="dateevent1" id="dateevent1" value="{{ $event->dateevent1 }}">
    </div>
    <div>
        <label for="titreevent1">Event Titre1 : </label>
        <input type="text" name="titreevent1" id="titreevent1" value="{{ $event->titreevent1 }}">
    </div>
    <div>
        <label for="descriptionevent1">Event Description 1: </label>
        <input type="text" name="descriptionevent1" id="descriptionevent1" value="{{ $event->descriptionevent1 }}">
    </div>


    <div>
        <label for="event2name">Event Name 2 : </label>
        <input type="text" name="event2name" id="event2name" value="{{ $event->event2name }}">
    </div>
    <div>
        <label for="dateevent2">Event Date 2: </label>
        <input type="text" name="dateevent2" id="dateevent2" value="{{ $event->dateevent2 }}">
    </div>
    <div>
        <label for="titreevent2">Event Titre 2 : </label>
        <input type="text" name="titreevent2" id="titreevent2" value="{{ $event->titreevent2 }}">
    </div>
    <div>
        <label for="descriptionevent2">Event Description 2: </label>
        <input type="text" name="descriptionevent2" id="descriptionevent2" value="{{ $event->descriptionevent2 }}">
    </div>

    <div>
        <label for="event3name">Event Name 3 : </label>
        <input type="text" name="event3name" id="event3name" value="{{ $event->event3name }}">
    </div>
    <div>
        <label for="dateevent3">Event Date 3: </label>
        <input type="text" name="dateevent3" id="dateevent3" value="{{ $event->dateevent3 }}">
    </div>
    <div>
        <label for="titreevent3">Event Titre 3 : </label>
        <input type="text" name="titreevent3" id="titreevent3" value="{{ $event->titreevent3 }}">
    </div>
    <div>
        <label for="descriptionevent3">Event Description 3: </label>
        <input type="text" name="descriptionevent3" id="descriptionevent3" value="{{ $event->descriptionevent3 }}">
    </div>

    <div>
        <label for="event4name">Event Name 4 : </label>
        <input type="text" name="event4name" id="event4name" value="{{ $event->event4name }}">
    </div>
    <div>
        <label for="dateevent4">Event Date 4: </label>
        <input type="text" name="dateevent4" id="dateevent4" value="{{ $event->dateevent4 }}">
    </div>
    <div>
        <label for="titreevent4">Event Titre 4 : </label>
        <input type="text" name="titreevent4" id="titreevent4" value="{{ $event->titreevent4 }}">
    </div>
    <div>
        <label for="descriptionevent4">Event Description 4: </label>
        <input type="text" name="descriptionevent4" id="descriptionevent4" value="{{ $event->descriptionevent4 }}">
    </div>
    
            <button class="btn btn-success w-25 mt-3" type="submit">Modifier</button>
        </form>
    </section>

@endsection