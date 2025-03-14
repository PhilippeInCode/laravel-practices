<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Validaciones</title>
    <script defer src="{{ asset('js/validaciones.js') }}"></script>
</head>
<body>

    <h2>Formulario de Registro</h2>
    
    <form id="registroForm" action="{{ route('formulario') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <span id="error-nombre"></span>

        <label>Correo:</label>
        <input type="email" name="correo" id="correo" required>
        <span id="error-correo"></span>

        <label>Teléfono:</label>
        <input type="tel" name="telefono" id="telefono" required>
        <span id="error-telefono"></span>

        <label>Contraseña:</label>
        <input type="password" name="password" id="password" required>
        <span id="error-password"></span>

        <label>Confirmar Contraseña:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
        <span id="error-password_confirmation"></span>

        <label>Edad:</label>
        <input type="number" name="edad" id="edad" required>
        <span id="error-edad"></span>

        <label>Dirección:</label>
        <input type="text" name="direccion" id="direccion" required>
        <span id="error-direccion"></span>

        <label>Ciudad:</label>
        <input type="text" name="ciudad" id="ciudad" required>
        <span id="error-ciudad"></span>

        <label>País:</label>
        <input type="text" name="pais" id="pais" required>
        <span id="error-pais"></span>

        <label>Código Postal:</label>
        <input type="text" name="codigo_postal" id="codigo_postal" required>
        <span id="error-codigo_postal"></span>

        <button type="submit">Enviar</button>

            @if ($errors->any())
                <div style="color: red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

    </form>

</body>
</html>
