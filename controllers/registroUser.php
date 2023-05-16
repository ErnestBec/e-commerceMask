<?php
session_start();
include("conection_db.php");


$con = conectar();

$name = $_POST['name'];
$app = $_POST['app'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$age = $_POST['age'];
$pwd = $_POST['pwd'];
$pwdConfirm = $_POST['pwdConfirm'];

if (empty($name)) {
    header('location:../includes/pageRegistroUser.php?error_name=Favor de ingresar su nombre');
} elseif (empty($app)) {
    header('location:../includes/pageRegistroUser.php?error_app=Favor de ingresar sus apellidos');
} elseif (empty($phone)) {
    header('location:../includes/pageRegistroUser.php?error_phone=Favor de ingresar su telefono');
} elseif (empty($age)) {
    header('location:../includes/pageRegistroUser.php?error_age=Favor de ingresar su edad');
} elseif (empty($pwd)) {
    header('location:../includes/pageRegistroUser.php?error_pwd=Favor de ingresar su conttraseña');
} elseif ($pwd != $pwdConfirm) {
    header('location:../includes/pageRegistroUser.php?error_pwdConf=La contraseña no coincide');
} else {
    $sqlUserExist = "SELECT * FROM usuarios WHERE correo ='$email'";
    $resultUserExist = mysqli_query($con, $sqlUserExist);
    if (mysqli_num_rows($resultUserExist) == 1) {
        header('location:../includes/pageRegistroUser.php?error_userExist=Usted ya tiene una cuenta creada');
    } else {
        $id_usr = rand(1, 1000);
        $sqlCreateUser = "INSERT INTO usuarios VALUES($id_usr, '$name','$app',$phone, '$email',$age, 'cliente', '$pwd')";
        if (mysqli_query($con, $sqlCreateUser)) {
            header('location:../includes/pageLogin.php?userCreate=Usuario creado con exito');
        }
    }
}
?>