<?php
    include ('conection.php');
    $id = $_POST['id'];
    $query = "SELECT * FROM alumnos WHERE id = $id";
    $result = $conn->query($query);


    if ($result) {
        $json = array();
        while ($row = $result->fetch_assoc()){
            $json[] = array(
                'id' => $row['id'],
                'name' => $row['names'],
                'lastName' => $row["last_names"],
                'age' => $row["age"],
                'email' => $row["email"],
                'phone' => $row["phone"],
                'course' => $row["course"]
            );
        };
        $jsonString = json_encode($json[0]);
        echo $jsonString;
    };


?>