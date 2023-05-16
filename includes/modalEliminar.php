<?php
session_start();
if (!$_SESSION["login"]) {
    header('location:pageLogin.php?error_session=Favor de Iniciar Sesion!');
}
include "header.php";
?>

<div class=" d-flex justify-content-center" style=" margin-top: 100px;">

    <div class="py-5 text-center">
        <h2>¿Desea eliminar este articulo de su carrito de compra?</h2>

    </div>

</div>
<hr class="mb-4">
<div class="container">
    <div class="d-flex justify-content-center">


        <?php
        include("../controllers/conection_db.php");
        $con = conectar();
        $sqlArt = "select p.img,p.nombre, p.precio, pc.cantidad ,p.id_prod
    from productosencarrito as pc
    join productos as p
    on pc.id_prod=p.id_prod
    join carrito as c
    on pc.id_carrito=c.id_carrito
    where c.id_usr = " . $_SESSION['id_usr'] . " and c.status='active';";
        $result = mysqli_query($con, $sqlArt);
        if (mysqli_num_rows($result) == 1) {
            $dataArt = mysqli_fetch_array($result);
            ?>
        <div class="card mb-3" style="max-width: 500px;">
            <div class="row g-0">
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                    <img src="<?php echo $dataArt["img"] ?>" class="img-fluid rounded-start" alt="Imagen Mascara">
                </div>
                <div class="col-md-8 d-flex align-items-center justify-content-center">
                    <div class="card-body ">
                        <h5 class="card-title">Producto:
                            <?php echo $dataArt["nombre"] ?>
                        </h5>
                        <h5 class="card-text">Precio Unitario:
                            $
                            <?php echo $dataArt["precio"] ?>
                        </h5>
                        <h5 class="card-text">Por los
                            <?php echo $dataArt["cantidad"] ?> productos:
                            $
                            <?php echo intval($dataArt["precio"]) * intval($dataArt["cantidad"]) ?>
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
                                <input class="color-text fs-2  d-flex justify-content-center align-items-center border"
                                    style="width: 45px; height: 40px;" type="text" name="cantidad" id="contadorArticle"
                                    value=" <?php echo $dataArt["cantidad"] ?>">
                                <!-- <button type="button" class="btn text-light" onclick="restar()">-</button> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <?php
        }
        ?>
    </div>

    <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col-md-6 mb-3">
                <a href="pageCarrito.php" class="btn text-light">Cancelar</a>

            </div>
            <div class="col-md-6 mb-4">
                <form action="../controllers/eliminarArticleCart.php" method="POST">
                    <input type="hidden" name="id_prod" value=<?php echo $dataArt["id_prod"] ?>>
                    <button type="submit" class="btn text-light">Eliminar</button>
                </form>
            </div>
        </div>
    </div>