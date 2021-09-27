@extends('backoffice.template.template')

@section('back')
    
<h1> Menu</h1> 

@foreach ($menu as $item)
    <div>
        Titre Menu
        <p style="color: red">{{$item->titremenu}}</p>
        
    </div>
    <div>
        Sous_titre
        <p style="color: red">{{$item->sous_titre}}</p>
        
    </div>
    
    <div>
        Titre Row 1
        <p style="color: red">{{$item->titrerow1}}</p>
        
    </div>
    <div>
        Titre Item 1
        <p style="color: red">{{$item->titreitem1}}</p>
        
    </div>
    <div>
        Prix Item 1
        <p style="color: red">{{$item->prixitem1}}</p>
        
    </div>

    <div>
        Description Item 1
        <p style="color: red">{{$item->descriptionitem1}}</p>
        
    </div>
    

    <div>
        Titre Row 2
        <p style="color: red">{{$item->titrerow2}}</p>
        
    </div>
    <div>
        Titre Item 2
        <p style="color: red">{{$item->titreitem2}}</p>
        
    </div>
    <div>
        Prix Item 2
        <p style="color: red">{{$item->prixitem2}}</p>
        
    </div>

    <div>
        Description Item 2
        <p style="color: red">{{$item->descriptionitem2}}</p>
        
    </div>

    <div>
        Titre Row 3
        <p style="color: red">{{$item->titrerow3}}</p>
        
    </div>
    <div>
        Titre Item 3
        <p style="color: red">{{$item->titreitem3}}</p>
        
    </div>
    <div>
        Prix Item 3
        <p style="color: red">{{$item->prixitem3}}</p>
        
    </div>

    <div>
        Description Item 3
        <p style="color: red">{{$item->descriptionitem3}}</p>
        
    </div>


    <div>
        Titre Big Row 1
        <p style="color: red">{{$item->titrebigrow1}}</p>
        
    </div>
    <div>
        Photo Item 1
        <p style="color: red">{{$item->photoitem1}}</p>
        
    </div>
    <div>
        Titre Big Item 1
        <p style="color: red">{{$item->titrebigitem1}}</p>
        
    </div>

    <div>
        Prix Big Row 1
        <p style="color: red">{{$item->prixbigrow1}}</p>
        
    </div>

    <div>
        Description Big Row 1
        <p style="color: red">{{$item->descriptionbigrow1}}</p>
        
    </div>

    <div>
        Titre Big Row 2
        <p style="color: red">{{$item->titrebigrow2}}</p>
        
    </div>
    <div>
        Photo Item 2
        <p style="color: red">{{$item->photoitem2}}</p>
        
    </div>
    <div>
        Titre Big Item 2
        <p style="color: red">{{$item->titrebigitem2}}</p>
        
    </div>

    <div>
        Prix Big Row 2
        <p style="color: red">{{$item->prixbigrow2}}</p>
        
    </div>

    <div>
        Description Big Row 2
        <p style="color: red">{{$item->descriptionbigrow2}}</p>
        
    </div>

    <div>
        Photo Item 3
        <p style="color: red">{{$item->photoitem3}}</p>
        
    </div>
    <div>
        Titre Big Item 3
        <p style="color: red">{{$item->titrebigitem3}}</p>
        
    </div>

    <div>
        Prix Big Row 3
        <p style="color: red">{{$item->prixbigrow3}}</p>
        
    </div>

    <div>
        Description Big Row 3
        <p style="color: red">{{$item->descriptionbigrow3}}</p>
        
    </div>

    <div>
        Photo Item 4
        <p style="color: red">{{$item->photoitem4}}</p>
        
    </div>
    <div>
        Titre Big Item 4
        <p style="color: red">{{$item->titrebigitem4}}</p>
        
    </div>

    <div>
        Prix Big Row 4
        <p style="color: red">{{$item->prixbigrow4}}</p>
        
    </div>

    <div>
        Description Big Row 4
        <p style="color: red">{{$item->descriptionbigrow4}}</p>
        
    </div>

    <div>
        Photo Item 5
        <p style="color: red">{{$item->photoitem5}}</p>
        
    </div>
    <div>
        Titre Big Item 5
        <p style="color: red">{{$item->titrebigitem5}}</p>
        
    </div>

    <div>
        Prix Big Row 5
        <p style="color: red">{{$item->prixbigrow5}}</p>
        
    </div>

    <div>
        Description Big Row 5
        <p style="color: red">{{$item->descriptionbigrow5}}</p>
        
    </div>

    <div>
        Photo Item 6
        <p style="color: red">{{$item->photoitem6}}</p>
        
    </div>
    <div>
        Titre Big Item 6
        <p style="color: red">{{$item->titrebigitem6}}</p>
        
    </div>

    <div>
        Prix Big Row 6
        <p style="color: red">{{$item->prixbigrow6}}</p>
        
    </div>

    <div>
        Description Big Row 6
        <p style="color: red">{{$item->descriptionbigrow6}}</p>
        
    </div>

    <div>
        Photo Item 7
        <p style="color: red">{{$item->photoitem7}}</p>
        
    </div>
    <div>
        Titre Big Item 7
        <p style="color: red">{{$item->titrebigitem7}}</p>
        
    </div>

    <div>
        Prix Big Row 7
        <p style="color: red">{{$item->prixbigrow7}}</p>
        
    </div>

    <div>
        Description Big Row 7
        <p style="color: red">{{$item->descriptionbigrow7}}</p>
        
    </div>

    <div>
        Photo Item 8
        <p style="color: red">{{$item->photoitem8}}</p>
        
    </div>
    <div>
        Titre Big Item 8
        <p style="color: red">{{$item->titrebigitem8}}</p>
        
    </div>

    <div>
        Prix Big Row 8
        <p style="color: red">{{$item->prixbigrow8}}</p>
        
    </div>

    <div>
        Description Big Row 8
        <p style="color: red">{{$item->descriptionbigrow8}}</p>
        
    </div>

    <div class="d-flex justify-content-around my-3">
        
        <a class="btn btn-warning" href="{{route('menu.edit', $item->id)}}">Modifier</a>
        
    </div>
@endforeach



@endsection