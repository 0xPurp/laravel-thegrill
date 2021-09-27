<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
       return view('backoffice.pages.about.about', compact('about'));
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
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('backoffice.pages.about.aboutEdit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            "titre" => "required",
            "sous_titre" => "required",
            "titregauche" => "required",
            "descriptiongauche" => "required",
            "notesgauche" => "required",
            "titredroite" => "required",
            "descriptiondroite" => "required",
            "notesdroite" => "required",
            "titrebook" => "required",
            "descriptionbook" => "required",
            "titremenu" => "required",
            "descriptionmenu" => "required",
           
        ]);

        $about->titre = $request->titre;
        $about->sous_titre = $request->sous_titre;
        $about->titregauche = $request->titregauche;
        $about->descriptiongauche = $request->descriptiongauche;
        $about->notesgauche = $request->notesgauche;
        $about->titredroite = $request->titredroite;
        $about->descriptiondroite = $request->descriptiondroite;
        $about->notesdroite = $request->notesdroite;
        $about->titrebook = $request->titrebook;
        $about->descriptionbook = $request->descriptionbook;
        $about->titremenu = $request->titremenu;
        $about->descriptionmenu =$request->descriptionmenu;
        
        $about->save();

        return redirect()->route('about.index')->with('message', 'Information réservations modifiées avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
