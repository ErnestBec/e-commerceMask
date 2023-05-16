<?php
<<<<<<< HEAD

include "header.php";
?>
<div class=" d-flex justify-content-center">
=======
session_start();
if (!$_SESSION["login"]) {
    header('location:pageLogin.php?error_session=Favor de Iniciar Sesion!');
}
include 'header.php';
?>
<div class=" d-flex justify-content-center" style=" margin-top: 100px;">
    <?php
    include("../controllers/conection_db.php");
    $con = conectar();
    $id_prod = $_GET["id_art"];
    $sql = "Select * from productos where id_prod=" . $id_prod . ";";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) === 1) {
        $dataUser = mysqli_fetch_array($result)
            ?>
>>>>>>> 159bdcda60e67860369f168d80fd81f9f0eb3430

    <div class="container m-lg-5 mt-5 mt-sm-5 mb-5 mb-sm-5 ">
        <div class="row d-flex align-items-center">
            <div class="col-6 d-none d-sm-none d-md-none d-lg-inline ">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded-3">
                        <div class="carousel-item active" style="height: 510px;">
<<<<<<< HEAD
                            <img src="../resources/imgs/marcara1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" style="height: 510px;">
                            <img src="../resources/imgs/mascara2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" style="height: 510px;">
                            <img src="../resources/imgs/mascara3.webp" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" id="detalleArticulo">
                <section class="d-flex justify-content-center ">
                    <h3 class="color-text">Nombre de la Mascara</h3>
=======
                            <img src="<?php echo $dataUser['img'] ?>" class="d-block w-100" alt="imagen Articulo">
                        </div>

                    </div>
                </div>
            </div>
            <form method="POST" action="../controllers/addCartArticle.php" class="col-lg-6" id="detalleArticulo">


                <section class="d-flex justify-content-center flex-column ">
                    <?php
                        if (isset($_GET['error_cantidad'])) {

                            ?>
                    <h4 class="alert-danger d-flex justify-content-center">
                        <?php echo $_GET['error_cantidad'] ?>
                    </h4>
                    <?php
                        }
                        ?>
                    <h3 class="color-text d-flex justify-content-center">
                        <?php echo $dataUser["nombre"]; ?>
                        <input type="hidden" name="id_prod" id="id_prod" value=<?php echo $dataUser["id_prod"]; ?>>
                    </h3>
>>>>>>> 159bdcda60e67860369f168d80fd81f9f0eb3430
                </section>
                <hr>

                <div class="p-2 bd-highlight">


                    <section class="d-flex justify-content-center">
<<<<<<< HEAD
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg> </span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg> </span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg> </span>
=======
                        <?php
                            for ($i = 0; $i < $dataUser["calificacion"]; $i++) {

                                ?>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                        </span>
                        <?php
                            }
                            ?>



>>>>>>> 159bdcda60e67860369f168d80fd81f9f0eb3430
                    </section>



                    <div class="mb-3 ">
                        <br>
<<<<<<< HEAD
                        <h4>Descripción</h4>

                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia a dignissimos adipisci
                            ipsa ullam pariatur similique sit earum molestiae,
                            impedit itaque tempora asperiores dolore hic facilis quibusdam dicta, corporis in.</p>

                        <div>

                            <h6 class="d-flex justify-content-center">$12000 30%</h6>
=======

                        <p class="color-text fs-4">
                            <?php echo $dataUser["descripcion"]; ?>
                        </p>

                        <div class="d-flex justify-content-evenly">
                            <h4 class="d-flex justify-content-center text-success">
                                <?php echo "$" . $dataUser["precio"]; ?>
                            </h4>
                            <h4 class="d-flex justify-content-center text-info">
                                <?php echo "%" . $dataUser["descuento"]; ?>
                            </h4>
>>>>>>> 159bdcda60e67860369f168d80fd81f9f0eb3430

                        </div>

                    </div>
                    <br>

                    <!--CONTENEDOR-->
                    <div class="d-flex justify-content-evenly">
                        <h5>Cantidad</h5>
                        <div class="btn-group m-2" role="group" aria-label="Basic example">
<<<<<<< HEAD
                            <button type="button" class="btn text-light" onclick="sumar()">+</button>
                            <span id="contadorArticle" style="width: 45px; height: 40px;"
                                class="color-text fs-2  d-flex justify-content-center align-items-center border">
                            </span>
                            <button type="button" class="btn text-light" onclick="restar()">-</button>
=======
                            <!-- <button type="button" class="btn text-light" onclick="sumar()">+</button> -->
                            <!-- <span id="contadorArticle" style="width: 45px; height: 40px;"
                                class="color-text fs-2  d-flex justify-content-center align-items-center border">
                            </span> -->

                            <input class="color-text fs-2  d-flex justify-content-center align-items-center border"
                                style="width: 45px; height: 40px;" type="text" name="cantidad" id="cantidad" value="1">

                            <!-- <button type="button" class="btn text-light" onclick="restar()">-</button> -->
>>>>>>> 159bdcda60e67860369f168d80fd81f9f0eb3430
                        </div>
                    </div>
                </div>

                <hr>

                <!--Botones-->
                <div class="d-flex justify-content-evenly">
                    <button class="btn text-light " type="submit">Agregar</button>
                    <button class="btn text-light " type="button">Comprar</button>
                </div>
<<<<<<< HEAD
            </div>
        </div>
    </div>
</div>
=======

            </form>
        </div>
    </div>
</div>
<?php
    }
    ?>
>>>>>>> 159bdcda60e67860369f168d80fd81f9f0eb3430
</div>
<?php
include "footer.php";
?>