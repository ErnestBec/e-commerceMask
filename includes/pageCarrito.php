<?php
session_start();
if (!$_SESSION["login"]) {
    header('location:pageLogin.php?error_session=Favor de Iniciar Sesion!');
}
include 'header.php';
?>
<!-- carrito -->
<main class="container mt-3">
    <section class="d-flex justify-content-between">
        <h3 class="color-text">Mis Pedidos</h3>

    </section>
    <hr>
    <!-- Resumen de compra -->
    <div class="d-flex flex-column flex-sm-column flex-md-row flex-lg-row">

        <section class="container">
            <div class="card" style="max-width: 500px;">
                <div class="card-header">
                    Resumen de Compra
                </div>
                <div class="card-body">
                    <h5 class="card-title">Producto</h5>
                    <p class="card-text">Envio</p>
                    <h5 class="card-total">Total:</h5>
                    <a href="pageConfirmar1.php" class="btn text-light">Comprar</a>
                </div>
            </div>
            <br>
        </section>
        <section class="container-fluid">
            <!-- Producto en carrito -->
            <?php
            include("../controllers/conection_db.php");
            $con = conectar();
            $sqlCart = " select p.nombre, p.precio, pc.cantidad
                        from productosencarrito as pc
                        join productos as p
                        on pc.id_prod=p.id_prod
                        join carrito as c
                        on pc.id_carrito=c.id_carrito
                        where c.id_usr = 18945 and c.status='active';";
            $resultCart = mysqli_query($con, $sqlCart);
            while ($dataCart = mysqli_fetch_array($resultCart)) {
                ?>
            <div class="card mb-3" style="max-width: 500px;">
                <div class="row g-0">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <img src="../resources/imgs/mascara3.webp" class="img-fluid rounded-start" alt="Imagen Mascara">
                    </div>
                    <div class="col-md-8 d-flex align-items-center justify-content-center">
                        <div class="card-body ">
                            <h5 class="card-title">Producto:
                                <?php echo $dataCart["nombre"] ?>
                            </h5>
                            <h5 class="card-text">Precio Unitario:
                                $
                                <?php echo $dataCart["precio"] ?>
                            </h5>
                            <h5 class="card-text">Por los
                                <?php echo $dataCart["cantidad"] ?> productos:
                                $
                                <?php echo intval($dataCart["precio"]) * intval($dataCart["cantidad"]) ?>
                            </h5>
                            <!-- Cantidad -->
                            <div class=" d-flex align-items-center ">
                                <h5 class="card-table-cantidad">Cantidad:
                                </h5>
                                <br>
                                <div class="btn-group m-2" role="group" aria-label="Basic example">
                                    <!-- <button type="button" class="btn text-light" onclick="sumar()">+</button> -->
                                    <!-- <span id="contadorArticle" style="width: 45px; height: 40px;"
                                            class="color-text fs-2  d-flex justify-content-center align-items-center border">
                                        </span> -->
                                    <input
                                        class="color-text fs-2  d-flex justify-content-center align-items-center border"
                                        style="width: 45px; height: 40px;" type="text" name="cantidad"
                                        id="contadorArticle" value=" <?php echo $dataCart["cantidad"] ?>">
                                    <!-- <button type="button" class="btn text-light" onclick="restar()">-</button> -->
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Eliminar -->

                    <div class="col-md-20 d-flex align-items-center justify-content-center m-2">
                        <a href="modalEliminar.php" class="btn text-light">Eliminar</a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>


        </section>
    </div>

</main>

<!-- footer -->
<?php
include 'footer.php';
?>