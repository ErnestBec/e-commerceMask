<?php
session_start();
include("conection_db.php");
$_SESSION['login'] = false;


$con = conectar();


$correo = $_POST["email"];
$contraseña = $_POST['password'];


if (empty($correo)) {
    header('location:../includes/pageLogin.php?error_email=Favor de ingresar un correo valido');
} elseif (empty($contraseña)) {
    header('location:../includes/pageLogin.php?error_pass=Favor de ingresar su contraseña');
} else {
    $sql = "Select * from usuarios where correo = '" . $correo . "' and  pwd= '" . $contraseña . "';";
    $result = mysqli_query($con, $sql);


    if (mysqli_num_rows($result) === 1) {
        $dataUser = mysqli_fetch_array($result);
        if ($dataUser['correo'] == $correo && $dataUser['pwd'] == $contraseña) {
            $_SESSION['login'] = true;
            $_SESSION['id_usr'] = $dataUser['id_usr'];
            $_SESSION['correo'] = $dataUser['correo'];
            $_SESSION['pwd'] = $dataUser['pwd'];
            $_SESSION['rol'] = $dataUser['rol'];

            if ($dataUser["rol"] == "cliente") {
                header('location:../includes/index.php?user=' . $dataUser["nombre"]);
            }
        } else {
            header('location:../includes/pageLogin.php?error_login=Usuario/contraseña incorrectos!');

        }
    } else {
        header('location:../includes/pageLogin.php?error_login=Usuario/contraseña incorrectos!');

    }
    mysqli_close($con);

}


?>