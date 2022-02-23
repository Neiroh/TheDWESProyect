<?php

    function recibeInfoImagen(){

        //Comprobamos que la conexión se realice con éxito
        try{
            $db = new mysqli('localhost', 'galorDB', 'arce', '123456');

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }

        $consulta = $db->query("SELECT u.nombreUser, u.fotoPerfil, c.text FROM user u INNER JOIN coment c ON c.idUser = u.idUser INNER JOIN img ON ")

    }

?>