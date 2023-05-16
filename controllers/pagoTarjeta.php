<?php
$id_usr = $_POST['id_usr'];
$totalprice = $_POST['totalprice'];
$typePago = $_POST['typePago'];
$banco = $_POST["banco"];
$noTarjeta = $_POST["tarjeta"];
echo $banco . " " . $noTarjeta;
if (empty($banco) && empty($noTarjeta)) {
    header("location:../includes/pagepagoTarjeta.php?id_usr=" . $id_usr . "&totalprice=" . $totalprice . "&typePago=Tajeta&error_pago= Ingrese sus datos");
} else {
    header("location:../includes/pageConfirmar2.php?id_usr=" . $id_usr . "&totalprice=" . $totalprice . "&banco=$banco" . "&noTarjeta=" . $noTarjeta . "&typePago=Tarjeta");
}
?>