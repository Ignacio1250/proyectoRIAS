function validadorlogin() {
    email = document.getElementById("username");
    password = document.getElementById("password");
    if (!(/^[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/.test(email.value))) {
        alert("El campo username debe tener un formato de email valido");
        email.style.borderColor = "red";
        return false;

    }

    if (password.value.length < 3) {
        alert("la longitud no puede ser menor a 2 caracteres");
        password.style.borderColor = "red";

        return false;
    }

    return true;
}

function validadorregistro() {
    email = document.getElementById('email');
    password = document.getElementById('password');
    lada = document.getElementById('lada');
    telefono = document.getElementById('telefono');
    if (!(/^[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/.test(email.value))) {
        alert('El email no tiene un formato valido');
        return false;
    }
    if (password.value.length < 10) {
        alert('El password debe tener al menos 10 caracteres');
        return false;
    }
    if (!(/[+]\d{2}/.test(lada.value))) {
        alert('la lada debe tener un formato valido, Ejemplo: +52');
        return false;
    }
    if (telefono.value.length < 10 || telefono.value.length > 10) {
        alert('El numero debe ser de 10 digitos');
        return false;
    }
    return true;
}