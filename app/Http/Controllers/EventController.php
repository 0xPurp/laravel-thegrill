<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::all();
       return view('backoffice.pages.event.event', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('backoffice.pages.event.eventEdit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            "titreevents" => "required",
            "sous_titre" => "required",
            "event1name" => "required",
            "dateevent1" => "required",
            "titreevent1" => "required",
            "descriptionevent1" => "required",
            "event2name" => "required",
            "dateevent2" => "required",
            "titreevent2" => "required",
            "descriptionevent2" => "required",
            "event3name" => "required",
            "dateevent3" => "required",
            "titreevent3" => "required",
            "descriptionevent3" => "required",
            "event4name" => "required",
            "dateevent4" => "required",
            "titreevent4" => "required",
            "descriptionevent4" => "required",
            
        ]);

        $event->titreevents = $request->titreevents;
        $event->sous_titre = $request->sous_titre;
        $event->event1name = $request->event1name;
        $event->dateevent1 = $request->dateevent1;
        $event->titreevent1 = $request->titreevent1;
        $event->descriptionevent1 = $request->descriptionevent1;
        $event->event2name = $request->event2name;
        $event->dateevent2 = $request->dateevent2;
        $event->titreevent2 = $request->titreevent2;
        $event->descriptionevent2 = $request->descriptionevent2;
        $event->event3name = $request->event3name;
        $event->dateevent3 = $request->dateevent3;
        $event->titreevent3 = $request->titreevent3;
        $event->descriptionevent3 = $request->descriptionevent3;
        $event->event4name = $request->event4name;
        $event->dateevent4 = $request->dateevent4;
        $event->titreevent4 = $request->titreevent4;
        $event->descriptionevent4 = $request->descriptionevent4;
        
        $event->save();

        return redirect()->route('event.index')->with('message', 'Information réservations modifiées avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
