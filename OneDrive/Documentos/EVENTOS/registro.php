<?php
   //primero hacemos la connexión con la BD
   require_once 'conexion.php';
   
   if($_POST){ //le dimos click a enviar
    //LLamamos los datos del formulario  
      $nombre=$_POST['nombre'];
      $apellidos=$_POST['apellidos'];
      $usuario=$_POST['usuario'];
      $clave=$_POST['clave'];
      $perfil="usser"; //usuario normal

      //Recordar la validación de campos desde el servidor
     
     $consulta= "INSERT INTO usuarios VALUES 
     ('','$nombre','$apellidos','$usuario','$clave','$perfil')";
    
      if($conexion->query($consulta)===true){
         echo "<script>alert('Registro exitoso.')</script>";
           //le abro la interfaz del usuario normal
    echo "<script>window.location.href = 'bienvenido_user.html';</script>";   
        }else{
    echo "<script>alert('Error al registrar el usuario.')</script>";
    echo "Error de SQL."." ".$consulta->connect_error;   
            //le abro la interfaz del usuario normal
     echo "<script>window.location.href = 'index1.html';</script>";
      }
   }
?>