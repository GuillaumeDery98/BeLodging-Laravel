@extends('template.layout')

@section('titre', 'Acceuil')

@section('contenu')
<form action="/" method="POST">
    @csrf
    <label for="nom">Entrez votre nom : </label>
    <input type="text" class="@error('nom') is-invalid @enderror" name="nom" id="nom" value="{{ old('nom') }}">
    @error('nom')
    <div class="invalid-feedback"> {{ $message }} </div>
    @enderror
    <input type="submit" value="Envoyer !">
</form>
@endsection
