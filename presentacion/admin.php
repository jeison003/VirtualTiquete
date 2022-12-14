<?php

    session_start();

    if (!isset($_SESSION['CODIGO'])) {
        header("Location: login.php");
    }else{
        session_destroy();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador</title>
  <link rel="stylesheet" href="../presentacion/boostrap/css/bootstrap.min.css">
  <style>

  </style>
</head>

<body>
  <div class="container-fluid py-5">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top " style="background-color: #0b5386;">
      <div class="container-fluid ">
        <p class="text-white fs-5">Tu fila virtual UNIMAG</p>
        <div class="col-sm-8"></div>
        <div class="col">
          <a class="navbar-brand text-white text-decoration-underline fs-6" href="login.php">Cerrar sesion</a>
        </div>
        <img src="../presentacion/img/Escudo_unimag.png" alt="Escudo Unimagdalena" width="110" height="80"
          class="d-inline-block align-text-top">
      </div>
    </nav>
    <br>
    <div class="container py-5 my-4">
      <div class="row">
        <div class=" col-sm-3"></div>
        <div class=" col-sm-6">
          <div class="card" style="background-color: #758ea4;">
            <div class="card-header text-white fs-4 fw-bold text-center" style="background-color: #0b5386;">
              Administrar tiquete virtual
            </div>
            <div class="card-body">
              <h5 class="card-title text-center text-white fs-6 fw-bold " style="background-color: #0b5386;">Codigo del
                turno actual:<p id="codigoActual">
                  <?php if(isset($_SESSION['PRIMERCODIGO'])){echo $_SESSION['PRIMERCODIGO'];}else{ echo 0000;}?>;
                </p>
              </h5>
              <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Turno actual:</h5>
                      <?php if(isset($_SESSION['PRIMERTURNO'])){ ?>
                       <p class="card-text fs-1 text-center" id="turnoActual"><?php echo $_SESSION['PRIMERTURNO'];?></p><?php }else{?>
                       <p class="card-text fs-1 text-center" id="turnoActual">0</p><?php }?>                                                                  
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Total recibidos:</h5>
                      <p class="card-text fs-1 text-center" id="totalReci">0</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-center my-4 ">

                <div class="col-4 d-grid gap-2 mx-auto">
                  <form action="../negocio/funciones/aceptartiquete.php" method="post">
                      <input name="PrimerCodigo" type="hidden" value=" <?php echo $_SESSION['PRIMERCODIGO']?>"></input>
                      <button class="btn btn-success" type="submit" id="recibido">Recibido</button>
                  </form>
                </div>
                <div class="col-4 col-4 d-grid gap-2 mx-auto">
                  <form action="../negocio/funciones/saltartiquete.php" method="post">
                      <input name="Codigo" type="hidden" value="<?php echo $_SESSION['PRIMERCODIGO']?>"></input>
                      <button class="btn btn-warning text-white" type="submit" id="saltarTurno">Saltar turno </button>
                  </form>
                </div>
                <div class="col-4 col-4 d-grid gap-2 mx-auto">
                <form action="../negocio/funciones/reiniciar.php">
                  <button class="btn btn-danger" type="button" id="guardarReiniciar">Guardar y reiniciar</button>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=" col-sm-3"></div>
      </div>
    </div>

    <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark" style="background-color: #0b5386;">
      <div class="container-fluid">
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <div class="col-sm-12 text-center">
              <ul class="list-group list-group-flush">
                <li class="list-group text-white">Informaci??n de contacto</li>
                <li class="list-group text-white">L??nea Gratuita Nacional: 01 8000 180 504. PBX: (57 - 5) 4381000 EXT.
                  3221, 3139 y 3117</li>
                <li class="list-group text-white">Direcci??n: Carrera 32 No 22 - 08 Santa Marta D.T.C.H. - Colombia.
                  C??digo Postal No. 470004
                </li>
                <li class="list-group text-white">ACorreo electr??nico: admisiones@unimagdalena.edu.co</li>
              </ul>
            </div>
            <div class="col-sm-12 text-center">
              <ul class="list-group list-group-flush">
                <li class="list-group text-white">La Universidad del Magdalena est?? sujeta a inspecci??n y vigilancia por
                  el Ministerio de Educaci??n Nacional.</li>
                <li class="list-group text-white">Universidad del Magdalena ?? 2018</li>
              </ul>
            </div>
          </ul>
        </div>
      </div>
    </nav>
    </>



    <script src="../presentacion/boostrap/js/bootstrap.min.js"></script>
    <script src=""></script>
</body>

</html>