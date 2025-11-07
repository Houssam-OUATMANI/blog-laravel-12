@extends('layout')


@section('title', 'detail du post')


@section('body')
      <h2 class="card-title">{{ $post->title }}</h2>
    <section>
            {!! $post->content !!}
            <h3>Auteur : {{ $post->user->firstname }} {{ $post->user->lastname }}</h3>
            </div>
    </section>


@endsection
