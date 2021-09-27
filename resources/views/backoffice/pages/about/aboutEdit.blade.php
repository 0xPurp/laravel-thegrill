@extends('backoffice.template.template')

@section('back')

    <section class="container bg-dark rounded  py-5">
        <form class="d-flex flex-column w-75" enctype="multipart/form-data" action="{{ route('about.update', $about->id) }}" method="post">
            @csrf
            @method('PUT')


    <div>
    <h3>About</h3>
   
    <div>
        <label for="titre">Titre : </label>
        <input type="text" value="{{$about->titre}}" name="titre" id="titre">
    </div>
    <div>
        <label for="sous_titre">Sous titre : </label>
        <input type="text" name="sous_titre" id="sous_titre" value="{{ $about->sous_titre }}">
    </div>
    <div>
        <label for="titreGauche">Titre Gauche : </label>
        <input type="text" name="sous_titre" id="titreGauche" value="{{ $about->titregauche }}">
    </div>
    <div>
        <label for="descriptiongauche">Description gauche: </label>
        <input type="text" name="descriptiongauche" id="descriptiongauche" value="{{ $about->descriptiongauche }}">
    </div>
    <div>
        <label for="notesgauche">Notes Gauche : </label>
        <input type="text" name="notesgauche" id="notesgauche" value="{{ $about->notesgauche }}">
    </div>
    <div>
        <label for="titredroite">Titre droite: </label>
        <input type="text" name="titredroite" id="titredroite" value="{{ $about->titredroite }}">
    </div>
    <div>
        <label for="descriptiondroite">Description droite: </label>
        <input type="text" name="descriptiondroite" id="descriptiondroite" value="{{ $about->descriptiondroite }}">
    </div>
    <div>
        <label for="notesdroite">Notes droite : </label>
        <input type="text" name="notesdroite" id="notesdroite" value="{{ $about->notesdroite }}">
    </div>
    <div>
        <label for="titrebook">Titre Book : </label>
        <input type="text" name="titrebook" id="titrebook" value="{{ $about->titrebook }}">
    </div>
    <div>
        <label for="descriptionbook">Description Book : </label>
        <input type="text" name="descriptionbook" id="descriptionbook" value="{{ $about->descriptionbook }}">
    </div>
    <div>
        <label for="titremenu">Titre Menu : </label>
        <input type="text" name="titremenu" id="titremenu" value="{{ $about->titremenu }}">
    </div>
    <div>
        <label for="descriptionmenu">Description Menu : </label>
        <input type="text" name="descriptionmenu" id="descriptionmenu" value="{{ $about->descriptionmenu }}">
    </div>
            <button class="btn btn-success w-25 mt-3" type="submit">Modifier</button>
        </form>
    </section>

@endsection