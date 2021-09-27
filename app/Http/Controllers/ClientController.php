<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Database\Factories\CustomerFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();
        return view('backoffice.pages.client.client', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.pages.client.clientCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            "name" => "required",
            "firstname" => "required",
            "comment" => "required",
            "grade" => "required",
            "url" => "required"
        ]);
        $client = new Client;
        $client->name = $request->name;
        $client->firstname = $request->firstname;
        $client->comment = $request->comment;
        $client->grade = $request->grade;
        $client->url = $request->file('url')->hashName();
        $client->save();

        $request->file('url')->storePublicly('img', 'public');
        return redirect()->route('client.index')->with('message', 'Commentaire ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('backoffice.pages.client.clientShow', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('backoffice.pages.client.clientEdit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            "name" => "required",
            "firstname" => "required",
            "comment" => "required",
            "grade" => "required",
            "url" => "required"
        ]);

        Storage::disk('public')->delete('img/'. $client->url);

        $client->name = $request->name;
        $client->firstname = $request->firstname;
        $client->comment = $request->comment;
        $client->grade = $request->grade;
        $client->url = $request->file('url')->hashName();
        $client->save();
        $request->file('url')->storePublicly('img', 'public');

        return redirect()->route('client.index')->with('message', 'Commentaire modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        Storage::disk('public')->delete('img/'. $client->url);
        $client->delete();

        return redirect()->route('client.index')->with('message', 'Commentaire supprimé avec succès');  
    }
}
