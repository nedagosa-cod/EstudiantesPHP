<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "atento";

    $conn = new mysqli($host, $user, $pass, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
        $conn->close();
    }
    $conn->set_charset("utf8");
?>