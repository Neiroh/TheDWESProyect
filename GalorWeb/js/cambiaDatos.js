function cambiaDato() {

    let user = document.getElementById("usuario");
    let correo = document.getElementById("correo");

    user.removeAttribute("readonly");
    correo.removeAttribute("readonly");

}

function vuelveNormal() {

    let user = document.getElementById("usuario");
    let correo = document.getElementById("correo");

    user.setAttribute("readonly", "true");
    correo.setAttribute("readonly", "true");

}