<html>
    <head lang="ja">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="{{ asset('js/hoge.js') }}"></script>
    </head>
    <body>
        <header>
            @include('layouts.header')
        </header>

        <div>
            <nav>
                @include('layouts.sidebar')
            </nav>
            <main>
                @yield('content')
            </main>
        </div>

        <footer>
            @include('layouts.footer')
        </footer>
    </body>
</html>