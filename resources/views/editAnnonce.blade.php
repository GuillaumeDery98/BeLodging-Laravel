@extends('template.layout')

@section('titre', 'Editer annonce')
@section('addhead')
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
@endsection

@section('contenu')
<div class="formCenter">
    <h2>Modifier une annonce</h2>


    <form action="{{ route('annonces.update', $annonce->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="md-form">
            <div class="form-row">
                <div class="col-md-12">
                    <label for="title">Titre</label>
                    <input category_id="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" value="{{ old('title') ?? $annonce->title }}">
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 col-sm-12 mt-2">
                    <label for="city">Code Postal</label>
                    <input category_id="number" class="form-control @error('city') is-invalid @enderror" id="city"
                        name="city" placeholder="0" value="{{ old('city') ?? $annonce->city }}">
                    @error('city')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12 mt-2">
                    <label for="price">Prix Mensuel</label>
                    <input category_id="number" class="form-control @error('price') is-invalid @enderror" id="price"
                        name="price" placeholder="0" value="{{ old('price') ?? $annonce->price }}">
                    @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6 col-sm-12 mt-2">
                    <label for="duration_id">Durée</label>
                    @php
                    $duration_id = old('duration_id')
                    @endphp
                    <select class="custom-select @error('duration_id') is-invalid @enderror" name="duration_id">
                        <option value="">Choisissez une option</option>
                        @isset($duration_id)
                        @foreach($durations as $duration)
                        <option value="{{ $duration->id }}" {{ old('duration_id') == $duration->id ? 'selected' : ''}}>
                            {{ $duration->name }}</option>
                        @endforeach
                        @else
                        @foreach($durations as $duration)
                        <option value="{{ $duration->id }}"
                            {{ $annonce->duration_id == $duration->id ? 'selected' : ''}}>
                            {{ $duration->name }}</option>
                        @endforeach
                        @endisset
                    </select>
                    @error('duration_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 col-sm-12 mt-2">
                    <label for="category_id">Type de logement</label>
                    @php
                    $category_id = old('category_id')
                    @endphp

                    <select class="custom-select @error('category_id') is-invalid @enderror" name="category_id">
                        <option value="">Choisissez une option</option>

                        @isset($category_id)
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : ''}}>
                            {{ $category->name }}</option>
                        @endforeach
                        @else
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $annonce->category_id == $category->id ? 'selected' : ''}}>
                            {{ $category->name }}</option>
                        @endforeach
                        @endisset

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
                        {{ old('description') ?? $annonce->description  }}

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
                <button class="btn btn-primary" category_id="submit">MODIFIER</button>
            </div>
        </div>
    </form>
</div>
@endsection
