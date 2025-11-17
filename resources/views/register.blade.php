@extends("layout")


@section("title", "inscription")


@section("body")

<h1 class="text-5xl py-8 text-center">Page d'inscription</h1>



<form action="{{route("auth.handleRegister")}}" method="post">
    @csrf
    @include("components.input", ["label" => "Prenom", "name" => "firstname"] )
    @include("components.input", ["label" => "Nom", "name" => "lastname"] )
    @include("components.input", ["label" => "Email", "name" => "email", "type" => "email"])
    @include("components.input", ["label" => "Mot de passe", "name" => "password", "type" => "password"])
    <button class="btn btn-primary">Inscription</button>
</form>

@endsection
