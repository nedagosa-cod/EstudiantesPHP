<?php
    $host = $_POST['host'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $dbname = $_POST['dbname'];

        // Crear conexión
    $conn = new mysqli($host, $user, $pass);

    // Verificar conexión
    if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
    }

    // Crear base de datos
    $sqlCrearBase = "CREATE DATABASE IF NOT EXISTS atento";
    if ($conn->query($sqlCrearBase) === TRUE) {
    echo "Base de datos creada con éxito. ";
    } else {
    echo "Error al crear la base de datos: " . $conn->error;
    }

    // Seleccionar la base de datos
    $conn->select_db("atento");

    // Crear tabla
    $sqlCrearTabla = "CREATE TABLE IF NOT EXISTS alumnos (
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    names VARCHAR(255) NOT NULL,
    last_names VARCHAR(255) NOT NULL,
    age int NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone int NOT NULL,
    course VARCHAR(255) NOT NULL
    )";

    if ($conn->query($sqlCrearTabla) === TRUE) {
    echo "Tabla creada con éxito.";
    } else {
    echo "Error al crear la tabla: " . $conn->error;
    }

    $conn->close();
?>