<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>@yield('title')</title>


    <style>

    </style>
</head>

<body>

    @if (Session::has('success'))
        {{ Session::get('success') }}
    @endif
    <div class="navbar bg-base-100 shadow-sm">
        <div class="flex-1">
            <a href="{{ route('home') }}" class="btn btn-ghost text-xl">Mon blog</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
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
