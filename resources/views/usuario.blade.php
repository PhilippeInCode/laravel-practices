<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
</head>
<body>
    <h1>Bienvenido, {{ $usuario }}</h1>

    @if($usuario == "Admin")
        <p>Tienes acceso total al sistema.</p>
    @else
        <p>Acceso limitado a usuario normal</p>
    @endif
</body>
</html>