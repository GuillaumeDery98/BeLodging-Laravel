@extends('template.layout')

@section('titre', 'Acceuil')

@section('contenu')
<div class="formCenter">
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
                    <label for="prixmin">Prix Minimum Mensuel</label>
                    <input type="number" class="form-control @error('prixmin') is-invalid @enderror" id="prixmin"
                        name="prixmin" placeholder="0" value="{{ old('prixmin') }}">
                    @error('prixmin')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12 mt-2">
                    <label for="prixmax">Prix Maximum Mensuel</label>
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

                        @foreach($durations as $duration)
                        <option value="{{ $duration->id }}" {{ old('duree') == $duration->id ? 'selected' : ''}}>
                            {{ $duration->name }}</option>
                        @endforeach
                    </select>
                    @error('duree')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6 col-sm-12 mt-2">
                    <label for="type">Type de logement</label>
                    <select class="custom-select @error('type') is-invalid @enderror" name="type">
                        <option value="">Choisissez une option</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('type') == $category->id ? 'selected' : ''}}>
                            {{ $category->name }}</option>
                        @endforeach
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
<div class="row">
    @foreach($annonces as $annonce)
    <div class="col-md-4 col-sm-12 mt-3">
        <div class="card">
            <img src="{{ URL::asset('images/not_available.jpg') }}" class="card-img-top" alt="Photo logement">
            <div class="card-body">
                <a href="{{ route('annonces.show', $annonce->id) }}" class="text-reset">
                    <h5 class="card-title">{{ $annonce->title }}</h5>
                </a>
                <h6 class="card-subtitle mb-2 text-muted">Code postal : {{ $annonce->city }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Prix : {{ $annonce->price }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Type :
                    @foreach($categories as $category)
                    @if($category->id == $annonce->category_id)
                    {{ $category->name }}
                    @endif
                    @endforeach
                </h6>
                <h6 class="card-subtitle mb-2 text-muted">Durée :
                    @foreach($durations as $duration)
                    @if($duration->id == $annonce->duration_id)
                    {{ $duration->name }}
                    @endif
                    @endforeach
                </h6>
                <a href="{{ route('annonces.show', $annonce->id) }}" class="btn btn-primary">Voir</a>
            </div>
        </div>
    </div>
    @endforeach

</div>
<div class="row">
    <div class="card-footer">
        {{ $annonces->links() }}
    </div>
</div>
@endsection
