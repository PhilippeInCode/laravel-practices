document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("registroForm").addEventListener("submit", function (event) {
        let valido = true;

        // Validar Nombre
        let nombre = document.getElementById("nombre").value;
        if (nombre.length < 3) {
            valido = false;
            document.getElementById("error-nombre").innerText = "El nombre debe tener al menos 3 caracteres.";
        } else {
            document.getElementById("error-nombre").innerText = "";
        }

        // Validar Correo
        let correo = document.getElementById("correo").value;
        let correoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!correoRegex.test(correo)) {
            valido = false;
            document.getElementById("error-correo").innerText = "Ingrese un correo válido.";
        } else {
            document.getElementById("error-correo").innerText = "";
        }

        // Validar Teléfono
        let telefono = document.getElementById("telefono").value;
        let telefonoRegex = /^[0-9]{10}$/;
        if (!telefonoRegex.test(telefono)) {
            valido = false;
            document.getElementById("error-telefono").innerText = "El teléfono debe tener 10 dígitos.";
        } else {
            document.getElementById("error-telefono").innerText = "";
        }

        // Validar Contraseña
        let password = document.getElementById("password").value;
        if (password.length < 6) {
            valido = false;
            document.getElementById("error-password").innerText = "La contraseña debe tener al menos 6 caracteres.";
        } else {
            document.getElementById("error-password").innerText = "";
        }

        // Confirmación de Contraseña
        let passwordConfirm = document.getElementById("password_confirmation").value;
        if (password !== passwordConfirm) {
            valido = false;
            document.getElementById("error-password_confirmation").innerText = "Las contraseñas no coinciden.";
        } else {
            document.getElementById("error-password_confirmation").innerText = "";
        }

        // Validar Edad
        let edad = document.getElementById("edad").value;
        if (edad < 18) {
            valido = false;
            document.getElementById("error-edad").innerText = "Debes ser mayor de 18 años.";
        } else {
            document.getElementById("error-edad").innerText = "";
        }

        if (!valido) {
            event.preventDefault();
        }
    });
});
