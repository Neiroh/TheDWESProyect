<?php

    include "./crud.php";

    /*Función para iniciar una sesión
    *
    *@param $correo almacena el correo con el que queremos iniciar sesión
    *@param $passwd almacena la contraseña para iniciar sesión con el correo indicado anteriormente
    *
    *@return $_SESSION['correo'] devuelve el correo en forma de sesión para mantenerla iniciada
    */
    function abreSesion($correo, $passwd){

        $_SESSION['correo'] = "";
        $_SESSION['passwd'] = "";

        if(session_id() == ""){
            session_start();
        }

        if(iniciarSesion($correo, $passwd)){

            if(!isset($_SESSION['correo']) || !isset($_SESSION['passwd'])){

                $_SESSION['correo'] = $correo;

                return $_SESSION['correo'];

            }

        }else{

            echo "El correo insertado no existe";

        }

    }

?>