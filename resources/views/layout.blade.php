<!DOCTYPE html>
<html lang="en" data-theme="cyberpunk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://unpkg.com/@tailwindcss/typography@0.1.2/dist/typography.min.css">
    <title>@yield('title')</title>


    <style>

    </style>
</head>

<body class="p-8 container mx-auto">

    @if (Session::has('success'))
        <div class="alert alert-success"> {{ Session::get('success') }}</div>
    @endif

    @if (Session::has('error'))
        <div class="alert alert-error"> {{ Session::get('error') }}</div>
    @endif

    <div class="navbar bg-base-100 shadow-sm bg-primary text-primary-content">
        <div class="flex-1">
            <a href="{{ route('home') }}" class="btn btn-ghost text-xl">Mon blog</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{route("post.index")}}">Lire</a></li>
                <li>
                    <details>
                        <summary>Auth</summary>
                        <ul class="bg-base-100 rounded-t-none p-2">

                            @guest
                                <li><a href="{{ route('auth.register') }}">Inscription</a></li>
                                <li><a href="{{ route('auth.login') }}">Connexion</a></li>
                            @endguest


                            @auth
                                <form action="{{ route('auth.handleLogout') }}" method="POST">
                                    @csrf()
                                    @method('DELETE')
                                    <button>Deconnexion</button>
                                </form>
                            @endauth


                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </div>
    @yield('body')
</body>

</html>
