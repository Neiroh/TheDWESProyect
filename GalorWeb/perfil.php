<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="./css/perfil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"> 
</head>

<body>

    <?php

        $correoViejo = $_SESSION['correo'];

        include "./app/crud.php";
        $datos = muestraDatosUsuario($correo);

        if($_POST['guardar']){

            editaUser($correoViejo, $_POST['ususario'], $_POST['correo']);

        }

        if($_POST['cambiaFoto']){

            fotoPerfil($correo, $_POST['cambiaFoto']);

        }

    ?>

    <header>

        <div class="logo">
            <img src="" alt="logo">
            <h1>Galor</h1>
        </div>

        <div class="perfil">
            <h3>Nombre Perfil</h3>
            <input type="button" name="perfil" id="perfil" value="V">
            <img src="data:image/png;base64, <?php base64_encode($dato["foto"]);?>" alt="foto_perfil" class="fotoPerfilTop">
        </div>

    </header>

    <main>
        <form action="#" method="post">

            <img src="data:image/png;base64, <?php base64_encode($dato["foto"]);?>" alt="foto_perfil">
            <input type="file" value="Cambiar foto" class="botonCambio" name="fotoPerfil">

            <input type="submit" value="Cambiar foto" name="cambiaFoto" class="boton cambiaFoto">

        </form>

        <form action="#" method="post">

            <h2><?php $datos["nombre"]; ?></h2>
            <input id="usuario" type="text" value=" > Cambiar nombre de usuario" class="botonCambio" name="usuario" onclick="cambiaUsuario()" readonly>

            <div class="lineaSeparadora"></div>

            <h3>Correo</h3>
            <input type="text" name="correo" id="correo" class="input inputCorreo" value="<?php $datos["correo"]; ?>" onclick="cambiaCorreo()" readonly>

            <input type="submit" value="Guardar cambios" class="boton guardar" name="guardar" onclick="vuelveNormal()">

        </form>

    </main>

    <script src="./js/cambiaDatos.js"></script>
</body>

</html>