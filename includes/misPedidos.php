<?php
session_start();
if (!$_SESSION["login"]) {
    header('location:pageLogin.php?error_session=Favor de Iniciar Sesion!');
}
include 'header.php';
?>


<main class="container " style=" margin-top: 150px; margin-bottom: 110px;">
    <section class="d-flex justify-content-between">
        <h3 class="color-text">Mis Pedidos</h3>
        <div>

            <a href="pageCatalogo.php">

                <button class="btn text-light rounded-pill me-5">Catalogo</button>
            </a>

        </div>
    </section>
    <hr>
    <section class="container">
        <div class="row justify-content-center">
            <?php
            include("../controllers/conection_db.php");
            $con = conectar();
            // $sql = "SELECT p.nombre, p.descripcion, p.calificacion, o.precio_total from ordenes as o
            //             join carrito as c
            //             on o.id_carrito=c.id_carrito
            //             join productosencarrito as pc
            //             on pc.id_carrito=c.id_carrito
            //             join productos as p
            //             on pc.id_prod = p.id_prod
            //             where o.id_usr = " . $_SESSION['id_usr'] . " and o.status='pagado';";
            $sql = "SELECT * FROM ordenes WHERE id_usr = " . $_SESSION['id_usr'] . " and status='pagado';";
            $result = mysqli_query($con, $sql);
            $numPedido = 0;
            while ($dataProd = mysqli_fetch_array($result)) {
                $numPedido++;
                ?>
            <div class="card m-3 col-lg-6" style="max-width: 400px;">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="card-body">
                                <h5 class="card-title color-text">Pedido
                                    <?php echo " " . $numPedido ?>:
                                </h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="color-text" scope="col"></th>
                                            <th class="color-text" scope="col">Producto</th>
                                            <th class="color-text" scope="col">Cantidad</th>
                                            <th class="color-text" scope="col">precio x cantidad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $totalPrice = 0;
                                            $sqlCart = "SELECT p.img,p.nombre,p.precio,pc.cantidad, p.descripcion, p.calificacion from productos as p join productosencarrito as pc on pc.id_prod = p.id_prod where pc.id_carrito =" . $dataProd['id_carrito'] . " and pc.status='pagado'; ";
                                            $resultCart = mysqli_query($con, $sqlCart);
                                            $numItem = 0;
                                            while ($dataCart = mysqli_fetch_array($resultCart)) {
                                                $numItem++;
                                                ?>
                                        <tr>
                                            <th class="color-text" scope="row">
                                                <img src="<?php echo $dataCart["img"]; ?>" alt="Imagen"
                                                    style="width: 50px;">
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
                                    <?php echo " $" . $dataProd['precio_total']; ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            }
            ?>
        </div>

    </section>
</main>

<?php
include 'footer.php';
?>