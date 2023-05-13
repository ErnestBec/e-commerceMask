<?php
session_start();
include 'header.php';
?>
<main class="container mt-3">
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
            for ($i = 0; $i < 10; $i++) {
                ?>
                <div class="card m-3" style="min-width: 17rem; max-width: 17rem;">
                    <img src="../resources/imgs/mascara3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn text-light">Go somewhere</a>
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