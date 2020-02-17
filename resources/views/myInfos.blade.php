@extends('template.layout')

@section('titre', 'Mes infos')
@section('contenu')
<div class="formCenter">
    <h2>Mes informations</h2>


    <form action="/myinfos" method="POST">
        @csrf
        <div class="md-form">
            <div class="form-row">
                <div class="col-md-12 col-sm-12">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom"
                        value="{{ old('nom') ?? Auth::user()->name }}">
                    @error('nom')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mt-2">
                    <label for="mail">Adresse email</label>
                    <input type="text" class="form-control @error('mail') is-invalid @enderror" id="mail" name="mail"
                        value="{{ old('mail') ?? Auth::user()->email }}">
                    @error('mail')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-row pt-3 pl-1">
                <a href="password/reset"><button type="button" class="btn btn-danger">Restaurer mot de
                        passe</button></a>
            </div>

            <div class="text-center pt-3">
                <button class="btn btn-primary" type="submit">MODIFIER</button>
            </div>
        </div>
    </form>
</div>
@endsection
