<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    $db = new mysqli('localhost', 'galorDB', 'arce', '123456');

    function creaUser($nombre, $correo, $passwd){

        $contra = hash('sha256', $passwd, false);
        $db->query("INSERT INTO user('nombreUser', 'passwd', 'correoUser') VALUES ($nombre, $correo, $contra)");

    }

?>