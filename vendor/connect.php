<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'rest');

    if (!$connect) {
        die('Error connect to DataBase');
    }
