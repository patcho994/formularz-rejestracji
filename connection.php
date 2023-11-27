<?php

function connect_to_database(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'users';

    $con = new mysqli($servername, $username, $password, $dbname);

    if ($con->connect_error){
        die('Błąd połączenia' . $con->connect_error);
    } else {
        echo 'Prawidłowo połączono';
    }
    return $con;
}

$con = connect_to_database();