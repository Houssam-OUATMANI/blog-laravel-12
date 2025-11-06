@extends('layout')


@section('title', 'detail du post')


@section('body')

    <section class="min-h-96 flex py-4 px-4 gap-3">

            <div class="card w-96 bg-amber-300 card-xs shadow-sm">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p>d{{ $post->content }}</p>
                    <h3>Auteur : {{ $post->user->firstname }} {{ $post->user->lastname }}</h3>
                </div>
            </div>
    </section>


@endsection
