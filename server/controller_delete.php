<?php
    include('conection.php');

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $query = "DELETE FROM alumnos WHERE id = '$id'";
        
        $result = $conn->query($query);
        if (!$result) {
            die("Couldn't delete");
        } else {
            echo "Tarea eliminada";
        }
    }
?>