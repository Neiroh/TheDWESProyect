<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    function creaUser($nombre, $correo, $passwd){

        try{
            $db = new mysqli('localhost', 'galorDB', 'arce', '123456');

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }
        

        //$contra = hash('sha256', $passwd, false);

        try{
            $db->query("INSERT INTO user('nombreUser', 'passwd', 'correoUser') VALUES ($nombre, $correo, $passwd)");

            if($db->query("SELECT nombreUser FROM user WHERE correoUser = '$correo'")){

                throw new Exception("Ese usuario ya existe");

            }

        }catch(Exception $ex){

            echo "Excepción ", $ex, "<br>";

        }

        $db->close();

    }

    function compruebaSesion($correo, $passwd){

        try{
            $db = new mysqli('localhost', 'galorDB', 'arce', '123456');

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }

        $consulta = $db->query("SELECT correoUser, passwd FROM user WHERE correoUser = '$correo'");
        $recorreConsulta = $consulta->fetch_object();

        if($recorreConsulta->passwd === $passwd){

            return true;

        }else{

            return false;

        }

        $db->close();

    }

    function borraUser($correo){

        try{
            $db = new mysqli('localhost', 'galorDB', 'arce', '123456');

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }

        $db->query("DELETE FROM user WHERE correo = '$correo'");

    }

?>