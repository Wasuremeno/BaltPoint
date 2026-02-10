<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Books App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <h1><a href="{{ route('books.index') }}">Personal book collection</a></h1>
        </div>
    </header>

    <main class="container">
        @if(session('success'))
            <div class="alert success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert error">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        @yield('content')
    </main>

    <footer>
        <div class="container">
            <p><a href="https://github.com/Wasuremeno/BaltPoint.git">Git repo</a> my personal book collection by Vlaskin Dmitrii<p>
        </div>
    </footer>
</body>
</html>