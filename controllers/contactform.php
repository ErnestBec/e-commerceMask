<?php 
   
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $telefono = $_POST["telefono"];
  $mensaje = $_POST["mensaje"];


   if(empty($nombre)){
      header("location:../includes/contact.php?errorNombre=El nombre esta vacío"); //Da direccion si esta mal redirecciona a una pagina   
    } elseif(empty($correo)){
      header("location:../includes/contact.php?errorCorreo=El correo esta vacío"); //Da direccion si esta mal redirecciona a una pagina   
    } elseif(empty($telefono)){
      header("location:../includes/contact.php?errorTelefono=El telefono esta vacío"); //Da direccion si esta mal redirecciona a una pagina   
    }elseif(empty($mensaje)){
      header("location:../includes/contact.php?errorMensaje=El telefono esta vacío"); //Da direccion si esta mal redirecciona a una pagina   
    } else       header("location:../includes/");

    //else{
      /*if( mail($correo,"alex_92ch@hotmail.com", "Mascaras", $mensaje)){//Recibira el correo
       }else{
        header("location:../includes/contact.php?correoError=El correo no se envío");
       }
    }*/

   
?>