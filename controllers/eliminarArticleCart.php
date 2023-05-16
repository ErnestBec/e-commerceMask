<?php
session_start();
include("conection_db.php");


$con = conectar();
$id_prod = $_POST["id_prod"];

$sqlArt = "DELETE FROM productosencarrito WHERE id_prod=$id_prod;";
if (mysqli_query($con, $sqlArt)) {
    header("location:../includes/index.php");
}

?>