@extends('layout')

@section('title', 'Home page')


@section('body')
    <h1 class="text-center text-7xl py-8">Hello {{Auth::user()->firstname ?? "Visteur"}}</h1>
@endsection
