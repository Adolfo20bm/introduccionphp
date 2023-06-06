<?php

// Crea una base de datos en MySQL llamada appsalon
// Crea una tabla srevicios con campo id nombre precio

$db =  mysqli_connect('localhost', 'root', '1234','appsalon');


if(!$db) {
    echo "Hubo un error";
    exit;
}
