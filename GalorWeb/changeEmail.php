<?php

require_once('app/crud.php');

$email = $_GET['email'];
$email2 = $_GET['email2'];

editaCorreo($email, $email2);