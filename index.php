
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS 4.4.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- fontawesome-free-5.13.0-web -->
    <link href="plugins/fontawesome-free/css/all.css" rel="stylesheet">
    <!-- mi css -->
    <link rel="stylesheet" type="text/css" href="css/mi-css.css">
    <title>Inicio Sesion</title>
  </head>
  <body>
    <div class="mi-container text-center mt-5 mb-5">
      <!-- logo -->
      <div class="mi-logo row justify-content-center mb-3">
        <a class="mi-link" href="">
          <img class="mi-logo" src="img/hacker.png"  alt="..." style="width: 120px;">
          <h2>Logo entidad</h2>
        </a>
      </div>
      <!-- logo -->

      <!-- formulario login -->
      <div class="mi-div row justify-content-center">        
        <div class="card mi-card" >
          <div class="card-body">
            <h4 class="card-title">Iniciar Sesion </h4>
            <small class="text-muted">
              Los campos con <span class="mi-span">*</span> son requeridos.
            </small>
            <hr>
            <form action="" method="post" autocomplete="off">

              <div class="form-group col-sm-12">
                <!-- <label for="exampleInputEmail1">* Usuario</label> -->
                <div class="mi-div">
                  <i class="mi-icono-login fas fa-user"></i>  
                  <input type="text" class="form-control mi-input" id="nombre_us_input" placeholder="* Nombre de Usuario" maxlength="20" name="nombre">
                </div>                
              </div>

              <div class="form-group col-sm-12">
                <!-- <label for="exampleInputPassword1">* Contraseña</label> -->
                <div class="mi-div">
                  <i class="mi-icono-login fas fa-unlock-alt"></i>
                  <input type="password" class="form-control mi-input" id="pass_us_input" placeholder="* Contraseña" maxlength="20" name="pass">
                </div>                
              </div>
              
              <?php 
                require_once "usuario.php";
                $datos = Usuario::iniciarSesion();
              ?>
              <?php if ($datos): ?>
              
              <!-- alerta -->
              <div class="form-group col-sm-12">
                <div class="mi-alerta alert small alert-danger" role="alert">
                  <span><?php print_r($datos); ?></span>
                </div>
              </div>
              
              <?php endif ?>
              

              
              <button type="submit" class="btn mi-boton col-sm-12">Iniciar Sesion</button>
              <a href="registrarUsuario.php" class="btn text-info col-sm-12">Registrarse</a>

            </form>
          </div>
        </div>                  
      </div>
      <!-- Fin formulario login -->

    </div>
    <!-- mi script -->
    <script type="text/javascript" src="js/mi-java-script.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>