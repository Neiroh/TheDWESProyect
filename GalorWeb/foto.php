<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foto</title>
    <link rel="stylesheet" href="./css/foto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"> 
</head>

<body>
    <input type="hidden" id="idP" value="<?php echo $_GET['id'];?>">
    <header>

        <a href="./index.php">
        <div class="logo">
            <img src="images/camara.png" alt="logo">
            <h1>Galor</h1>
        </div>
        </a>

    </header>
    <hr>
    <main>

        <div class="info">

            <div class="fotoTitulo">
                <img alt="foto" class="bigFoto" id="bigFoto">
                <div class="titulo">
                    <h2 id="titPho">Camino a la libertad</h2>
                    <hr>
                    <p class="descripcion" id="desc">El lugar produce sensación de quietud,
                                            calma, tranquilidad. También de soledad,
                                            pues no se ve ningún rastro de seres
                                            animados en todo él. Puede parecer que
                                            se acaba el verano y llegan los primeros
                                            días del cambio de estación, de una
                                            manera serena y absolutamente natural.
                    </p>
                    <div class="likes">
                        <img src="images/megusta.png" alt="foto" class="megusta">
                        <p class="numLikes">32</p>
                    </div>
                </div>
            </div>

            <div class="separador"></div>

            <div class="comentarios">
                <h3>Comentarios</h3>
                <hr>

                <div class="usuario">
                    <img src="images/camara.png" alt="perfil">
                    <h3>ARCE69</h3>
                    <input type="text" name="comentario" id="comentario" placeholder="Escribe tu comentario público">
                </div> 
            </div>

        </div>
    </main>

    <footer>
    <hr>
        <h3>2º Desarrollo de Aplicaciones Web en Entorno Servidor</h3>
    </footer>
    <script>
        window.addEventListener('load', ()=>{
            fotoSola(document.getElementById('idP').value);
            titulo(document.getElementById('idP').value);
            desc(document.getElementById('idP').value);
        });
    </script>
    <script src="js/ajaxUnaFoto.js"></script>
</body>

</html>