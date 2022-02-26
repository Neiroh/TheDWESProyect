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

        //$correoViejo = $_SESSION['correo'];

        require_once('app/sesiones.php');
        //$datos = muestraDatosUsuario($correo);

        /*if($_POST['guardar']){

            editaUser($correoViejo, $_POST['ususario'], $_POST['correo']);

        }

        if($_POST['cambiaFoto']){

            fotoPerfil($correo, $_POST['cambiaFoto']);

        }*/
    ?>

<header>

    <div class="logo">
        <img src="images/camara.png" alt="logo">
        <h1>Galor</h1>
    </div>

    <div class='perfil' id="divPerfil">
        <h3 id="h3User"></h3>
        <input type='button' name='perfil' id='perfil' value='V'>
        <img alt='foto_perfil' class='fotoPerfilTop' id="imgUser">
    </div>

    

</header>
<hr>

    <main>
        <div class="edit" id="divPerf">
            <form method="POST" action="perfil.php">
                <input type="submit" class="miPerfil" id="miPerf" value="Mi Perfil"></input>
            </form>
            <hr>
            <form method="POST" action="index.php">
                <input name="closeSesion" type="submit" class="cerrar" id="cerSes" value="Cerrar Sesión"></input>
            </form>
        </div>

        <div class="contenedor">
            <div class="usuario">
                <div class="foto">

                        <img alt="foto_perfil" id="imgPerf"><br>
                        <input type="file" value="Cambiar foto" class="botonCambio" name="fotoPerfil"><br>

                        <input type="submit" value="Cambiar foto" name="cambiaFoto" class="boton cambiaFoto" id="changePho" onclick="upPho();">

                </div>

                <form action="#" method="post">

                    <h2 id="h2Perf"></h2>
                    <input id="usuario" type="text" value=" > Cambiar nombre de usuario" class="cambiarNombre" name="usuario" onclick="cambiaUsuario()" readonly>

            </div>
            <div class="correo">
                <h3>Correo</h3>
                <input type="text" name="correo" id="correo" class="input inputCorreo" onclick="cambiaCorreo()" readonly>
            </div>

                <input type="submit" value="Guardar cambios" class="boton guardar" name="guardar" onclick="vuelveNormal()">
            
            </form>
        </div>

        <div class="relleno" id="relleno"></div>
    </main>
    <footer>
    <hr>
        <h3>2º Desarrollo de Aplicaciones Web en Entorno Servidor</h3>
    </footer>
    <script src="./js/cambiaDatos.js"></script>
    <script src="./js/perfil.js"></script>
    <script src="./js/openDivsPerfil.js"></script>


    <?php 
        creaHeader();
        montaPerfil();
    ?>
</body>

</html>