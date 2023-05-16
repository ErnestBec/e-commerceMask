<?php
$id_usr = $_POST['id_usr'];
$totalprice = $_POST['totalprice'];
$typePago = $_POST['typePago'];
if ($typePago == "efectivo") {
    header("location:../includes/pageConfirmar2.php?id_usr=" . $id_usr . "&totalprice=" . $totalprice . "&typePago=Efectivo");
} elseif ($typePago == "tarjeta") {
    header("location:../includes/pagepagoTarjeta.php?id_usr=" . $id_usr . "&totalprice=" . $totalprice . "&typePago=Tajeta");
}
?>