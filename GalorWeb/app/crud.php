<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    /*
    *Función para crear usuarios
    *
    *@param $nombre recoge el nombre del usuario que se quiere crear
    *@param $correo recoge el correo con el que se identificará el usuario
    *@param $passwd es la contraseña para acceder al usuario
    *
    */
    function creaUser($nombre, $correo, $passwd){

        //Intentamos iniciar la conexión en la base de datos
        try{
            $db = new mysqli('localhost', "ahmed", "123456", "galorDB");

            if($db->connect_errno){

                //Error al soltar un error la función
                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){
            //Otro tipo de error
            echo "Excepción $ex <br>";

        }
        

        //$contra = hash('sha256', $passwd, false);

        //Comprobamos que se pueda realizar la consulta
        try{
            $consulta = $db->query("SELECT nombreUser FROM user WHERE correoUser = '$correo'");

            if($consulta->fetch_object()){

                //Si da error de que ya existe el usuario lanzamos una excepción
                throw new Exception("Ese usuario ya existe");

            }else{

                $db->query("INSERT INTO user(nombreUser, passwd, correoUser) VALUES ('$nombre', '$passwd', '$correo')");

            }

        }catch(Exception $ex){

            //Si no, lanzamos otra
            echo "Excepción ", $ex, "<br>";

        }

        //Cerramos la base de datos
        $db->close();

    }

    /*
    *Función para iniciar sesión
    *
    *@param $correo recoge el correo con el que se quiere iniciar sesión
    *@param $passwd recoge la contraseña del correo con la que se quiere iniciar sesión
    *
    *@return un boolean para saber si el inicio se ha realizado con éxito
    */
    function iniciarSesion($correo, $passwd){

        try{
            $db = new mysqli('localhost', "ahmed", "123456", "galorDB");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }

        //Realizamos la consulta para comprobar que la contraseña sea la misma
        $consulta = $db->query("SELECT correoUser, passwd FROM user WHERE correoUser = '$correo'");
        $recorreConsulta = $consulta->fetch_object();

        //Comprobación
        if($recorreConsulta->passwd === $passwd){

            return true;

        }else{

            return false;

        }

        //Cerramos la base de datos
        $db->close();

    }

    /*
    *Función para borrar usuarios
    *
    *@param $correo almacena el correo del usuario que queremos borrar
    *
    */
    function borraUser($correo){

        //Comprobamos que la conexión se realice con éxito
        try{
            $db = new mysqli('localhost', "ahmed", "123456", "galorDB");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }

        //Borramos el usuario con el correo indicado
        $db->query("DELETE FROM user WHERE correo = '$correo'");

    }

    /*
    *Función para mostrar la información en el perfil de usuario
    *
    *@param $correo guarda el correo del usuario del que queremos ver el perfil
    *
    *@return un un array asociativo con los datos que queremos mostrar en el perfil
    */
    function muestraDatosUsuario($correo){

        //Comprobamos que la conexión se realice con éxito
        try{
            $db = new mysqli('localhost', "ahmed", "123456", "galorDB");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }

        //Seleccionamos los valores desde la base de datos para mostrarlos en la página
        $datos = $db->query("SELECT nombreUser, correoUser, fotoPerfil FROM user WHERE correoUser = '$correo'");
        $datos->fetch_object();

        //Almacenamos todos los valores en un array asociativo para devolverlos a la página desde la que se llama a la función para mostrar los datos
        //Usar <img width='100' src='data:image/png;base64, ".base64_encode($res->fotoPerfil)."'></img> para visualizar la imagen
        $muestra = array(
            "nombre" => $datos->nombreUser,
            "correo" => $correo,
            "foto" => $datos->fotoPerfil
        );

        return $muestra;

    }

    /*
    *Función para editar usuarios
    *
    *@param $correoViejo almacena el correo de la cuenta a la que queremos modificar los datos
    *@param $nombreNuevo almacena el nuevo nombre que queremos poner
    *@param $correoNuevo almacena el nuevo correo que queremos almacenar
    */
    function editaUser($correoViejo, $nombreNuevo, $correoNuevo){

        //Comprobamos que la conexión se realice con éxito
        try{
            $db = new mysqli('localhost', "ahmed", "123456", "galorDB");

            if($db->connect_errno){

                throw new Exception("No se ha podido acceder a la basede datos");

            }
        }catch(Exception $ex){

            echo "Excepción $ex <br>";

        }

        //Establecemos los nuevos valores
        $db->query("UPDATE user SET nombreUser = '$nombreNuevo', correoUser = '$correoNuevo' WHERE correoUser = '$correoViejo'");

    }
    

?>