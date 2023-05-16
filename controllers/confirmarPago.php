<?php
session_start();
include("conection_db.php");

$con = conectar();

$id_usr = $_POST['id_usr'];
$totalPrice = $_POST['totalPrice'];

$sqlCartActive = "SELECT * FROM carrito WHERE id_usr = $id_usr AND status = 'active'";
$resultCartActive = mysqli_query($con, $sqlCartActive);

if (mysqli_num_rows($resultCartActive) == 1) {
    $dataCartActive = mysqli_fetch_array($resultCartActive);
    $sqlUpdateCart = "UPDATE carrito SET status = 'pagado' WHERE id_usr= $id_usr ;";
    if (mysqli_query($con, $sqlUpdateCart)) {
        $sqlProdinCart = "SELECT * FROM productosencarrito WHERE id_carrito =" . $dataCartActive['id_carrito'] . " AND status = 'active'";
        $resultProdinCart = mysqli_query($con, $sqlProdinCart);
        while ($dataProdinCart = mysqli_fetch_array($resultProdinCart)) {
            $sqlUpdateProdinCart = "UPDATE productosencarrito SET status = 'pagado' WHERE id_prod = " . $dataProdinCart["id_prod"] . " ;";
            mysqli_query($con, $sqlUpdateProdinCart);

            $sqlSelectProd = "SELECT * FROM productos WHERE id_prod =" . $dataProdinCart['id_prod'] . ";";
            $resultSelectProd = mysqli_query($con, $sqlSelectProd);
            if (mysqli_num_rows($resultSelectProd) == 1) {
                $dataSelectProd = mysqli_fetch_array($resultSelectProd);
                $newCantProd = intval($dataSelectProd['cantidad']) - intval($dataProdinCart['cantidad']);
                $sqlUpdateProd = "UPDATE productos SET cantidad =$newCantProd WHERE id_prod =" . $dataSelectProd["id_prod"] . ";";
                mysqli_query($con, $sqlUpdateProd);
            }

            $sqlProdExist = "SELECT * FROM masvendidos WHERE id_prod = " . $dataProdinCart["id_prod"] . " ;";
            $resultProdExist = mysqli_query($con, $sqlProdExist);
            if (mysqli_num_rows($resultProdExist) == 1) {
                $dataProdExist = mysqli_fetch_array($resultProdExist);
                $newCantidadProd = intval($dataProdExist["cantidad"]) + intval($dataProdinCart['cantidad']);
                $sqlUpdateProdExist = "UPDATE masvendidos SET cantidad =$newCantidadProd WHERE id_prod = " . $dataProdExist['id_prod'] . ";";
                mysqli_query($con, $sqlUpdateProdExist);
            } else {
                $id = rand(1, 10000);
                $sqlInsertProd = "INSERT INTO masvendidos VALUES($id," . $dataProdinCart['id_prod'] . "," . $dataProdinCart['cantidad'] . ");";
                mysqli_query($con, $sqlInsertProd);
            }
        }
        $id_orden = rand(1, 10000);
        $sqlInsertOrden = "INSERT INTO ordenes VALUES ($id_orden,$id_usr," . $dataCartActive['id_carrito'] . ",$totalPrice,'pagado');";
        mysqli_query($con, $sqlInsertOrden);

        header("location:../includes/pageCatalogo.php?compra=Gracias por su compra");
        // $id_orden = rand(1, 10000);
        // $sqlInserMasVendido = "INSERT INTO ordenes VALUES ('$id_orden','$id_usr','" . $dataCartActive['id_carrito'] . "','$totalPrice','pagado');";
        // if (mysqli_query($con, $sqlInserMasVendido)) {
        // }




    }

}



?>