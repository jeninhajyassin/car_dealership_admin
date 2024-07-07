<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "car_dealership";

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if(!$conn){
        die("Database connection failed: Contact The Admin " . mysqli_error($conn));
    }




