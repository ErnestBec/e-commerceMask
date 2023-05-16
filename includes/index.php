<?php
session_start();
include 'header.php';
?>
<main class="container mt-3 mb-3">
    <section class="d-flex justify-content-between">
        <h3 class="color-text">Mas Vendido</h3>
        <?php
        if (isset($_GET["user"])) {
            ?>
        <h3 class="color-text d-none d-sm-none d-md-inline d-lg-inline">
            <?php
                echo "¡Bienvenido " . $_GET["user"] . "!"
                    ?>
        </h3>

        <?php
        }
        ?>
        <div>

            <a href="pageCatalogo.php">
                <button class="btn text-light rounded-pill  ">Catalogo</button>
            </a>
            <button class="btn text-light rounded-pill " id="filtrarCategoria" data-bs-toggle="dropdown"
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
    <section class="container ">
        <div class="row d-flex justify-content-center">

            <?php
            for ($i = 0; $i < 10; $i++) {
                ?>

            <div class="card m-3 color-text " style="max-width: 18rem;">
                <div class="row ">

                    <img src="../resources/imgs/mascara3.webp" class="card-img-top " alt="...">

                    <div class="card-body col-7">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="detalleArticulo.php" class="btn text-light">Ver Detalles</a>

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