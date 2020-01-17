<?php
include("../conexion/conexion.php");

    $user=$_POST["txtUsuario"];
    $pass=$_POST["txtPass"];
    $consulta="SELECT * FROM usuario WHERE usuario.nombUsuario='$user'
    AND usuario.password = '$pass'";

    $ejecConsulta = mysqli_query($conn,$consulta);

    $regUsuario=mysqli_fetch_assoc($ejecConsulta);

    if($regUsuario["nombUsuario"]==$user && $regUsuario["password"]==$pass){
        session_start();
        $_SESSION["usuario"] = $user;
        $_SESSION["rol"]=$regUsuario["idRol"];
        $_SESSION["foto"]=$regUsuario["foto"];

        //redireccionar al index
        header("location:../producto/productosPrincipal.php");
    }else{
        echo"Los datos son incorrectos, intenta de nuevo";
        echo "<br><a href='login.php'>Iniciar sesion</a>";
    }
?>