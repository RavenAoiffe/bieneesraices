<?php

function conectarDB() : mysqli{
    $db = mysqli_connect('localhost','root','','bienesraices');

    if(!$db){
        echo 'ERROR no se pudo conectar';
        exit;
    }

    return $db;
}