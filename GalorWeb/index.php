<!DOCTYPE html>
<html>

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

        <div class="perfil">
            <h3>Nombre Perfil</h3>
            <input type="button" name="perfil" id="perfil" value="V">
            <img src="" alt="foto_perfil" class="fotoPerfilTop">
        </div>

        <div class="sesion">

            <div class="boton registro">Regístrate</div>
            <div class="boton inicioSesion">Iniciar Sesión</div>

        </div>
    </header>
    <hr>
    <main>

        <div class="Registro">

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
                <p id="error"></p>

        </div>

        <!--Posicionar arriba a la derecha para cuando se pulse el botón-->
        <!--Lo de aparecer o desaparecer va con js-->
        <div class="login">

            <form action="./inicioSesion.php" method="post">

                <p>
                    <label for="correoSesion">Correo electrónico: </label><br>
                    <input type="text" name="correoSesion" placeholder="micorreo@correo.com" class="inserta inicioS">
                </p>

                <p>
                    <label for="passRegistro">Contraseña: </label><br>
                    <input type="password" name="passRegistro" placeholder="micorreo@correo.com" class="inserta inicioS">
                </p>
                <p>
                    <input type="submit" name="completarLogin" value="Iniciar Sesión" class="completaLogin" id="botonLogin">
                </p>

            </form>

        </div>

        <div class="search">
            <input type="text" class="inputBusqueda" id="inputBusqueda" placeholder="Buscador...">
            <input type="submit" name="enviaBusqueda" id="enviaBusqueda" class="enviaBusqueda boton" value=">" onclick="show(document.getElementById('inputBusqueda').value, page)">
        </div>

        <div class="capaOscura">

            <div class="contenedorImagenes" id="contenedorImagenes">
                Holi
            </div>
            <button id="prev" class="prev" onclick=" ++page; show(document.getElementById('inputBusqueda').value, page); console.log(page)">Cargar más</button>
        </div>

        

    </main>

    <hr>
    <footer>
        <h3>2º Desarrollo de Aplicaciones Web en Entorno Servidor</h3>
    </footer>
    <script src="./js/index.js"></script>
    <script src="./js/ajax.js"></script>
    <script src="./js/enter.js"></script>
    <script src="./js/registerAjax.js"></script>

</body>

</html>