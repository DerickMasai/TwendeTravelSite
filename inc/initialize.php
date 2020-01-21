<?php

    $DB_NAME = "twende";
    $DB_USER = "root";
    $DB_PASS = "";
    $DB_SERVER = "localhost";

    $connect = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASS, $DB_NAME);

    if (!$connect) {
        
        echo "Failed to connect to the database ¬ " . mysqli_connect_error();
        
    }

?>