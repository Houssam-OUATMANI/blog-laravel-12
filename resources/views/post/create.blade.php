@extends('layout')


@section('title', 'ajouter un artilce')


@section('body')


<form action="" method="post">
    @csrf
    @include("components.input", ["label" => "titre de la publication", "name" => "title"])
    @include("components.input", ["label" => "contenu", "name" => "content", "type" => "textarea"])

    <button class="btn" type="submit">Ajouter</button>

</form>
@endsection
