<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galor</title>
</head>
<body>
    
    <header>

        <img class="logo" src="" alt="">
        <h1>Galor</h1>

    </header>

    <main>

        <nav>

            <div class="botonRegistro" onclick="oscurece()"><p>Regístrate</p></div>
            <div class="botonInicio" onclick="oscurece()"><p>Iniciar Sesión</p></div>

        </nav>

        <div id="capaOscura">

        <div class="buscador">

            <form action="./buscador" method="get" value="Color">

                <input type="text" class="buscador">

                <select name="categoria" id="categoria">

                    <option value="azul">Azul</option>
                    <option value="verde">Verde</option>
                    <option value="rojo">Rojo</option>
                    <option value="negro">Negro</option>
                    <option value="blanco">Blanco</option>
                    <option value="rosa">Rosa</option>
                    <option value="gris">Gris</option>

                </select>

                <input type="submit" class="enviaBuscador" value="Buscar">

            </form>

        </div>

        <div class="contenedorImagenes">



        </div>

        </div>

    </main>

    <footer>
    </footer>

    <script>

        //Función para oscurecer toda la página al pulsar sobre el inicio de sesión o el registro
        function oscurece(){

            let capaOscura = document.getElementById("capaOscura");

            capaOscura.style.backgroundColor = "black";
            capaOscura.style.width = "100vw";
            capaOscura.style.height = "100vh";
            capaOscura.style.opacity = "60%";
            capaOscura.style.position = "relative";
            capaOscura.style.zIndex = "2";

        }
    
    </script>

</body>
</html>