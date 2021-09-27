@extends('backoffice.template.template')

@section('back')

    <section class="container bg-dark rounded  py-5">
        <form class="d-flex flex-column w-75" enctype="multipart/form-data" action="{{ route('footer.update', $footer->id) }}" method="post">
            @csrf
            @method('PUT')


    <div>
    <h3>About</h3>
   
    <div>
        <label for="titre">Titre : </label>
        <input type="text" value="{{$footer->titre}}" name="titre" id="titre">
    </div>
    <div>
        <label for="sous_titre">Sous titre : </label>
        <input type="text" name="sous_titre" id="sous_titre" value="{{ $footer->sous_titre }}">
    </div>
    <div>
        <label for="titreadress">Titre Adresse : </label>
        <input type="text" name="sous_titre" id="titreadress" value="{{ $footer->titreadress }}">
    </div>
    <div>
        <label for="nombatiment">Nom Batiment: </label>
        <input type="text" name="nombatiment" id="nombatiment" value="{{ $footer->nombatiment }}">
    </div>
    <div>
        <label for="adresse">Adresse : </label>
        <input type="text" name="adresse" id="adresse" value="{{ $footer->adresse }}">
    </div>
    <div>
        <label for="phone">Phone: </label>
        <input type="text" name="phone" id="phone" value="{{ $footer->phone }}">
    </div>
    <div>
        <label for="titreouverture">Titre Ouverture: </label>
        <input type="text" name="titreouverture" id="titreouverture" value="{{ $footer->titreouverture }}">
    </div>
    <div>
        <label for="lundi">Lundi : </label>
        <input type="text" name="lundi" id="lundi" value="{{ $footer->lundi }}">
    </div>
    <div>
        <label for="mardi">Mardi : </label>
        <input type="text" name="mardi" id="mardi" value="{{ $footer->mardi }}">
    </div>
    <div>
        <label for="mercredi">Mercredi : </label>
        <input type="text" name="mercredi" id="mercredi" value="{{ $footer->mercredi }}">
    </div>
    <div>
        <label for="jeudi">Jeudi : </label>
        <input type="text" name="jeudi" id="jeudi" value="{{ $footer->jeudi }}">
    </div>
    <div>
        <label for="vendredi">Vendredi: </label>
        <input type="text" name="vendredi" id="vendredi" value="{{ $footer->vendredi }}">
    </div>
    <div>
        <label for="samedi">Samedi: </label>
        <input type="text" name="samedi" id="samedi" value="{{ $footer->samedi }}">
    </div>
    <div>
        <label for="dimanche">Dimanche: </label>
        <input type="text" name="dimanche" id="dimanche" value="{{ $footer->dimanche }}">
    </div>
    <div>
        <label for="heureslundi">Heures Lundi: </label>
        <input type="text" name="heureslundi" id="heureslundi" value="{{ $footer->heureslundi }}">
    </div>
    <div>
        <label for="heuresmardi">Heures mardi: </label>
        <input type="text" name="heuresmardi" id="heuresmardi" value="{{ $footer->heuresmardi }}">
    </div>
    <div>
        <label for="heuresmercredi">Heures mercredi: </label>
        <input type="text" name="heuresmercredi" id="heuresmercredi" value="{{ $footer->heuresmercredi }}">
    </div>
    <div>
        <label for="heuresjeudi">Heures jeudi: </label>
        <input type="text" name="heuresjeudi" id="heuresjeudi" value="{{ $footer->heuresjeudi }}">
    </div>
    <div>
        <label for="heuresvendredi">Heures vendredi: </label>
        <input type="text" name="heuresvendredi" id="heuresvendredi" value="{{ $footer->heuresvendredi }}">
    </div>
    <div>
        <label for="heuressamedi">Heures Samedi: </label>
        <input type="text" name="heuressamedi" id="heuressamedi" value="{{ $footer->heuressamedi }}">
    </div>
    <div>
        <label for="heuresdimanche">Heures dimanche: </label>
        <input type="text" name="heuresdimanche" id="heuresdimanche" value="{{ $footer->heuresdimanche }}">
    </div>
    <div>
        <label for="copyright">Copyright: </label>
        <input type="text" name="copyright" id="copyright" value="{{ $footer->copyright }}">
    </div>
            <button class="btn btn-success w-25 mt-3" type="submit">Modifier</button>
        </form>
    </section>

@endsection