<?php
    session_start();
    if (isset($_POST['User']) and isset($_POST['Password']) and isset($_POST['First'])and isset($_POST['last']) and isset($_POST['Second']) and isset($_POST['e-mail'])){
         include ('conexion.php');
        $user=mysqli_real_escape_string($conexion,$_POST['User']);
        
        $password=password_hash($_POST['Password'],PASSWORD_DEFAULT);
            $firstname=mysqli_real_escape_string($conexion,$_POST['First']);
            $name=mysqli_real_escape_string($conexion,$_POST['Name']);
            $lastname=mysqli_real_escape_string($conexion,$_POST['last']);
            $secondlastname=mysqli_real_escape_string($conexion,$_POST['Second']);
            $email=mysqli_real_escape_string($conexion,$_POST['e-mail']);
        $query_name='select * from registro where User_name="'.$user.'" or correo_electronico="'.$email.'"';
       
        $comprobacion= $conexion->query($query_name);
        if($comprobacion->num_rows==0){
            
            
            $insertar = mysqli_query($conexion,'insert into registro(User_name,Contrasenia,primer_nombre,segundo_nombre,apellido_paterno,apellido_materno,correo_electronico) values ("'.$user.'","'.$password.'","'.$firstname.'","'.$name.'","'.$lastname.'","'. $secondlastname.'","'.$email.'")') or die ('Ocurrio un problema al intentar registrarlo intente nuevamente<br>'.mysqli_error($conexion));    
            header('location: aceptado.php');
            mysqli_close($conexion);
        }
        else{
            //printf("%s, y %d",$query_name,$comprobacion->num_rows);
            header('location: ya_existe.php');
        }
        /*
        User
Password

Name
last

e-mail
        */
    }
    else{
        header('location: error.php');
    }
    
?>
