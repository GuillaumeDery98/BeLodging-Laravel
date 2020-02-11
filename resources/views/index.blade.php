@extends('template.layout')

@section('titre', 'Acceuil')

@section('contenu')
<div class="filter">
    <h2>Filtres</h2>


    <form action="/" method="POST">
        @csrf
        <div class="md-form">
            <div class="form-row">
                <div class="col-md-12">
                    <label for="postal">Code Postal</label>
                    <input type="number" class="form-control @error('postal') is-invalid @enderror" id="postal"
                        name="postal" value="{{ old('postal') }}">
                    @error('postal')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 col-sm-12 mt-2">
                    <label for="prixmin">Prix Minimum</label>
                    <input type="number" class="form-control @error('prixmin') is-invalid @enderror" id="prixmin"
                        name="prixmin" placeholder="0" value="{{ old('prixmin') }}">
                    @error('prixmin')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12 mt-2">
                    <label for="prixmax">Prix Maximum</label>
                    <input type="number" class="form-control @error('prixmax') is-invalid @enderror" id="prixmax"
                        name="prixmax" placeholder="0" value="{{ old('prixmax') }}">
                    @error('prixmax')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 col-sm-12 mt-2">
                    <label for="duree">Durée</label>
                    <select class="custom-select @error('duree') is-invalid @enderror" name="duree">
                        <option value="">Choisissez une option</option>

                        <option value="1" {{ old('duree') == 1 ? 'selected' : ''}}>Longue durée</option>
                        <option value="2" {{ old('duree') == 2 ? 'selected' : ''}}>Courte durée</option>
                    </select>
                    @error('duree')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 col-sm-12 mt-2">
                    <label for="type">Type de logement</label>
                    <select class="custom-select @error('type') is-invalid @enderror" name="type">
                        <option value="">Choisissez une option</option>
                        <option value="1" {{ old('type') == 1 ? 'selected' : ''}}>Maison</option>
                        <option value="2" {{ old('type') == 2 ? 'selected' : ''}}>Appartement</option>
                        <option value="3" {{ old('type') == 3 ? 'selected' : ''}}>Kot</option>
                        <option value="4" {{ old('type') == 4 ? 'selected' : ''}}>Gîte</option>
                        <option value="5" {{ old('type') == 5 ? 'selected' : ''}}>Hôtel</option>
                    </select>
                    @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


            </div>
            <div class="text-center">
                <button class="btn btn-primary" type="submit">RECHERCHER</button>
            </div>
        </div>
    </form>
</div>
@endsection
