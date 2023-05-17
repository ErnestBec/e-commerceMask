<?php
session_start();
if (!$_SESSION["login"]) {
    header('location:pageLogin.php?error_session=Favor de Iniciar Sesion!');
}
include "header.php";
?>
<div class="d-flex justify-content-center" style=" margin-top: 150px;">
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
            <div class="col-lg-6" id="pageCompra">
                <section class="d-flex justify-content-center">
                    <h3 class="color-text ">Confirmar Compra</h3>
                </section>
                <hr>

                <div class="d-flex justify-content-center">
                    <form action="../controllers/finalizarCompra.php" method="POST">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                                <label for="firstName">Nombre y Apellidos</label>
                                <input type="text" class="form-control" id="Name" placeholder="" value="" required="">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">

                                <label for="address">Dirección</label>
                                <input type="text" class="form-control" id="address" placeholder="Calle principal"
                                    required="">

                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                                <label for="numint">No. Int</label>
                                <input type="text" class="form-control" id="Noint" placeholder="" value="" required="">

                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                                <label for="numext">No. Ext</label>
                                <input type="text" class="form-control" id="Noext" placeholder="" value="" required="">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                                <label for="tel" class="form-label">Telefono</label>
                                <input type="tel" class="form-control" id="telefono">
                            </div>

                            <div class="col-12 col-sm-12 col-md-6 col-lg-6  mb-3 d-flex align-items-center">
                                <div class="input-group ">
                                    <label class="input-group-text" for="inputGroupSelect01">Pago</label>
                                    <select name="typePago" class="form-select" id="inputGroupSelect01">
                                        <option value="elegir" selected>Elegir..</option>
                                        <option value="efectivo">Efectivo</option>
                                        <option value="tarjeta">Tarjeta</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3 d-flex align-items-center">
                                <div class="input-group ">
                                    <label class="input-group-text" for="inputGroupSelect01">Entrega</label>
                                    <select name="typeEntrega" class="form-select" id="inputGroupSelect01">
                                        <option selected>Elegir..</option>
                                        <option value="elegir">Sucursal</option>
                                        <option value="domicilio">Domicilio</option>
                                    </select>
                                </div>

                            </div>
                            <input type="text" name="id_usr" hidden value=<?php echo $_GET["id_usr"] ?>>
                            <input type="text" name="totalprice" hidden value=<?php echo $_GET["totalprice"] ?>>

                            <div
                                class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3 d-flex align-items-center justify-content-center">
                                <button class="btn text-light m-3" type="submit">Continuar</button>
                                <a href="pageCarrito.php" class="btn text-light m-3">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
include 'footer.php';
?>