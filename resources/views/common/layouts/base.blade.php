<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap CSS --}}
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- Bootstrap JS --}}
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- Page title --}}
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand {{ request()->routeIs('default') ? 'btn-primary active text-white' : ''  }}" href="{{ route("default") }}">LaravelPHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    {{-- Home URL --}}
                    <li class="nav-item">
                        <a class="btn nav-link me-2 {{ request()->routeIs('home') ? 'btn-primary active text-white' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>

                    @auth
                        {{-- Products --}}
                        <li class="nav-item">
                            <a class="btn nav-link me-2 {{ request()->routeIs('products') ? 'btn-primary active text-white' : ''  }}" href="{{ route('products') }}">Products</a>
                        </li>
                        {{-- All Posts --}}
                        <li class="nav-item">
                            <a class="btn nav-link me-2 {{ request()->routeIs('posts') ? 'btn-primary active text-white' : ''  }}" href="{{ route('posts.store') }}">Posts</a>
                        </li>
                        {{-- New Post --}}
                        <li class="nav-item">
                            <a class="btn nav-link me-2 {{ request()->routeIs('posts.create') ? 'btn-primary active text-white' : ''  }}" href="{{ route('posts.create') }}">Create Post</a>
                        </li>
                    @endauth
                    {{-- About --}}
                    <li class="nav-item">
                        <a class="btn nav-link me-2 {{ request()->routeIs('about') ? 'btn-primary active text-white' : ''  }}" href="{{ route('about') }}">About</a>
                    </li>
                </ul>
                <div>
                    @auth
                        <a class="btn btn-success" href="{{ route('home') }}">Logged in as <strong>{{ Auth::user()->name }}</strong></a>
                        <a class="btn btn-warning" href="{{ route('logout') }}">Logout</a>
                    @else
                        <a class="btn btn-success" href="{{ route('login') }}">Login</a>
                        <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    @includeWhen( $errors, 'common.subviews._errors')

    @if (session('success'))

    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
        
    @endif

    @yield("content")
</body>
</html>