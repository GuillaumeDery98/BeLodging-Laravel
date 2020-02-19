@extends('template.layout')

@section('titre', $annonce->title)

@section('contenu')

<div class="row pt-3">
    <div class="col-sm-12 col-md-6">
        <img src="{{ URL::asset('images/not_available.jpg') }}" alt="Photo logement">
    </div>
    <div class="row col-sm-12 col-md-4 offset-md-2 pb-0">
        <ul class="informations">
            <li>
                <h1>{{ $annonce->title }}</h1>
            </li>
            <li>
                <h4>Code postal : {{ $annonce->city }}</h4>
            </li>
            <li>
                <h4>Prix mensuel : {{ $annonce->price }}€</h4>
            </li>
            <li>
                <h4>Type : {{ $category }}</h4>
            </li>
            <li>
                <h4>Durée : {{ $duration }}</h4>
            </li>
        </ul>
    </div>
</div>
<div class="row pt-3">
    <div class="col-12">{!! $annonce->description !!}</div>
</div>
@endsection
