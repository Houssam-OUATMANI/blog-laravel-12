@extends("layout")


@section("title", "Connexion")


@section("body")

<h1 class="text-5xl py-8 text-center">Page Connnnexion</h1>



<form action="{{route("auth.handleLogin")}}" method="post">
    @csrf
    @include("components.input", ["label" => "Email", "name" => "email", "type" => "email"])
    @include("components.input", ["label" => "Mot de passe", "name" => "password", "type" => "password"])
    <button class="btn btn-primary">Connexion</button>
</form>

@endsection
