@extends('layout')


@section('title', 'detail du post')


@section('body')
    <h2 class="card-title">{{ $post->title }}</h2>
    <section>
        <div class="prose mx-auto">
            {!! $post->content !!}
        </div>
        <h3>Auteur : {{ $post->user->firstname }} {{ $post->user->lastname }}</h3>
        </div>
    </section>


@endsection
