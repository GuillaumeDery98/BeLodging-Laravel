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
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                        value="{{ old('title') ?? $annonce->title }}">
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 col-sm-12 mt-2">
                    <label for="city">Code Postal</label>
                    <input type="number" class="form-control @error('city') is-invalid @enderror" id="city" name="city"
                        placeholder="0" value="{{ old('city') ?? $annonce->city }}">
                    @error('city')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12 mt-2">
                    <label for="price">Prix Mensuel</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                        name="price" placeholder="0" value="{{ old('price') ?? $annonce->price }}">
                    @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6 col-sm-12 mt-2">
                    <label for="duration">Durée</label>
                    @php
                    $duration = old('duration')
                    @endphp
                    <select class="custom-select @error('duration') is-invalid @enderror" name="duration">
                        <option value="">Choisissez une option</option>
                        @isset($duration)
                        <option value="1" {{ old('duration') == 1 ? 'selected' : ''}}>Longue durée</option>
                        <option value="2" {{ old('duration') == 2 ? 'selected' : ''}}>Courte durée</option>
                        @else
                        <option value="1" {{ $annonce->duration == 1 ? 'selected' : ''}}>Longue durée</option>
                        <option value="2" {{ $annonce->duration == 2 ? 'selected' : ''}}>Courte durée</option>
                        @endisset
                    </select>
                    @error('duration')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 col-sm-12 mt-2">
                    <label for="type">Type de logement</label>
                    @php
                    $type = old('type')
                    @endphp

                    <select class="custom-select @error('type') is-invalid @enderror" name="type">
                        <option value="">Choisissez une option</option>

                        @isset($type)
                        <option value="1" {{ old('type') == 1 ? 'selected' : ''}}>Maison</option>
                        <option value="2" {{ old('type') == 2 ? 'selected' : ''}}>Appartement</option>
                        <option value="3" {{ old('type') == 3 ? 'selected' : ''}}>Kot</option>
                        <option value="4" {{ old('type') == 4 ? 'selected' : ''}}>Gîte</option>
                        <option value="5" {{ old('type') == 5 ? 'selected' : ''}}>Hôtel</option>
                        @else
                        <option value="1" {{ $annonce->type == 1 ? 'selected' : ''}}>Maison</option>
                        <option value="2" {{ $annonce->type == 2 ? 'selected' : ''}}>Appartement</option>
                        <option value="3" {{ $annonce->type == 3 ? 'selected' : ''}}>Kot</option>
                        <option value="4" {{ $annonce->type == 4 ? 'selected' : ''}}>Gîte</option>
                        <option value="5" {{ $annonce->type == 5 ? 'selected' : ''}}>Hôtel</option>
                        @endisset

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
                <button class="btn btn-primary" type="submit">MODIFIER</button>
            </div>
        </div>
    </form>
</div>
@endsection