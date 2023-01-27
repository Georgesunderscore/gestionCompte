<?php

// include ("Compte.php");
// include ("Titulaire.php");

//importer tous les classes 
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
    });
    
$t1 = new Titulaire("kayal","georges",'01-01-1986',"strasbourg");
//echo $t1;

$c1 = new Compte($t1, "€", 500, "test");
echo $c1;