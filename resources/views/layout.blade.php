<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agenda</title>
    <link rel="stylesheet" href="/css/app.css">
    @yield('css')
</head>
<body>
<!-- Nav tabs -->
<ul class="nav nav-tabs|pills" id="navId">
    @if(auth()->check())
        <li class="nav-item">
            <a href="/logout" class="nav-link active">Salir</a>
        </li>
    @else
        <li class="nav-item">
            <a href="/login" class="nav-link active">Acceder</a>
        </li>
    @endif
</ul>

<div class="container">
    @yield('content')
</div>

<script src="/js/app.js"></script>
@yield('scripts')
</body>
</html>