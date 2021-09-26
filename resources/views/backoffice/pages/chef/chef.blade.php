@extends('backoffice.template.template')

@section('back')

<section class="container">


    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif

    <div class="container d-flex justify-content-center">
        <a class="btn btn-success mt-3 mb-5 fs-4" href="{{route('chef.create')}}">Ajouter un nouveau Chef</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Photo</th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            @foreach($chef as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->nom_chef}}</td>
                <td><img src="{{ asset("img/" . $data->photo_chef) }}" alt=""></td>
                <td>
                <div class="d-flex justify-content-around my-3">
                                <a class="btn btn-primary text-black" href="{{route('chef.show', $data->id)}}">Détails</a>
                                <a class="btn btn-warning" href="{{route('chef.edit', $data->id)}}">Modifier</a>
                                <form action="{{route('chef.destroy', $data->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger text-black" type="submit">Supprimer</button>
                                </form>
                            </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection