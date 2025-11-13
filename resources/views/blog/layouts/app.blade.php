<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Blog</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content-wrapper {
            flex: 1;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
        footer {
            background-color: #343a40;
            color: #fff;
            padding: 1rem 0;
        }
        footer small {
            display: block;
            margin-top: 4px;
            color: #ccc;
        }
    </style>
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="{{ route('blog.index') }}">Mini Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}" href="{{ route('blog.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('blog.category', 'Travel') }}">Travel</a></li>
                            <li><a class="dropdown-item" href="{{ route('blog.category', 'Food') }}">Food</a></li>
                            <li><a class="dropdown-item" href="{{ route('blog.category', 'Programming') }}">Programming</a></li>
                            <li><a class="dropdown-item" href="{{ route('blog.category', 'Technology') }}">Technology</a></li>
                        </ul>
                    </li>
                </ul>

                {{-- Search --}}
                <form class="d-flex" role="search" method="GET" action="{{ route('blog.index') }}">
                    <input class="form-control me-2" type="search" name="q" placeholder="Search posts" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    {{-- Main content wrapper --}}
    <div class="container content-wrapper">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="text-center">
        <p class="mb-0">&copy; {{ date('Y') }} Mini Blog. All rights reserved.</p>
        <small>Made with ❤️ using Laravel & Vite</small>
    </footer>

</body>
</html>
