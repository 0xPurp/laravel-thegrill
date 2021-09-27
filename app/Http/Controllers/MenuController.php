<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();
       return view('backoffice.pages.menu.menu', compact('menu'));
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
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        
       return view('backoffice.pages.menu.menuEdit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            "titremenu" => "required",
            "sous_titre" => "required",
            "titrerow1" => "required",
            "titreitem1" => "required",
            "prixitem1" => "required",
            "descriptionitem1" => "required",
            "titrerow2" => "required",
            "titreitem2" => "required",
            "prixitem2" => "required",
            "descriptionitem2" => "required",
            "titrerow3" => "required",
            "titreitem3" => "required",
            "prixitem3" => "required",
            "descriptionitem3" => "required",
            "titrebigrow1" => "required",
            "photoitem1" => "required",
            "titrebigitem1" => "required",
            "prixbigrow1" => "required",
            "descriptionbigrow1"=>"required",
            "titrebigrow2" => "required",
            "photoitem2" => "required",
            "titrebigitem2" => "required",
            "prixbigrow2" => "required",
            "descriptionbigrow2"=>"required",
            "photoitem3" => "required",
            "titrebigitem3" => "required",
            "prixbigrow3" => "required",
            "descriptionbigrow3"=>"required",
            "photoitem4" => "required",
            "titrebigitem4" => "required",
            "prixbigrow4" => "required",
            "descriptionbigrow4"=>"required",
            "photoitem5" => "required",
            "titrebigitem5" => "required",
            "prixbigrow5" => "required",
            "descriptionbigrow5"=>"required",
            "photoitem6" => "required",
            "titrebigitem6" => "required",
            "prixbigrow6" => "required",
            "descriptionbigrow6"=>"required",
            "photoitem7" => "required",
            "titrebigitem7" => "required",
            "prixbigrow7" => "required",
            "descriptionbigrow7"=>"required",
            "photoitem8" => "required",
            "titrebigitem8" => "required",
            "prixbigrow8" => "required",
            "descriptionbigrow8"=>"required",
            
        ]);

        $menu->titremenu = $request->titremenu;
        $menu->sous_titre = $request->sous_titre;
        $menu->titrerow1 = $request->titrerow1;
        $menu->titreitem1 = $request->titreitem1;
        $menu->prixitem1 = $request->prixitem1;
        $menu->description1 = $request->description1;
        $menu->titrerow2 = $request->titrerow2;
        $menu->titreitem2 = $request->titreitem2;
        $menu->prixitem2 = $request->prixitem2;
        $menu->description2 = $request->description2;
        $menu->titrerow3 = $request->titrerow3;
        $menu->titreitem3 = $request->titreitem3;
        $menu->prixitem3 = $request->prixitem3;
        $menu->description3 = $request->description3;
        $menu->titrebigrow1 = $request->titrebigrow1;
        $menu->photoitem1 = $request->photoitem1;
        $menu->titrebigitem1 = $request->titrebigitem1;
        $menu->prixbigitem1 = $request->prixbigitem1;
        $menu->descriptionbigrow1 = $request->descriptionbigrow1;
        $menu->titrebigrow2 = $request->titrebigrow2;
        $menu->photoitem2 = $request->photoitem2;
        $menu->titrebigitem2 = $request->titrebigitem2;
        $menu->prixbigitem2 = $request->prixbigitem2;
        $menu->descriptionbigrow2 = $request->descriptionbigrow2;
        $menu->photoitem3 = $request->photoitem3;
        $menu->titrebigitem3 = $request->titrebigitem3;
        $menu->prixbigitem3 = $request->prixbigitem3;
        $menu->descriptionbigrow3 = $request->descriptionbigrow3;
        $menu->photoitem4 = $request->photoitem4;
        $menu->titrebigitem4 = $request->titrebigitem4;
        $menu->prixbigitem4 = $request->prixbigitem4;
        $menu->descriptionbigrow4 = $request->descriptionbigrow4;
        $menu->photoitem5 = $request->photoitem5;
        $menu->titrebigitem5 = $request->titrebigitem5;
        $menu->prixbigitem5 = $request->prixbigitem5;
        $menu->descriptionbigrow5 = $request->descriptionbigrow5;
        $menu->photoitem6 = $request->photoitem6;
        $menu->titrebigitem6 = $request->titrebigitem6;
        $menu->prixbigitem6 = $request->prixbigitem6;
        $menu->descriptionbigrow6 = $request->descriptionbigrow6;
        $menu->photoitem7 = $request->photoitem7;
        $menu->titrebigitem7 = $request->titrebigitem7;
        $menu->prixbigitem7 = $request->prixbigitem7;
        $menu->descriptionbigrow7 = $request->descriptionbigrow7;
        $menu->photoitem8 = $request->photoitem8;
        $menu->titrebigitem8 = $request->titrebigitem8;
        $menu->prixbigitem8 = $request->prixbigitem8;
        $menu->descriptionbigrow8 = $request->descriptionbigrow8;
        
        $menu->save();

        return redirect()->route('menu.index')->with('message', 'Information réservations modifiées avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
