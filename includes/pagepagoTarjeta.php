<?php
session_start();
if (!$_SESSION["login"]) {
    header('location:pageLogin.php?error_session=Favor de Iniciar Sesion!');
}
include "header.php";
?>

<div class=" d-flex justify-content-center" style=" margin-top: 150px;">

    <div class="container m-lg-5 mt-5 mt-sm-5 mb-5 mb-sm-5 d-flex justify-content-center">
        <div class="row d-flex align-items-center col-6">
            <h4 class="mb-3">Pago con Tarjeta</h4>

            <form class="needs-validation d-flex flex-column" novalidate="" method="POST"
                action="../controllers/pagoTarjeta.php">
                <hr class="mb-4">
                <div class="row">
                    <?php
                if (isset($_GET["error_pago"])) {
                    ?>
                    <span class="alert-danger">
                        <?php
                        echo $_GET["error_pago"]
                            ?>
                    </span>

                    <?php
                }
                ?>
                    <div class="input-group mb-3 col-md-6 col-lg-6">

                        <label class="input-group-text" for="inputGroupSelect01">Selecciones su Banco:</label>
                        <select name="banco" class="form-select" id="inputGroupSelect01">
                            <option selected>Elegir..</option>
                            <option value="Azteca">Azteca</option>
                            <option value="Bancommer">Bancommer</option>
                        </select>
                    </div>
                    <div class=" mb-3">
                        <label for="cc-number">Número de Tarjeta </label>
                        <input type="text" name="tarjeta" class="form-control" id="cc-number" placeholder=""
                            required="">
                    </div>
                </div>
                <input type="text" name="id_usr" hidden value=<?php echo $_GET["id_usr"] ?>>
                <input type="text" name="totalprice" hidden value=<?php echo $_GET["totalprice"] ?>>
                <input type="text" name="typePago" hidden value=<?php echo $_GET["typePago"] ?>>


                <div class="col-4 d-flex justify-content-center">
                    <button class="btn text-light m-3" type="submit">Continuar</button>
                    <a href="pageCarrito.php" class="btn text-light m-3" type="submit">Cancelar</a>
                </div>

            </form>
        </div>
    </div>