<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/styles/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="./public/js/update.js" defer></script>
    <title>Document</title>
</head>

<body>
    <div class="background" >
        <ul class="background__circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div > 
    <main class="container">
        <!-- <div class="buttons">
            <ul class="buttons__list">
                <li><a href="#" class="buttons__list--btn">Inscripción</a></li>
                <li><a href="./public/views/dataAlumnos.php" class="buttons__list--btn">Base de Alumnos</a></li>
            </ul>
        </div> -->
        <section class="container__sections">
            <form action="" method="POST" class="bxform">
                <figure class="bxform__bxfigure">
                    <img src="./public/img/user.png" alt="user-image">
                </figure>
                <span class="bxform__title">Formulario de inscripción a estudiantes</span>
                <?php
                    include "./server/conection.php";
                    include "./server/controller_register.php";
                ?>
                <div class="bxinput">
                    <input class="input" name="ins_nombre" type="text" >
                    <label class="label">Nombre</label>
                </div>
                <div class="bxinput">
                    <input class="input" name="ins_apellido" type="text" >
                    <label class="label">Apellido</label>
                </div>
                <div class="bxinput">
                    <input class="input" name="ins_edad" type="text" >
                    <label class="label">Edad</label>
                </div>
                <div class="bxinput">
                    <input class="input" name="ins_email" type="text" >
                    <label class="label">Correo</label>
                </div>
                <div class="bxinput">
                    <input class="input" name="ins_tel" type="text" >
                    <label class="label">Telefono</label>
                </div>
                <div class="bxinput">
                    <input class="input" name="ins_curso" type="text" >
                    <label class="label">Curso</label>
                </div>
                <div class="bxinput__bx-register">
                    <input type="submit" class="bxinput__bx-register--btn" name="btnRegister" value="Registrar Alumno"/>
                </div>
            </form>
        </section>   
        <section class="container__sections">
            <?php
                include "./server/conection.php";
                include "./server/controller_table.php";
            ?>
        </section>     
    </main>
</body>

</html>