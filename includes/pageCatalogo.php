<?php
session_start();
include 'header.php';
?>
<main class="container " style=" margin-top: 150px;">
    <section class="d-flex justify-content-between">
        <h3 class="color-text">Catalogo</h3>
        <div>

            <button class="btn text-light rounded-pill" id="filtrarCategoria" data-bs-toggle="dropdown"
                aria-expanded="false">
                Filtrar
                <svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="7.64645" y1="8.4111" x2="15.6464" y2="0.411095" stroke="white" />
                    <line x1="1.11845" y1="0.410851" x2="9.11845" y2="8.41085" stroke="white" />
                </svg>
            </button>
            <ul class="dropdown-menu rounded-3" aria-labelledby="filtrarCategoria">
                <li><a class="dropdown-item color-text" href="#">Categoria 1</a>
                </li>

                <li><a class="dropdown-item color-text" href="#">Categoria 2</a></li>
                <li><a class="dropdown-item color-text" href="#">Categoria 3</a></li>
            </ul>
        </div>
    </section>
    <hr>
    <section class="container-fluid">
        <div class="row d-flex justify-content-center">
            <?php
            include("../controllers/conection_db.php");
            $con = conectar();
            $sql = "Select * from productos ;";
            $result = mysqli_query($con, $sql);
            while ($dataUser = mysqli_fetch_array($result)) {
                ?>

                <div class="card m-3 color-text " style="max-width: 18rem;">

                    <div class="row ">

                        <img class="img-fluid " style="height: 18rem;" src=" <?php echo $dataUser['img'] ?>"
                            class="card-img-top " alt="...">

                        <div class="card-body col-7">
                            <h5 class="card-title">
                                <?php echo $dataUser["nombre"]; ?>
                            </h5>
                            <div class=" m-2">

                                <?php
                                for ($i = 0; $i < $dataUser['calificacion']; $i++) {

                                    ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="d-flex justify-content-between">

                                <h4 class="card-title text-primary">
                                    $
                                    <?php echo $dataUser["precio"]; ?>
                                </h4>
                                <h4 class="card-title text-success">
                                    %
                                    <?php echo $dataUser["descuento"]; ?>
                                </h4>
                            </div>
                            <p class="card-text">
                                <?php echo $dataUser["descripcion"]; ?>
                            </p>
                            <a href=<?php echo "detalleArticulo.php?id_art=" . $dataUser["id_prod"]; ?>
                                class="btn text-light">Ver
                                Detalles</a>

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