    <?php
    session_start();
    if (!$_SESSION["login"]) {
        header('location:pageLogin.php?error_session=Favor de Iniciar Sesion!');
    }
    include 'header.php';
    ?>


<<<<<<< HEAD
    <main class="container mt-3">
        <section class="d-flex justify-content-between">
            <h3 class="color-text">Mis Pedidos</h3>
            <div>
=======
<main class="container " style=" margin-top: 150px; margin-bottom: 110px;">
    <section class="d-flex justify-content-between">
        <h3 class="color-text">Mis Pedidos</h3>
        <div>
>>>>>>> 159bdcda60e67860369f168d80fd81f9f0eb3430

                <a href="pageCatalogo.php">

                    <button class="btn text-light rounded-pill me-5">Catalogo</button>
                </a>

<<<<<<< HEAD
            </div>
        </section>
        <hr>
        <section class="container">
            <div class="card mb-3" style="max-width: 700px;">
                <div class="row g-0">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <img src="../resources/imgs/mascara3.png" class="img-fluid rounded-start" alt="Imagen Mascara">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg></span>
                            <h5 class="card-title">Comprado 12-05-2023</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Total $12000</small></p>
=======
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
>>>>>>> 159bdcda60e67860369f168d80fd81f9f0eb3430
                        </div>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
        </section>
    </main>
=======

            <?php
            }
            ?>
        </div>

    </section>
</main>
>>>>>>> 159bdcda60e67860369f168d80fd81f9f0eb3430

    <?php
include 'footer.php';
?>