<?php
    include('conection.php');
    if (isset($_POST['name'])) {
            $name = $_POST["name"];
            $lastName = $_POST["lastName"];
            $age = $_POST["age"];
            $email = $_POST["email"];
            $tel = $_POST["phone"];
            $curso = $_POST["course"];

            if (!empty($name) or !empty($lastName) or !empty($age) or !empty($email) or !empty($tel) or !empty($curso)) {
                $sql = $conn->query("INSERT INTO alumnos(names,last_names,age,email,phone,course) values('$name','$lastName','$age','$email','$tel','$curso')");
                if ($sql==1) {
                    echo "REGISTRO COMPLETADO";
                } else {
                    echo "NO SE PUDO REGISTRAR ALUMNO";
                };
            } else {
                echo "COMPLETA TODOS LOS DATOS DEL FORMULARIO";
            }
    }


    // if (!empty($_POST["btnRegister"])) {
    //     if (empty($_POST["ins_nombre"]) or empty($_POST["ins_apellido"]) or empty($_POST["ins_edad"]) or empty($_POST["ins_email"]) or empty($_POST["ins_tel"]) or empty($_POST["ins_curso"])) {
    //         echo "<div class='bxform__void'>COMPLETA TODOS LOS CAMPOS</div>";
    //     } else {
    //         $name = $_POST["ins_nombre"];
    //         $lastName = $_POST["ins_apellido"];
    //         $age = $_POST["ins_edad"];
    //         $email = $_POST["ins_email"];
    //         $tel = $_POST["ins_tel"];
    //         $curso = $_POST["ins_curso"];

    //         $sql = $conn->query("INSERT INTO alumnos(names,last_names,age,email,phone,course) values('$name','$lastName','$age','$email','$tel','$curso')");
    //         if ($sql==1) {
    //             echo "<div class='bxform__void'>REGISTRO COMPLETADO</div>";
    //         } else {
    //             echo "<div class='bxform__void'>NO SE PUDO REGISTRAR ALUMNO</div>";
    //         };
    //     };
    // };
?>