<?php
    include('conection.php');
    $sqlTable = 'SELECT * FROM alumnos';
    $resultado = $conn->query($sqlTable);

    echo '<table class="table" id="tabla">';
    echo '<thead class="thead">';
    echo '<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Edad</th><th>Email</th><th>Telefono</th><th>Curso</th></tr>';
    echo "<thead/>";
    echo "<tbody>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
        <td>".$fila["id"]."</td>
        <td>".$fila["names"]."</td>
        <td>".$fila["last_names"]."</td>
        <td>".$fila["age"]."</td>
        <td>".$fila["email"]."</td>
        <td>".$fila["phone"]."</td>
        <td>".$fila["course"]."</td>
        </tr>";
    }
    echo "<tbody>";
    echo "</table>";
    $conn->close();
?>