
{{-- MASTER TEMPLATE HTML --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
             <a href="/blog">Home</a>
             <a href="/blog/{id}">Blog</a>
        </nav>
    </header>
    
    <br>

    {{-- untuk mengambil konten di page lain --}}
    @yield('content')
    
    <br>

    <footer>
        <p>&copy; Laravel Hafidh 2018</p>
    </footer>
</body>
</html>