<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <title> TAXI CHURRO</title>
</head>
<body style="Background: url('movil.jpg') no-repeat; background-size: cover;" >
    <header>
        <?php function activeMenu($url){
            return Request()->is($url) ? 'active' : '';
        } ?>
    <nav>
    <a class="{{ activeMenu('/') }}" href="{{ route('home') }}">home</a>
    
    <a class="{{ activeMenu('booking') }}" href="{{ route('reservas') }}">booking</a>

    <a class="{{ activeMenu('information') }}" href="{{ route('informacion') }}">information</a>

    <a class="{{ activeMenu('mensajes/create') }}" href="{{ route('mensajes.create') }}">contacts</a>

    <a class="{{ activeMenu('mensajes') }}" href="{{ route('mensajes.index') }}">mensajes</a>

    </nav>
    </header>
    @yield('contenido')
    <footer> SERVI-FLASH {{date('Y')}}</footer>
</body>
</html>