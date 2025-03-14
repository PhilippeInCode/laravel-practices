<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <table border="1">
        <tr>
            <th>Producto</th>
        </tr>
        @foreach($productos as $producto)
        <tr>
            <td>{{ $producto }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
