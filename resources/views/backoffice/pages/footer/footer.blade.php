@extends('backoffice.template.template')

@section('back')
    
<h1> Footer</h1> 

@foreach ($footer as $item)
    <div>
        Titre
        <p style="color: red">{{$item->titre}}</p>
        
    </div>
    <div>
        Sous_titre
        <p style="color: red">{{$item->sous_titre}}</p>
        
    </div>
    {{-- adress --}}
    <div>
        Titre Adresse
        <p style="color: red">{{$item->titreadress}}</p>
        
    </div>
    <div>
        Nom batiment
        <p style="color: red">{{$item->nombatiment}}</p>
        
    </div>
    <div>
        Adresse
        <p style="color: red">{{$item->adresse}}</p>
        
    </div>
    <div>
        Phone
        <p style="color: red">{{$item->phone}}</p>
        
    </div>
    <div>
        Nom batiment
        <p style="color: red">{{$item->nombatiment}}</p>
        
    </div>
    {{-- heures douverture --}}
    <div>
        Titre Couverture
        <p style="color: red">{{$item->titreouverture}}</p>
        
    </div>
    <div>
        Lundi
        <p style="color: red">{{$item->lundi}}</p>
        
    </div>
    <div>
        Mardi
        <p style="color: red">{{$item->mardi}}</p>
        
    </div>
    <div>
        Mercredi
        <p style="color: red">{{$item->mercredi}}</p>
        
    </div>
    <div>
        Jeudi
        <p style="color: red">{{$item->jeudi}}</p>
        
    </div>
    <div>
        Vendredi
        <p style="color: red">{{$item->vendredi}}</p>
        
    </div>
    <div>
        Samedi
        <p style="color: red">{{$item->samedi}}</p>
        
    </div>
    <div>
        Dimanche
        <p style="color: red">{{$item->dimanche}}</p>
        
    </div>
    <div>
        Heures Lundi
        <p style="color: red">{{$item->heureslundi}}</p>
        
    </div>
    <div>
        Heures Mardi
        <p style="color: red">{{$item->heuresmardi}}</p>
        
    </div>
    <div>
        Heures Mercredi
        <p style="color: red">{{$item->heuresmercredi}}</p>
        
    </div>
    <div>
        Heures Jeudi
        <p style="color: red">{{$item->heuresjeudi}}</p>
        
    </div>
    <div>
        Heures Vendredi
        <p style="color: red">{{$item->heuresvendredi}}</p>
        
    </div>
    <div>
        Heures Samedi
        <p style="color: red">{{$item->heuressamedi}}</p>
        
    </div>
    <div>
        Heures Dimanche
        <p style="color: red">{{$item->heuresdimanche}}</p>
        
    </div>
    {{-- copyright --}}
    <div>
        Copyright
        <p style="color: red">{{$item->copyright}}</p>
        
    </div>
    <div class="d-flex justify-content-around my-3">
        
        <a class="btn btn-warning" href="{{route('footer.edit', $item->id)}}">Modifier</a>
        
    </div>
    
@endforeach



@endsection