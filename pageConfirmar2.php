<?php
session_start();
if (!$_SESSION["login"]) {
    header('location:pageLogin.php?error_session=Favor de Iniciar Sesion!');
}
include "header.php";
?>
<div class=" d-flex justify-content-center" style=" margin-top: 100px;">

    <div class="py-5 text-center color-text">
        <h2>¿Desea confirmar su compra?</h2>
        <?php
        if ($_GET["typePago"] == "Efectivo") {
            $caracteres_permitidos = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $longitud = 12;
            ?>
            <h4 class="color-text">Usted para en ventanilla con el siguiente codigo</h4>
            <h3 class="text-success">

                <?php echo substr(str_shuffle($caracteres_permitidos), 0, $longitud) ?>
            </h3>

            <?php
        } else {
            ?>
            <h4 class="color-text">Usted hizo su pago con la tarjeta:</h4>
            <h3 class="text-success">
                <?php echo $_GET['banco'] ?>
            </h3>
            <h3 class="text-success">
                <?php echo $_GET['noTarjeta'] ?>
            </h3>
            <?php
        }
        ?>
    </div>

</div>
<hr class="mb-4">
<section class="container ">
    <div class="d-flex justify-content-center">


        <div class="card " style="max-width: 500px;">
            <div class="card-header color-text">
                Resumen de Compra
            </div>
            <div class="card-body">
                <h5 class="card-title color-text">Productos:</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="color-text" scope="col">#</th>
                            <th class="color-text" scope="col">Producto</th>
                            <th class="color-text" scope="col">Cantidad</th>
                            <th class="color-text" scope="col">precio x cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("../controllers/conection_db.php");
                        $con = conectar();
                        $totalPrice = 0;
                        $sqlCart = "select p.nombre, p.precio, pc.cantidad
                        from productosencarrito as pc
                        join productos as p
                        on pc.id_prod=p.id_prod
                        join carrito as c
                        on pc.id_carrito=c.id_carrito
                        where c.id_usr = " . $_SESSION['id_usr'] . " and c.status='active';";
                        $resultCart = mysqli_query($con, $sqlCart);
                        $numItem = 0;
                        while ($dataCart = mysqli_fetch_array($resultCart)) {
                            $totalPrice = (intval($dataCart["precio"]) * intval($dataCart["cantidad"])) + $totalPrice;

                            $numItem++;
                            ?>
                            <tr>
                                <th class="color-text" scope="row">
                                    <?php echo $numItem ?>
                                </th>
                                <td class="color-text">
                                    <?php echo $dataCart["nombre"]; ?>
                                </td>
                                <td class="color-text">
                                    <?php echo $dataCart["cantidad"]; ?>
                                </td>
                                <td class="color-text">
                                    <?php echo "$" . intval($dataCart["precio"]) * intval($dataCart["cantidad"]) ?>

                                </td>
                            </tr>


                            <?php
                        }
                        ?>

                        </ul>
                    </tbody>
                </table>
                <h5 class="card-total d-flex justify-content-end text-danger">Total:
                    <?php echo " $" . $totalPrice; ?>
                </h5>
            </div>
        </div>
    </div>

    <br>
    <div class=" d-flex justify-content-center">
        <form action="../controllers/confirmarPago.php" method="POST">
            <input type="hidden" name="id_usr" id="id_usr" value=<?php echo $_GET["id_usr"]; ?>>
            <input type="hidden" name="totalPrice" id="totalPrice" value=<?php echo $_GET["totalprice"]; ?>>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <a href="pageCarrito.php" class="btn text-light m-3">Cancelar</a>
                </div>
                <div class="col-md-6 mb-3">
                    <button class="btn text-light m-3" type="submit">Confirmar</button>
                </div>
            </div>
        </form>
    </div>
</section>