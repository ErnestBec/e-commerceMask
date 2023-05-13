<!-- Modal -->

<div class="modal fade" id="modalLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <!-- <img src="./resources/img/login-image.jpg" alt="" /> -->
                </div>
                <div class="row justify-content-center">
                    <!-- Formulario -->
                    <form name="formLogin" class="d-flex flex-column col-8" id="formLogin">
                        <div id="invalid">

                        </div>

                        <div class="mb-4 ">
                            <label for="email" class="form-label"> Email</label>
                            <div>
                                <input type="email" class="form-control " name="email" id="email"
                                    placeholder="correo@gmail.com" />
                                <!-- <div class="valid-feedback">
                                    Correcto!
                                </div>
                                <div class="invalid-feedback ">
                                    Por favor ingrese una cuenta valida
                                </div> -->

                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="" class="form-label">Contraseña</label>
                            <div id="validatePass">

                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    id="password" />
                                <!-- <div class="valid-feedback">
                                    Correcto!
                                </div>
                                <div class="invalid-feedback ">
                                    <ul>
                                        <li>Minimo 8 caracteres</li>
                                        <li>Maximo 15</li>
                                        <li>Al menos una letra mayúscula</li>
                                        <li>Al menos una letra minucula</li>
                                        <li>Al menos un dígito</li>
                                        <li>No espacios en blanco</li>
                                        <li>Al menos 1 caracter especial</li>
                                    </ul>
                                </div> -->

                            </div>
                        </div>

                        <div class="d-flex justify-content-center">

                            <!-- <button type="button" name=" btnlogin" id="btnlogin"
                                class="btn text-light">Ingresar</button> -->
                            <button id="upSubmit" type="button" class=" btn-primary btn-block">Registrar!</button>
                        </div>
                        <div class="mt-3 d-flex justify-content-center flex-column">
                            <p class="d-flex justify-content-center flex-column flex-sm-row">¿No tienes cuenta? <a
                                    href="">Resgistrate</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>