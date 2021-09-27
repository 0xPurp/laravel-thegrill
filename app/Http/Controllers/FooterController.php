<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = Footer::all();
        return view('backoffice.pages.footer.footer', compact('footer'));
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
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        return view('backoffice.pages.footer.footerEdit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {
        $request->validate([
            "titre1" => "required",
            "sous_titre" => "required",
            "titreadress" => "required",
            "nombatiment" => "required",
            "adress" => "required",
            "phone" => "required",
            "titreouverture" => "required",
            "lundi" => "required",
            "mardi" => "required",
            "mercredi" => "required",
            "jeudi" => "required",
            "vendredi" => "required",
            "samedi" => "required",
            "dimanche" => "required",
            "heureslundi" => "required",
            "heuresmardi" => "required",
            "heuresmercredi" => "required",
            "heuresjeudi" => "required",
            "heuresvendredi" => "required",
            "heuressamedi" => "required",
            "heuresdimanche" => "required",
            "copyright" => "required",
        ]);

        $footer->titre = $request->titre;
        $footer->sous_titre = $request->sous_titre;
        $footer->titreadress = $request->titreadress;
        $footer->nombatiment = $request->nombatiment;
        $footer->adresse = $request->adresse;
        $footer->phone = $request->phone;
        $footer->titreouverture = $request->titreouverture;
        $footer->lundi = $request->lundi;
        $footer->mardi = $request->mardi;
        $footer->mercredi = $request->mercredi;
        $footer->jeudi = $request->jeudi;
        $footer->vendredi =$request->vendredi;
        $footer->samedi = $request->samedi;
        $footer->dimanche = $request->dimanche;
        $footer->heureslundi = $request->heureslundi;
        $footer->heuresmardi = $request->heuresmardi;
        $footer->heuresmercredi = $request->heuresmercredi;
        $footer->heuresjeudi = $request->heuresjeudi;
        $footer->heuresvendredi = $request->heuresvendredi;
        $footer->heuressamedi = $request->heuressamedi;
        $footer->heuresdimanche = $request->heuresdimanche;
        $footer->copyright = $request->copyright;
        $footer->save();

        return redirect()->route('footer.index')->with('message', 'Information réservations modifiées avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        //
    }
}
