<?php

require_once('app/crud.php');

$email = $_GET['email'];
$name = $_GET['name'];
editaNombre($email, $name);