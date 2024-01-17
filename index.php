<?php

include 'User.php';
include 'Admin.php';


$user = new User('tony');
$user->type = new Admin('Anthony');
echo $user->type->greet();

// salida: Hola Administrador