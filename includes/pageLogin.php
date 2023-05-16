<?php
include "header.php";
?>
<div class="d-flex justify-content-center" style=" margin-top: 100px;">
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


                            <div class="input-group">
                                <input class="form-control" type="password" name="password" id="password">
                                <button type="button" class="btn text-light"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-eye"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                        <path
                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                    </svg></button>
                            </div>
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
                            <p class="d-flex justify-content-center flex-column flex-sm-row color-text">¿No tienes
                                cuenta? <a href="pageRegistroUser.php" class="color-text">Resgistrate</a></p>
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