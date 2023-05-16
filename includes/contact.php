<?php include 'header.php';?>
  
<div class="content">
    
        <h2>Contáctanos</h2>
        <hr>
        <p>Para hacer llegar tus comentarios o preguntar por un pedido personalizado contestando el siguiente cuestionario:</p>
        <div class="content container "> <!--Contenedor principal-->
          <div class="container-form"> <!--Contenedor del formulario-->
            <form action="../controllers/contactform.php" method="POST">
                
                <p>
                  <?php if (isset($_GET["errorNombre"])) {
                        ?>
                        <span class="alert-danger"><?php echo $_GET["errorNombre"];?></span>
                        <?php
                  }?>
                  <input type="text" name="nombre" placeholder="Ingrese su nombre">
                  
                </p>
                
                <p>
                <?php if (isset($_GET["errorCorreo"])) {
                        ?>
                        <span class="alert-danger"><?php echo $_GET["errorCorreo"];?></span>
                        <?php
                  }?>
                    <input type="email" name="correo" placeholder="Ingrese su correo">
                </p>

                <p>
                  <?php if (isset($_GET["errorTelefono"])) {
                        ?>
                        <span class="alert-danger"><?php echo $_GET["errorTelefono"];?></span>
                        <?php
                  }?>
                    
                    <input type="tel" name="telefono" placeholder="Ingrese su numero">
                </p>

                <p>
                <?php if (isset($_GET["errorMensaje"])) {
                        ?>
                        <span class="alert-danger"><?php echo $_GET["errorMensaje"];?></span>
                        <?php
                  }?>
                    <textarea name="mensaje" cols="3" placeholder="Ingrese su mensaje"></textarea>
                </p>

                <button type="submit" class="btn-env">Enviar </button>
            </form>
          </div>
    
         <!-- <div class="container-img"> 
    
          </div>-->
        </div>
    
      </div>



<?php include 'footer.php';?>