@extends('template.layout')

@section('titre', 'Dashboard')

@section('contenu')

@if(session()->has('message'))
<div class="alert alert-success mt-2" role="alert">
    {{ session('message') }}
</div>
@endif

<div class="row mt-1">
    <div class="col-2">
        <a href="/myinfos"><button type="button" class="btn btn-outline-info waves-effect">Mes infos</button></a>
    </div>
    <div class="col-2 offset-8">
        <a href="/annonces/create"><button type="button" class="btn btn-outline-info waves-effect">Créer
                annonce</button></a>
    </div>

</div>
<h1 class="pt-3">Mes annonces</h1>
<div class="row mt-3">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Code postal</th>
                <th scope="col">Prix</th>
                <th scope="col" class="pl-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($annonces as $annonce)
            <tr>
                <th scope="row">{{ $annonce->title }}</th>
                <td>{{ $annonce->city }}</td>
                <td>{{ $annonce->price }}</td>
                <td>
                    <div class="row">
                        <span class="col-1">
                            <a href="{{ route('annonces.show', $annonce->id) }}" class="text-reset"><i
                                    class="far fa-eye"></i></a></span>
                        <span class="col-1">
                            <a href="{{ route('annonces.edit', $annonce->id) }}" class="text-reset"><i
                                    class="fas fa-pen"></i></a></span>
                        <span class="col-1">
                            <form action="{{ route('annonces.destroy', $annonce->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="resetButton" type="submit"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </span>
                    </div>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>


@endsection
