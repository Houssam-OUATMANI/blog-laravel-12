@extends('layout')


@section('title', 'listing des articles')


@section('body')



    <div class="flex justify-end align-middle py-6">
        <a class="btn btn-primary" href="{{ route('post.create') }}">Ajouter une publication</a>
    </div>
    <section class="min-h-96 flex py-4 px-4 gap-3">


        @foreach ($posts as $post)
            <div class="card w-96 bg-amber-300 card-xs shadow-sm">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <img src="{{$post->thumbnail ?? ''}}" alt="">
                    <h3>Auteur : {{ $post->user->firstname }} {{ $post->user->lastname }}</h3>
                    <a href="{{ route('post.show', $post) }}" class="btn btn-accent">Lire l'article</a>
                    @can("update", $post)
                        <a href="{{ route('post.edit', $post) }}" class="btn btn-secondary">Modifier l'article</a>
                    @endcan

                   @can("delete", $post)
                        <form onsubmit="return confirm('Etes vous sur')" action="{{route("post.destroy", $post)}}" method="post">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-secondary">Supprimer</button>
                    </form>
                   @endcan
                </div>
            </div>
        @endforeach

    </section>

    <div class="pagination">
        {{ $posts->links() }}
    </div>

@endsection
