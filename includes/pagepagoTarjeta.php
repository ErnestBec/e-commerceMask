<?php
include "../controllers/login.php";
include "header.php";
?>

<div class=" d-flex justify-content-center">

    <div class="container m-lg-5 mt-5 mt-sm-5 mb-5 mb-sm-5 ">
        <div class="row d-flex align-items-center">
            <h4 class="mb-3">Pago con Tarjeta</h4>
            <form class="needs-validation" novalidate="">
            <hr class="mb-4">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cc-name">Nombre en la tarjeta</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                        <small class="text-muted">Nombre completo como se muestra en la tarjeta</small>
                        <div class="invalid-feedback">
                            Name on card is required
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cc-number">Número de Tarjeta de Crédito</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                        <div class="invalid-feedback">
                            Credit card number is required
                        </div>
                    </div>
                </div>
               
            <hr class="mb-4">
                <button class="btn text-light m-3" type="submit">Continuar</button>
            </form>
