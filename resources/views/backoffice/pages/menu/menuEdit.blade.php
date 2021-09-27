@extends('backoffice.template.template')

@section('back')

    <section class="container bg-dark rounded  py-5">
        <form class="d-flex flex-column w-75" enctype="multipart/form-data" action="{{ route('menu.update', $menu->id) }}" method="post">
            @csrf
            @method('PUT')


    <div>
    <h3>Menu</h3>
   
    <div>
        <label for="titremenu">Titre Menu: </label>
        <input type="text" value="{{$menu->titremenu}}" name="titremenu" id="titremenu">
    </div>
    <div>
        <label for="sous_titre">Sous titre : </label>
        <input type="text" name="sous_titre" id="sous_titre" value="{{ $menu->sous_titre }}">
    </div>
    <div>
        <label for="titrerow1">Titre Row 1 : </label>
        <input type="text" name="titrerow1" id="titrerow1" value="{{ $menu->titrerow1 }}">
    </div>
    <div>
        <label for="titreitem1">Titre Item 1: </label>
        <input type="text" name="titreitem1" id="titreitem1" value="{{ $menu->titreitem1 }}">
    </div>
    <div>
        <label for="prixitem1">Prix Item 1 : </label>
        <input type="text" name="prixitem1" id="prixitem1" value="{{ $menu->prixitem1 }}">
    </div>
    <div>
        <label for="descriptionitem1">Description Item 1: </label>
        <input type="text" name="descriptionitem1" id="descriptionitem1" value="{{ $menu->descriptionitem1 }}">
    </div>
    
    <div>
        <label for="titrerow2">Titre Row 2 : </label>
        <input type="text" name="titrerow2" id="titrerow2" value="{{ $menu->titrerow2 }}">
    </div>
    <div>
        <label for="titreitem2">Titre Item 2: </label>
        <input type="text" name="titreitem2" id="titreitem2" value="{{ $menu->titreitem2 }}">
    </div>
    <div>
        <label for="prixitem2">Prix Item 2: </label>
        <input type="text" name="prixitem2" id="prixitem2" value="{{ $menu->prixitem2 }}">
    </div>
    <div>
        <label for="descriptionitem2">Description Item 2: </label>
        <input type="text" name="descriptionitem2" id="descriptionitem2" value="{{ $menu->descriptionitem2 }}">
    </div>

    <div>
        <label for="titrerow3">Titre Row 3 : </label>
        <input type="text" name="titrerow3" id="titrerow3" value="{{ $menu->titrerow3 }}">
    </div>
    <div>
        <label for="titreitem3">Titre Item 3: </label>
        <input type="text" name="titreitem3" id="titreitem3" value="{{ $menu->titreitem3 }}">
    </div>
    <div>
        <label for="prixitem3">Prix Item 3 : </label>
        <input type="text" name="prixitem3" id="prixitem3" value="{{ $menu->prixitem3 }}">
    </div>
    <div>
        <label for="descriptionitem3">Description Item 3: </label>
        <input type="text" name="descriptionitem3" id="descriptionitem3" value="{{ $menu->descriptionitem3 }}">
    </div>

    <div>
        <label for="titrebigrow1">Titre Big Row 1 : </label>
        <input type="text" name="titrebigrow1" id="titrebigrow1" value="{{ $menu->titrebigrow1 }}">
    </div>
    <div>
        <label for="photoitem1">Photo Item Row 1 : </label>
        <input type="text" name="photoitem1" id="photoitem1" value="{{ $menu->photoitem1 }}">
    </div>
    <div>
        <label for="titrebigitem1">Titre Big Item 1: </label>
        <input type="text" name="titrebigitem1" id="titrebigitem1" value="{{ $menu->titrebigitem1 }}">
    </div>
    <div>
        <label for="prixbigrow1">Prix Big Row 1 : </label>
        <input type="text" name="prixbigrow1" id="prixbigrow1" value="{{ $menu->prixbigrow1 }}">
    </div>
    <div>
        <label for="descriptionbigrow1">Description Big Row 1: </label>
        <input type="text" name="descriptionbigrow1" id="descriptionbigrow1" value="{{ $menu->descriptionbigrow1 }}">
    </div>

    <div>
        <label for="titrebigrow2">Titre Big Row 2 : </label>
        <input type="text" name="titrebigrow2" id="titrebigrow2" value="{{ $menu->titrebigrow2 }}">
    </div>
    <div>
        <label for="photoitem2">Photo Item Row 2 : </label>
        <input type="text" name="photoitem2" id="photoitem2" value="{{ $menu->photoitem2 }}">
    </div>
    <div>
        <label for="titrebigitem2">Titre Big Item 2: </label>
        <input type="text" name="titrebigitem2" id="titrebigitem2" value="{{ $menu->titrebigitem2 }}">
    </div>
    <div>
        <label for="prixbigrow2">Prix Big Row 2 : </label>
        <input type="text" name="prixbigrow2" id="prixbigrow2" value="{{ $menu->prixbigrow2 }}">
    </div>
    <div>
        <label for="descriptionbigrow2">Description Big Row 2: </label>
        <input type="text" name="descriptionbigrow2" id="descriptionbigrow2" value="{{ $menu->descriptionbigrow2 }}">
    </div>

    
    <div>
        <label for="photoitem3">Photo Item Row 3 : </label>
        <input type="text" name="photoitem3" id="photoitem3" value="{{ $menu->photoitem3 }}">
    </div>
    <div>
        <label for="titrebigitem3">Titre Big Item 3: </label>
        <input type="text" name="titrebigitem3" id="titrebigitem3" value="{{ $menu->titrebigitem3 }}">
    </div>
    <div>
        <label for="prixbigrow1">Prix Big Row 3 : </label>
        <input type="text" name="prixbigrow1" id="prixbigrow1" value="{{ $menu->prixbigrow1 }}">
    </div>
    <div>
        <label for="descriptionbigrow3">Description Big Row 3: </label>
        <input type="text" name="descriptionbigrow3" id="descriptionbigrow3" value="{{ $menu->descriptionbigrow3 }}">
    </div>

    <div>
        <label for="photoitem4">Photo Item Row 4 : </label>
        <input type="text" name="photoitem4" id="photoitem4" value="{{ $menu->photoitem4 }}">
    </div>
    <div>
        <label for="titrebigitem4">Titre Big Item 4: </label>
        <input type="text" name="titrebigitem4" id="titrebigitem4" value="{{ $menu->titrebigitem4 }}">
    </div>
    <div>
        <label for="prixbigrow4">Prix Big Row 4 : </label>
        <input type="text" name="prixbigrow4" id="prixbigrow4" value="{{ $menu->prixbigrow4 }}">
    </div>
    <div>
        <label for="descriptionbigrow4">Description Big Row 4: </label>
        <input type="text" name="descriptionbigrow4" id="descriptionbigrow4" value="{{ $menu->descriptionbigrow4 }}">
    </div>

    <div>
        <label for="photoitem5">Photo Item Row 5 : </label>
        <input type="text" name="photoitem5" id="photoitem5" value="{{ $menu->photoitem5 }}">
    </div>
    <div>
        <label for="titrebigitem5">Titre Big Item 5: </label>
        <input type="text" name="titrebigitem5" id="titrebigitem5" value="{{ $menu->titrebigitem5 }}">
    </div>
    <div>
        <label for="prixbigrow5">Prix Big Row 5 : </label>
        <input type="text" name="prixbigrow5" id="prixbigrow5" value="{{ $menu->prixbigrow5 }}">
    </div>
    <div>
        <label for="descriptionbigrow5">Description Big Row 5: </label>
        <input type="text" name="descriptionbigrow5" id="descriptionbigrow5" value="{{ $menu->descriptionbigrow5 }}">
    </div>

    <div>
        <label for="photoitem6">Photo Item Row 6 : </label>
        <input type="text" name="photoitem6" id="photoitem6" value="{{ $menu->photoitem6 }}">
    </div>
    <div>
        <label for="titrebigitem6">Titre Big Item 6: </label>
        <input type="text" name="titrebigitem6" id="titrebigitem6" value="{{ $menu->titrebigitem6 }}">
    </div>
    <div>
        <label for="prixbigrow6">Prix Big Row 6 : </label>
        <input type="text" name="prixbigrow6" id="prixbigrow6" value="{{ $menu->prixbigrow6 }}">
    </div>
    <div>
        <label for="descriptionbigrow6">Description Big Row 6: </label>
        <input type="text" name="descriptionbigrow6" id="descriptionbigrow6" value="{{ $menu->descriptionbigrow6 }}">
    </div>

    <div>
        <label for="photoitem7">Photo Item Row 7 : </label>
        <input type="text" name="photoitem7" id="photoitem7" value="{{ $menu->photoitem7 }}">
    </div>
    <div>
        <label for="titrebigitem7">Titre Big Item 7: </label>
        <input type="text" name="titrebigitem7" id="titrebigitem7" value="{{ $menu->titrebigitem7 }}">
    </div>
    <div>
        <label for="prixbigrow7">Prix Big Row 7 : </label>
        <input type="text" name="prixbigrow7" id="prixbigrow7" value="{{ $menu->prixbigrow7 }}">
    </div>
    <div>
        <label for="descriptionbigrow7">Description Big Row 7: </label>
        <input type="text" name="descriptionbigrow7" id="descriptionbigrow7" value="{{ $menu->descriptionbigrow7 }}">
    </div>

    <div>
        <label for="photoitem8">Photo Item Row 8 : </label>
        <input type="text" name="photoitem8" id="photoitem8" value="{{ $menu->photoitem8 }}">
    </div>
    <div>
        <label for="titrebigitem8">Titre Big Item 8: </label>
        <input type="text" name="titrebigitem8" id="titrebigitem8" value="{{ $menu->titrebigitem8 }}">
    </div>
    <div>
        <label for="prixbigrow8">Prix Big Row 8 : </label>
        <input type="text" name="prixbigrow8" id="prixbigrow8" value="{{ $menu->prixbigrow8 }}">
    </div>
    <div>
        <label for="descriptionbigrow8">Description Big Row 8: </label>
        <input type="text" name="descriptionbigrow8" id="descriptionbigrow8" value="{{ $menu->descriptionbigrow8 }}">
    </div>

            <button class="btn btn-success w-25 mt-3" type="submit">Modifier</button>
        </form>
    </section>

@endsection