<?php
session_start();
if(isset($_POST['User']) and isset($_POST['Password'])){
    include ('conexion.php');/*Heredacion de la clase canexion.php*/
    /*Proteccion contra inyeccion de codigo*/
    $user = mysqli_real_escape_string($conexion,$_POST['User']);
    $password = mysqli_real_escape_string($conexion,$_POST['Password']);
    //printf("la contraseña ingresada es:%s",$password);
    /*Consultas*/
    $query_name='select * from registro where User_name="'.$user.'"';
    /*comprobacion regresa numero de datos encontrados en la base de datos*/
    $comprobacion= $conexion->query($query_name);
    if($comprobacion->num_rows>0){
        $consulta=mysqli_query($conexion,'select Contrasenia from registro where User_Name="'.$user.'"');
        //echo "La contraseña para $user es $consulta";
        $obten_pass=mysqli_fetch_assoc($consulta);
        //printf ("La contraseña para $user es %s",$obten_pass["Contrasenia"]);
       
        $comprueba_pass=password_verify($password,$obten_pass["Contrasenia"]);
        //echo " EXISTE ESA CONTRSEÑA?= $comprueba_pass ";
        //printf(" EXISTE ESA CONTRSEÑA?=%s",password_verify($password,$obten_pass["Contrasenia"]));
        if($comprueba_pass){
            $_SESSION['User_Name']=$user;
            //printf("Bienvenido %s",$_SESSION['User_Name']);
            
            header ('location: ./sesion_abierta.php');
        }
        else{
            print'LOS DATOS SON INCORRECTOS<br>
            <a href="./">Intentar de nuevo</a>';
        }    
    }
    else{
        print'No existe ese usuario<br>
            <a href="./">Intentar de nuevo</a>';
    }
}
else{
    header ('location: ./');
}
?> 