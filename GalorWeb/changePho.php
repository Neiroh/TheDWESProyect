<?php

require_once('app/crud.php');

$email = $_GET['email'];
$img = $_GET['pho'];
editaPho($email, $img);