<?php
    include('../../server/conection.php');
    $search = $_POST['search'];
    echo $search;
    if (!empty($search)) {
        $query = "SELECT * FROM alumnos WHERE names LIKE '$search%'";
        $result = $conn->query($query);
        if (!$result){
            die("Query failed");
        }

        $json = array();
        while($row = mysqli_fetch_array($result)) {
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