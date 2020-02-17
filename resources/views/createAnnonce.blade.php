@extends('template.layout')

@section('titre', 'Créer annonce')
@section('addhead')
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
@endsection

@section('contenu')
<div class="formCenter">
    <h2>Créer une annonce</h2>


    <form action="{{ route('annonces.store') }}" method="POST">
        @csrf
        <div class="md-form">
            <div class="form-row">
                <div class="col-md-12">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                        value="{{ old('title') }}">
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 col-sm-12 mt-2">
                    <label for="city">Code Postal</label>
                    <input type="number" class="form-control @error('city') is-invalid @enderror" id="city" name="city"
                        placeholder="0" value="{{ old('city') }}">
                    @error('city')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12 mt-2">
                    <label for="price">Prix Mensuel</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                        name="price" placeholder="0" value="{{ old('price') }}">
                    @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6 col-sm-12 mt-2">
                    <label for="duration">Durée</label>
                    <select class="custom-select @error('duration') is-invalid @enderror" name="duration">
                        <option value="">Choisissez une option</option>

                        <option value="1" {{ old('duration') == 1 ? 'selected' : ''}}>Longue durée</option>
                        <option value="2" {{ old('duration') == 2 ? 'selected' : ''}}>Courte durée</option>
                    </select>
                    @error('duration')
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
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="500"
                        class="@error('description') is-invalid @enderror">
                    </textarea>
                    <script>
                        ClassicEditor
                        .create( document.querySelector( '#description' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                    </script>
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary" type="submit">CRÉER</button>
            </div>
        </div>
    </form>
</div>
@endsection
