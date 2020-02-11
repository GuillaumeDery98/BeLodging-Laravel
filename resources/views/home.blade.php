@extends('template.layout')

@section('titre', 'Dashboard')

@section('contenu')

<div class="row mt-1">
    <div class="col-2">
        <a href="/myinfos"><button type="button" class="btn btn-outline-info waves-effect">Mes infos</button></a>
    </div>
    <div class="col-2 offset-8">
        <a href="/createAnnonce"><button type="button" class="btn btn-outline-info waves-effect">Créer
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
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</div>


@endsection
