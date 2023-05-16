<?php
session_start();
include("conection_db.php");
// $_SESSION['login'] = false;


$con = conectar();


$id_prod = $_POST["id_prod"];
$cantidad = $_POST['cantidad'];

$sqlArt = "Select * from productos where id_prod=" . $id_prod . ";";
$result = mysqli_query($con, $sqlArt);
$dataArt = mysqli_fetch_array($result);
if (empty($cantidad)) {
    header('location:../includes/detalleArticulo.php?id_art=' . $id_prod . '&error_cantidad=Favor de ingresar una cantidad valida');
} elseif ($cantidad <= 0) {
    header('location:../includes/detalleArticulo.php?id_art=' . $id_prod . '&error_cantidad=Favor de ingresar una cantidad valida');
} elseif ($cantidad > $dataArt["cantidad"]) {
    header('location:../includes/detalleArticulo.php?id_art=' . $id_prod . '&error_cantidad= Solo tenemos en existencia ' . $dataArt["cantidad"] . " producto(s).");
} else {
    $id_usr = $_SESSION['id_usr'];
    $sqlUserCart = "SELECT id_carrito FROM  carrito WHERE id_usr= $id_usr AND status ='active';";
    $resultUserCart = mysqli_query($con, $sqlUserCart);
    if (mysqli_num_rows($resultUserCart) === 1) {
        $dataUserCart = mysqli_fetch_array($resultUserCart);
        $sqlExistProdCart = "SELECT * FROM  productosencarrito WHERE id_prod=$id_prod  AND status ='active';";
        $resultExistProdCart = mysqli_query($con, $sqlExistProdCart);
        if (mysqli_num_rows($resultExistProdCart) === 1) {
            $dataExistProdCart = mysqli_fetch_array($resultExistProdCart);

            $newCantidad = intval($dataExistProdCart["cantidad"]) + intval($cantidad);
            $sqlUpdateProdCArt = "UPDATE productosencarrito SET cantidad =$newCantidad WHERE id_prod= " . $dataExistProdCart["id_prod"] . ";";
            if (mysqli_query($con, $sqlUpdateProdCArt)) {
                header('location:../includes/index.php?addCart=true');
            }

        } else {
            $id_prodCart = rand(1, 10000);
            $sqlProdCart = "INSERT INTO productosencarrito VALUES ('$id_prodCart','" . $dataUserCart["id_carrito"] . "','$id_prod','" . intval($cantidad) . "','active');";
            if (mysqli_query($con, $sqlProdCart)) {
                header('location:../includes/index.php?addCart=true');
            }
        }
    } else {
        $id_cart = rand(1, 1000);
        $sqlCart = "INSERT INTO carrito VALUES ('$id_cart','" . $_SESSION['id_usr'] . "','active');";
        if (mysqli_query($con, $sqlCart)) {
            $id_prodCart = rand(1, 10000);
            $sqlProdCart = "INSERT INTO productosencarrito VALUES ('$id_prodCart',' $id_cart ','$id_prod','" . intval($cantidad) . "','active');";
            if (mysqli_query($con, $sqlProdCart)) {
                header('location:../includes/index.php?addCart=true');
            }

        }
    }


}

mysqli_close($con);




?>