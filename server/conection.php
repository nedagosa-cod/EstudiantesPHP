<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "atento";
    $port = 3306;

    $conn = new mysqli($host, $user, $pass, $dbname, $port);
    $conn->set_charset("utf8");
?>