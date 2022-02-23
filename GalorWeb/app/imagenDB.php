<?php

    /*
    *Función para subir el id de la imagen de la API a nuestra base de datos
    *
    *@param $id almacena el id que trae desde la API para subirlo a nuestra base de datos
    *
    */
    function subeImagen($id){

        //Comprobamos que la conexión se realice con éxito
        try{
            $db = new mysqli('localhost', 'galorDB', 'arce', '123456');

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }

        //Subimos el id a la base de datos
        $db->query("INSERT INTO img VALUES ($id)");

    }

    /*
    *Función para subir la foto de perfil del usuario
    *
    *@param $correo almacena el correo
    *
    */
    function fotoPerfil($correo, $img){

        try{
            $db = new mysqli('localhost', 'galorDB', 'arce', '123456');

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }

            $imgContent = addslashes(file_get_contents($image));
                    
            $insert = $db->query("INSERT INTO user (fotoPerfil) VALUES ('$imgContent') WHERE correoUser = '$correo'");
            if($insert){
                echo "<p>Archivo subido correctamente a la base de datos</p>";
            }else{
                echo "<p>Error al subir el archivo a la base de datos</p>";
            } 

        }else{
            echo "Selecciona un archivo para subir.";
        }
    }
    

?>