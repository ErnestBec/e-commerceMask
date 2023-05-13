<?php
include 'includes/header.php';
?>
<main class="container mt-3">
    <section class="d-flex justify-content-between align-items-center">
        <h3 class="color-text">Mas Vendido</h3>
        <div class="d-flex flex-column flex-md-row flex-lg-row">
            <button class="btn text-light rounded-pill mb-2 mb-lg-0 mb-md-0 me-md-5 me-lg-5 ">Catalogo</button>
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
</main>

<?php
include 'includes/footer.php';
?>