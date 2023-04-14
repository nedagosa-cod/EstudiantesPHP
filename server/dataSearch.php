<?php
    include('conection.php');
    $search = $_POST['search'];
    if (!empty($search)) {
        $query = "SELECT * FROM alumnos WHERE names LIKE '$search%'";
        $result = $conn->query($query);
        if (!$result){
            die("Query failed");
        }

        $json = array();
        while($row = $result->fetch_assoc()) {
            $json[] = array(
                'id' => $row['id'],
                'names' => $row['names'],
                'lastNames' => $row['last_names'],
                'age' => $row['age'],
                'email' => $row['email'],
                'phone' => $row['phone'],
                'course' => $row['course']
            );
        }
        $jsonString = json_encode($json);
        echo $jsonString;
    };
?>