<?php
    include('conection.php');

    $id = $_POST['id'];
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $query = "UPDATE alumnos SET names = '$name', last_names = '$lastName', age = '$age', email = '$email', phone = '$phone', course = '$course' WHERE id = '$id'";

    $result = $conn->query($query);

    if (!$result) {
        die("Consulta fallida");
    } else {
        echo "DATOS ACTUALIZADOS CORRECTAMENTE";
    }
?>