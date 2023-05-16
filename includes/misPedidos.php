    <?php
    session_start();
    if (!$_SESSION["login"]) {
        header('location:pageLogin.php?error_session=Favor de Iniciar Sesion!');
    }
    include 'header.php';
    ?>


    <main class="container mt-3">
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
include 'footer.php';
?>