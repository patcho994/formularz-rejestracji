<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // foreach($_POST as $data){
    //     echo $data;
    // }

    // print_r($_POST);
    if (empty($_POST['username'])){
        echo 'Username nie moze byc puste';
    } elseif (strlen($_POST['username']) < 5 || strlen($_POST['username']) > 12){
        echo 'Username nie moze byc krotsze niz 5 znakow ani dluzsze niz 12 znakow';
    }
}