<?php

    function subeImagen($id){

        try{
            $db = new mysqli('localhost', 'galorDB', 'arce', '123456');

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }

        $db->query("INSERT INTO img VALUES ($id)");

    }

    function fotoPerfil($correo, $img){

        try{
            $db = new mysqli('localhost', 'galorDB', 'arce', '123456');

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }

        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false){
            $image = $_FILES['image']['tmp_name'];
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