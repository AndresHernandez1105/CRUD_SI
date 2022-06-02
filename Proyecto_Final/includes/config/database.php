<?php

function conectarDB() : mysqli{
    $db = mysqli_connect('localhost','root','','db_pfsi');

    if(!$db){
        echo "Error: No se puede conectar a db";
        exit;
    }
    return $db;
}
