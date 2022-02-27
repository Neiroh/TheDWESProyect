<?php

/*
    *Función para contar los likes de las imágenes
    *
    *@param $idImg almacena el id de la imagen de la que queremos contar los likes
    *
    *@return $cuentaLikes devuelve el número de likes que hemos contado en la tabla
    */
    function cuentaLikes($idImg){

        $cuentaLikes = 0;

        //Comprobamos que la conexión se realice con éxito
        try{
            $db = new mysqli('localhost', "ahmed", "123456", "galorDB");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        $consulta = $db->query("SELECT idImg FROM likes WHERE idImg = '$idImg'");

        while($likes = $consulta->fetch_object()){
            $cuentaLikes++;
        }

        return $cuentaLikes;
    }

    /*
    *Función para añadir un like en caso de que el usuario haya pulsado el mismo
    *
    *@param $idImg almacena el id de la imagen a la que queremos añadir el like
    *@param $idUser almacena el id del usuario al que queremos añadir el like
    *
    */
    function añadirLike($idImg, $idUser){
        try{
            $db = new mysqli('localhost', "ahmed", "123456", "galorDB");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }
        $consulta = $db->query("SELECT idImg from img where idImg = '$idImg'");
        $exec = $consulta->fetch_object();
        if (!$exec) {
            $db->query("INSERT INTO img VALUES ('$idImg')");
        }

        $db->query("INSERT INTO likes VALUES ('$idImg', '$idUser')");
        echo 'hola';
    }

    /*
    *Función para quitar el like de una foto a un usuario
    *
    *@param $idImg almacena el id de la imagen a la que queremos añadir el like
    *@param $idUser almacena el id del usuario al que queremos añadir el like
    *
    */
    function quitarLike($idImg, $idUser){

        try{
            $db = new mysqli('localhost', "ahmed", "123456", "galorDB");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        $db->query("DELETE FROM likes WHERE idImg = '$idImg' AND idUser = '$idUser'");
    }

    /*
    *Función para comprobar si un usuario ha dado o no like a una imagen
    *
    *@param $idImg almacena el id de la imagen a la que queremos añadir el like
    *@param $idUser almacena el id del usuario al que queremos añadir el like
    *
    *@return devuelve true o false en función de si hay un like registrado o no
    */
    function compruebaLike($idImg, $idUser){

        try{
            $db = new mysqli('localhost', "ahmed", "123456", "galorDB");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        $consulta = $db->query("SELECT idUser FROM likes WHERE idUser = '$idUser' AND idImg = '$idImg'");
        $ejecuta = $consulta->fetch_object();

        if($ejecuta){

            return true;

        }else{

            return false;

        }

    }

    function creaComentario($idUser, $idImg, $texto){

        try{
            $db = new mysqli('localhost', "ahmed", "123456", "galorDB");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        $db->query("INSERT INTO coment VALUES ('$idImg', '$idUser', '$texto')");

    }

    function borraComentario($idUser, $idImg, $texto){

        try{
            $db = new mysqli('localhost', "ahmed", "123456", "galorDB");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        $db->query("DELETE FROM coment WHERE idImg = '$idImg' AND idUser = '$idUser' AND text = '$texto'");

    }

    function muestraDatosComentario($idImg){

        try{
            $db = new mysqli('localhost', "ahmed", "123456", "galorDB");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo $ex->getMessage(), "<br>";

        }

        $consulta = $db->query("SELECT u.fotoPerfil, u.nombreUser, c.text, c.idImg FROM user u INNER JOIN coment c ON u.idUser = c.idUser WHERE c.idImg = '$idImg'");

        if($ejecuta = $consulta->fetch_array(MYSQLI_ASSOC)){

            return $ejecuta;
            
        }

    }

?>