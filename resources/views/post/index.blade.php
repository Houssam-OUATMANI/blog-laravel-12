@extends('layout')


@section('title', 'listing des articles')


@section('body')

    <section class="min-h-96 flex py-4 px-4 gap-3">

        <a class="btn btn-primary" href="{{route("post.create")}}">Ajouter une publication</a>
        @foreach ($posts as $post)
            <div class="card w-96 bg-amber-300 card-xs shadow-sm">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p>d{{ $post->content }}</p>
                    <h3>Auteur : {{ $post->user->firstname }} {{ $post->user->lastname }}</h3>
                    <a href="{{route("post.show", $post)}}">Lire l'article</a>
                </div>
            </div>
        @endforeach

    </section>

    <div class="pagination">
        {{ $posts->links() }}
    </div>

@endsection
