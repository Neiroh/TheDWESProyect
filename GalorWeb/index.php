<!DOCTYPE html>
<html id="html">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Image Search App">
    <meta name="keywords" content="HTML,CSS,JavaScript, images, API">
    <meta name="author" content="Neha Soni">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galor</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"> 
</head>

<body>
    
    <header>

        <div class="logo">
            <img src="images/camara.png" alt="logo">
            <h1>Galor</h1>
        </div>
        <p id="errorL"></p>

        <?php
            require_once('app/crud.php');
            //require_once('app/sesiones.php');

            if (isset($_POST['completarLogin'])) {
                if (isset($_POST['correoSesion']) && isset($_POST['passSesion'])) {
                echo '<script>console.log(123);</script>';
                }

                iniciarSesion($_POST['correoSesion'], $_POST['passSesion']);
            }

            creaHeader();
        ?>

    </header>
    <hr>
    <main>

        <div class="edit" id="divPerf">

            <div class="miPerfil">Mi Perfil</div>
            <hr>
            <div class="cerrar">Cerrar Sesión</div>

        </div>

        <div class="Registro" id="divReg">

            <!--Posicionar arriba a la derecha para cuando se pulse el botón-->
            <!--Lo de aparecer o desaparecer va con js-->

                <p>
                    <label for="correoRegistro">Correo electrónico: </label><br>
                    <input type="text" name="correoRegistro" placeholder="micorreo@correo.com" class="inserta" id="correoRegistro">
                </p>

                <p>
                    <label for="nombreRegistro">Nombre: </label><br>
                    <input type="text" name="nombreRegistro" placeholder="Inserta tu nombre" class="inserta" id="nombreRegistro">
                </p>

                <p>
                    <label for="passRegistro">Contraseña: </label><br>
                    <input type="password" name="passRegistro" placeholder="Tu contraseña" class="inserta" id="passRegistro">
                </p>
                <p>
                    <input type="submit" name="completarRegistro" value="Registrate" class="completaRegistro" id="botonRegistro">
                </p>
                <p id="errorR"></p>

        </div>

        <!--Posicionar arriba a la derecha para cuando se pulse el botón-->
        <!--Lo de aparecer o desaparecer va con js-->
        <div class="login" id="divL">

            <form action="#" method="POST">
                <p>
                    <label for="correoSesion">Correo electrónico: </label><br>
                    <input type="text" name="correoSesion" placeholder="micorreo@correo.com" class="inserta inicioS" id="emailLog">
                </p>

                <p>
                    <label for="passSesion">Contraseña: </label><br>
                    <input type="password" name="passSesion" placeholder="password" class="inserta inicioS" id="passLog">
                </p>
                <p>
                    <input type="submit" name="completarLogin" value="IniciarSesion" class="completaLogin" id="botonLogin" >
                </p>


            </form>


        </div>

        <div class="relleno" id="relleno">
        </div>

        <div class="capaGrande">
            <div class="contenedorImagenes" id="contenedorImagenes">
            </div>
            <button id="prev" class="prev" onclick=" ++page; show(document.getElementById('inputBusqueda').value, page); console.log(page)">Cargar más</button>
        </div>

    </main>

    <footer>
    <hr>
        <h3>2º Desarrollo de Aplicaciones Web en Entorno Servidor</h3>
    </footer>

    
    <script src="./js/index.js"></script>
    <script src="./js/ajax.js"></script>
    <script src="./js/enter.js"></script>
    <script src="./js/registerAjax.js"></script>
    <script src="./js/openDivs.js"></script>
    <script src="./js/clear.js"></script>



</body>

</html>