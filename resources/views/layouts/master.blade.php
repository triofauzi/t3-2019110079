<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'MovieDB') | BookDB</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('css_after')
</head>

<body>
    {{-- Top Navbar --}}
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand">
            <i class="fa fa-film fa-fw" aria-hidden="true"></i>
            <span class="menu-collapsed">BookDB</span>
        </a>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('books.index') }}">Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('books.create') }}">Create Book</a>
                </li>
            </ul>
        </div>
    </nav>
    {{-- Top Navbar END --}}
    <div class="row" id="body-row">
        {{-- Sidebar --}}
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
            {{-- Menu List --}}
            <ul class="list-group">
                {{-- Separator with title --}}

                {{-- Separator END --}}
                {{-- <a href="{{ route('books.index') }}" class="bg-ligth list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-film fa-fw "></span>
                        <span class="menu-collapsed">Book</span>
                    </div>
                </a>

                <a href="{{ route('books.create') }}" class="bg-light list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-film fa-fw "></span>
                        <span class="menu-collapsed">Create Book</span>
                    </div>
                </a>
            </ul> --}}
                {{-- Menu List END --}}
        </div>
        {{-- Sidebar END --}}
        {{-- Content --}}
        <div class="col p-4">
            @yield('content')
        </div>
        {{-- Content END --}}
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('js_after')
</body>

</html>
