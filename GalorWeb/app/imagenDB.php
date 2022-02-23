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

?>