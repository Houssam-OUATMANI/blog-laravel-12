@extends('layout')


@section('title', 'Modifier un artilce')


@section('body')


<form action="{{route("post.update", $post)}}" method="post">
    @csrf
    @method("PUT")
    @include("components.input", ["label" => "titre de la publication", "name" => "title", "value" => $post["title"]])
    @include("components.input", ["label" => "contenu", "name" => "content", "type" => "textarea", "value" => $post["content"]])

    <button class="btn" type="submit">Modifier</button>

</form>
@endsection
