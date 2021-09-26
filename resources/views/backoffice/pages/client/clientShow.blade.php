@extends('backoffice.template.template')

@section('back')
<h2 class="page-section-heading text-center text-uppercase py-5">Commentaire <i>{{$client->name}} {{$client->firstname}}</i></h2>

    <section class="container py-5">
        
        <div class="d-flex justify-content-center">
            <div class="card my-5" style="width: 18rem;">
                <img src="{{ asset('img/' . $client->url) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $client->name }} {{ $client->firstname }}</h5>
                    <p class="card-text">Commentaire : </p>
                    <p class="card-text">{{ $client->comment }}</p>
                    <div class="d-flex justify-content-center mb-5">
                        <a class="btn btn-warning mx-2" href="{{ route('client.edit', $client->id) }}">Modifier</a>
                        <form action="{{ route('client.destroy', $client->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger text-black mx-2" type="submit">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection