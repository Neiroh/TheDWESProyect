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
    <?php
        include_once ('app/crud.php');
        $nLikes = cuentaLikes($_GET['id']);
        $liked = compruebaLike($_GET['id'], $_SESSION['email']);
        $datos = muestraDatosUsuario($_SESSION['email']);
        $userName = $datos['nombre'];
        $pic = $datos['foto'];
    ?>
    <input type="hidden" id="idImg" value="<?php echo $_GET['id'];?>">
    <input type="hidden" id="idUser" value="<?php echo $_SESSION['email'];?>">

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
                        <?php
                            if ($liked) {
                                echo '<img src="images/heart.png" alt="foto" class="megusta" id="imgLikes" onclick="quitarLike(idImg, idUser); location.reload();">';
                            }

                            else{
                                echo '<img src="images/megusta.png" alt="foto" class="megusta" id="imgLikes" onclick="console.log(123);darLike(idImg, idUser); location.reload();">';
                            }
                        ?>
                        <p class="numLikes"><?php echo $nLikes;?></p>
                    </div>
                </div>
            </div>

            <div class="separador"></div>

            <div class="comentarios">
                <h3>Comentarios</h3>
                <hr>

                <div class="usuario">
                    <img src="images/camara.png" alt="perfil">
                    <h3><?php echo $userName;?></h3>
                    <input type="text" name="comentario" id="comentario" placeholder="Escribe tu comentario público">
                    <input type="submit" id="subComent">
                </div> 

                <?php
                    montaComent();
                ?>
            </div>

        </div>
    </main>

    <footer>
    <hr>
        <h3>2º Desarrollo de Aplicaciones Web en Entorno Servidor</h3>
    </footer>
    <script>
        window.addEventListener('load', ()=>{
            fotoSola(document.getElementById('idImg').value);
            titulo(document.getElementById('idImg').value);
            desc(document.getElementById('idImg').value);
        });
    </script>
    <script src="js/ajaxUnaFoto.js"></script>
    <script src="js/darLike.js"></script>
    <script src="js/quitarLike.js"></script>
    <script src="js/foto.js"></script>


</body>

</html>