<?php
include "header.php";
?>
<div class=" d-flex justify-content-center">

    <div class="container m-lg-5 mt-5 mt-sm-5 mb-5 mb-sm-5 ">
        <div class="row d-flex align-items-center">
            <h4 class="mb-3">Confirmar compra</h4>
            <form class="needs-validation" novalidate="">
                <div class="row">
                    <label for="firstName">Nombre y Apellidos</label>
                    <input type="text" class="form-control" id="Name" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

        </div>
        <div class="mb-3">
            <label for="address">Dirección</label>
            <input type="text" class="form-control" id="address" placeholder="Calle principal" required="">
            <div class="invalid-feedback">
                Please enter your shipping address.
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="numint">No. Int</label>
                    <input type="text" class="form-control" id="Noint" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                        Valid no int is required.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="numext">No. Ext</label>
                    <input type="text" class="form-control" id="Noext" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                        Valid no ext is required.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="email">Telefono <span class="text-muted"></span></label>
                <input type="email" class="form-control" id="telefono">
                <div class="invalid-feedback">
                    Please enter a valid telefono for shipping updates.
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 mb-3">
                    <label for="country">Método de pago</label>
                    <select class="custom-select d-block w-100" id="country" required="">
                        <option value="">Elegir...</option>
                        <option>Efectivo</option>
                        <option>Tarjeta</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="state">Método de entrega</label>
                    <select class="custom-select d-block w-100" id="state" required="">
                        <option value="">Elegir...</option>
                        <option>Sucursal</option>
                        <option>Envio a domicilio</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>

            </div>
            <hr class="mb-4">
            <a href="pageConfirmar2.php" class="btn text-light m-3" type="submit">Continuar</a>
            </form>