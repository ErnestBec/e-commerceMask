<?php
include "header.php";
?>
<<<<<<< HEAD
<div class="d-flex justify-content-center">
=======
<div class="d-flex justify-content-center" style=" margin-top: 100px;">
>>>>>>> 159bdcda60e67860369f168d80fd81f9f0eb3430
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
<<<<<<< HEAD
                <section class="d-flex justify-content-center">
                    <h3 class="color-text ">Resgistro</h3>
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
                    <form method="POST" action="../controllers/registroUser.php" class="d-flex">
                        <div class="row d-flex justify-content-center">
                            <div class="mb-3 col-8 col-sm-8 col-md-6 col-lg-6">
                                <label for="name" class="form-label color-text">Nombre</label>
                                <input class="form-control" type="text" name="name" id="name">
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
                            <div class="mb-3 col-8 col-sm-8 col-md-6 col-lg-6">
                                <label for="app" class="form-label color-text">Apellidos</label>
                                <input class="form-control" type="text" name="app" id="app">
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
                            <div class="mb-3 col-8 col-sm-8 col-md-6 col-lg-6">
                                <label for="phone" class="form-label color-text">Telefono</label>
                                <input class="form-control" type="tel" name="phone" id="phone">
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
                            <div class="mb-3 col-8 col-sm-8 col-md-6 col-lg-6">
                                <label for="email" class="form-label color-text">Correo</label>
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
                            <div class="mb-3 col-8 col-sm-8 col-md-6 col-lg-6">
                                <label for="age" class="form-label color-text">Edad</label>
                                <input class="form-control" type="text" name="age" id="age">
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
                            <div class=" mb-3 col-8 col-sm-8 col-md-6 col-lg-6">
                                <label for="pwd" class="form-label color-text">Contraseña</label>
=======
                <section class="d-flex justify-content-center flex-column">
                    <h3 class="color-text d-block">Resgistro</h3>
                    <?php
                    if (isset($_GET["error_userExist"])) {
                        ?>
                        <span class="alert-danger d-block">
                            <?php
                            echo $_GET["error_userExist"]
                                ?>
                        </span>

                        <?php
                    }
                    ?>
                </section>
                <hr>
                <div class="d-flex justify-content-center">
                    <form method="POST" action="../controllers/registroUser.php" class="d-flex">

                        <div class="row d-flex justify-content-center">
                            <div class="mb-3 col-8 col-sm-8 col-md-6 col-lg-6">
                                <label for="name" class="form-label color-text d-block">Nombre</label>
                                <?php
                                if (isset($_GET["error_name"])) {
                                    ?>
                                    <span class="alert-danger d-block">
                                        <?php
                                        echo $_GET["error_name"]
                                            ?>
                                    </span>

                                    <?php
                                }
                                ?>
                                <input class="form-control" type="text" name="name" id="name">
                            </div>

                            <div class="mb-3 col-8 col-sm-8 col-md-6 col-lg-6">
                                <label for="app" class="form-label color-text">Apellidos</label>
                                <?php
                                if (isset($_GET["error_app"])) {
                                    ?>
                                    <span class="alert-danger d-block">
                                        <?php
                                        echo $_GET["error_app"]
                                            ?>
                                    </span>

                                    <?php
                                }
                                ?>
                                <input class="form-control" type="text" name="app" id="app">
                            </div>

                            <div class="mb-3 col-8 col-sm-8 col-md-6 col-lg-6">
                                <label for="phone" class="form-label color-text">Telefono</label>
                                <?php
                                if (isset($_GET["error_phone"])) {
                                    ?>
                                    <span class="alert-danger d-block">
                                        <?php
                                        echo $_GET["error_phone"]
                                            ?>
                                    </span>

                                    <?php
                                }
                                ?>
                                <input class="form-control" type="tel" name="phone" id="phone">
                            </div>

                            <div class="mb-3 col-8 col-sm-8 col-md-6 col-lg-6">
                                <label for="email" class="form-label color-text">Correo</label>
                                <?php
                                if (isset($_GET["error_email"])) {
                                    ?>
                                    <span class="alert-danger d-block">
                                        <?php
                                        echo $_GET["error_email"]
                                            ?>
                                    </span>

                                    <?php
                                }
                                ?>
                                <input class="form-control" type="email" name="email" id="email">
                            </div>

                            <div class="mb-3 col-8 col-sm-8 col-md-6 col-lg-6">
                                <label for="age" class="form-label color-text">Edad</label>
                                <?php
                                if (isset($_GET["error_age"])) {
                                    ?>
                                    <span class="alert-danger d-block">
                                        <?php
                                        echo $_GET["error_age"]
                                            ?>
                                    </span>

                                    <?php
                                }
                                ?>
                                <input class="form-control" type="text" name="age" id="age">
                            </div>


                            <div class=" mb-3 col-8 col-sm-8 col-md-6 col-lg-6">
                                <label for="pwd" class="form-label color-text">Contraseña</label>
                                <?php
                                if (isset($_GET["error_pwd"])) {
                                    ?>
                                    <span class="alert-danger d-block">
                                        <?php
                                        echo $_GET["error_pwd"]
                                            ?>
                                    </span>

                                    <?php
                                }
                                ?>
>>>>>>> 159bdcda60e67860369f168d80fd81f9f0eb3430
                                <div class="input-group">
                                    <input class="form-control" type="password" name="pwd" id="pwd">
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
<<<<<<< HEAD
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
=======

>>>>>>> 159bdcda60e67860369f168d80fd81f9f0eb3430
                            <div class="mb-3 col-8 col-sm-8 col-md-6 col-lg-6">
                                <label for="pwdConfirm" class="form-label color-text">Confirmar contraseña</label>
                                <div class="input-group">
                                    <input class="form-control" type="password" name="pwdConfirm" id="pwdConfirm">
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
<<<<<<< HEAD
                            if (isset($_GET["error_pass"])) {
                                ?>
                            <span class="alert-danger">
                                <?php
                                    echo $_GET["error_pass"]
                                        ?>
                            </span>

                            <?php
=======
                            if (isset($_GET["error_pwdConf"])) {
                                ?>
                                <span class="alert-danger d-block ">
                                    <?php
                                    echo $_GET["error_pwdConf"]
                                        ?>
                                </span>

                                <?php
>>>>>>> 159bdcda60e67860369f168d80fd81f9f0eb3430
                            }
                            ?>

                            <div class="d-flex justify-content-center flex-column  ">
                                <button type="submit" name="btnlogin" id="btnlogin" value="btnlogin"
                                    class="btn text-light m-3 align-self-center col-4">Registrarte</button>
                                <p
                                    class="d-flex justify-content-center flex-column  flex-sm-column flex-lg-row color-text align-self-center col-4">
                                    ¿Ya tienes
                                    cuenta? <a class="color-text d-flex justify-content-center"
                                        href="pageLogin.php">Ingresar</a></p>
                            </div>

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