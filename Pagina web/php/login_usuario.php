<?php

    session_start();

    include 'conexion.php';

    $connect = connection();

    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    $validar = mysqli_query($connect, "SELECT * FROM usuarios WHERE correo='$correo' and password='$password'");

    if(mysqli_num_rows($validar) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: ../index_login.php");
        exit;
    } else {
        echo '
        <script>
            alert("Este usuario no existe, verifique los datos");
            window.location = "../login.php";
        </script>
        ';
        exit;
    }

?>

