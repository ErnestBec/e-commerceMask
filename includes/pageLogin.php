<?php
include "header.php";
?>
<div class="d-flex justify-content-center">
    <div class="container m-lg-5 mt-5 mt-sm-5 mb-5 mb-sm-5 ">
        <div class="row d-flex align-items-center">
            <div class="col-6 d-none d-sm-none d-md-none d-lg-inline ">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded-3">
                        <div class="carousel-item active" style="height: 510px;">
                            <img src="../resources/imgs/marcara1.jpg" class="d-block w-100 img-fluid " alt="...">
                        </div>
                        <div class="carousel-item " style="height: 510px;">
                            <img src="../resources/imgs/mascara2.jpg" class="d-block w-100 img-fluid " alt="...">
                        </div>
                        <div class="carousel-item" style="height: 510px;">
                            <img src="../resources/imgs/mascara3.webp" class="d-block w-100 img-fluid " alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" id="pageLogin">
                <section class="d-flex justify-content-center">
                    <h3 class="color-text ">Iniciar Sesión</h3>
                </section>
                <hr>
                <?php
                if (isset($_GET["error_login"])) {
                    ?>
                    <span class="alert-danger">
                        <?php
                        echo $_GET["error_login"]
                            ?>
                    </span>

                    <?php
                }
                ?>
                <div class="d-flex justify-content-center">
                    <form method="POST" action="../controllers/login.php">
                        <div class="mb-3">
                            <label for="email" class="form-label color-text">Usuario</label>
                            <input class="form-control" type="email" name="email" id="email">
                        </div>
                        <?php
                        if (isset($_GET["error_email"])) {
                            ?>
                            <span class="alert-danger">
                                <?php
                                echo $_GET["error_email"]
                                    ?>
                            </span>

                            <?php
                        }
                        ?>
                        <div class="mb-3">
                            <label for="password" class="form-label color-text">Contraseña</label>
                            <input class="form-control" type="password" name="password" id="password">
                        </div>
                        <?php
                        if (isset($_GET["error_pass"])) {
                            ?>
                            <span class="alert-danger">
                                <?php
                                echo $_GET["error_pass"]
                                    ?>
                            </span>

                            <?php
                        }
                        ?>

                        <div class="d-flex justify-content-center flex-column">
                            <button type="submit" name="btnlogin" id="btnlogin" value="btnlogin"
                                class="btn text-light m-3">Ingresar</button>
                            <p class="d-flex justify-content-center flex-column flex-sm-row">¿No tienes cuenta? <a
                                    href="">Resgistrate</a></p>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
include "footer.php";
?>