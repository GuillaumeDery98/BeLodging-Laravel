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
                    <input category_id="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" value="{{ old('title') }}">
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 col-sm-12 mt-2">
                    <label for="city">Code Postal</label>
                    <input category_id="number" class="form-control @error('city') is-invalid @enderror" id="city"
                        name="city" placeholder="0" value="{{ old('city') }}">
                    @error('city')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12 mt-2">
                    <label for="price">Prix Mensuel</label>
                    <input category_id="number" class="form-control @error('price') is-invalid @enderror" id="price"
                        name="price" placeholder="0" value="{{ old('price') }}">
                    @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6 col-sm-12 mt-2">
                    <label for="duration_id">Durée</label>
                    <select class="custom-select @error('duration_id') is-invalid @enderror" name="duration_id">
                        <option value="">Choisissez une option</option>

                        @foreach($durations as $duration)
                        <option value="{{ $duration->id }}" {{ old('duration_id') == $duration->id ? 'selected' : ''}}>
                            {{ $duration->name }}</option>
                        @endforeach
                    </select>
                    @error('duration_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 col-sm-12 mt-2">
                    <label for="category_id">Type de logement</label>
                    <select class="custom-select @error('category_id') is-invalid @enderror" name="category_id">
                        <option value="">Choisissez une option</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : ''}}>
                            {{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="500"
                        class="@error('description') is-invalid @enderror">
                        {{ old('description') }}
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
                <button class="btn btn-primary" category_id="submit">CRÉER</button>
            </div>
        </div>
    </form>
</div>
@endsection
