<?php 

    include ("conexion.php");
    
    $con = connection();

    $id= null;
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    //Encriptar

    $password = hash('sha512', $password);

    //No repetir info en db

    $verificar_c = mysqli_query($con, "SELECT * FROM usuarios WHERE correo='$correo'");

    if(mysqli_num_rows($verificar_c) > 0){
        echo '
        <script>
            alert("Este correo ya esta en uso, usa otro correo para registrarte");
            window.location = "../index.html";
        </script>
        ';
        exit();
        } 

        $verificar_u = mysqli_query($con, "SELECT * FROM usuarios WHERE usuario='$usuario'");

        if(mysqli_num_rows($verificar_u) > 0){
            echo '
            <script>
                alert("Este Usuario ya esta en uso, digita otro usuario para registrarte");
                window.location = "../index.html";
            </script>
            ';
            exit();
            } 

        $sql = "INSERT INTO usuarios values('$id', '$nombre_completo', '$correo', '$usuario', '$password')";
        $query = mysqli_query($con, $sql);
    
        
    if($query){
        echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../login.php";
        </script>
        ';
    } 
    else{
        echo '
    <script>
        alert ("Intentalo de nuevo, usuario no almacenado");
        window.location = "../login.php";
    </script>
        ';
    }


    mysqli_close($con);

?>
