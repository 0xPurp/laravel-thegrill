@extends('backoffice.template.template')

@section('back')

<section class="container">

    <div class="card" style="width: 18rem;">
        <img src="{{asset('img/'.$chef->photo_chef)}}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{$chef->nom_chef}}</h5>
          <div class="d-flex justify-content-center mb-5">
            <a class="btn btn-warning mx-2" href="{{route('chef.edit', $chef->id)}}">Modifier</a>
            <form action="{{route('chef.destroy', $chef->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger text-black mx-2" type="submit">Supprimer</button>
            </form>
        </div>
        </div>
    </div>

</section>

@endsection