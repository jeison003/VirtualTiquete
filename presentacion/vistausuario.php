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
  <title>Usuario</title>
  <link rel="stylesheet" href="../presentacion/boostrap/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
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
              Tiquete virtual
            </div>
            <div class="card-body">
              <h5 class="card-title text-center text-white fs-6 fw-bold " style="background-color: #0b5386;">Dia de hoy: <?php echo $_SESSION['DIAHOY'];?>
              </h5>
              <div class="row">
                <div class="col-sm-6">
                <h5 class="card-title text-white">Codigo: <?php echo $_SESSION['CODIGO']; ?></h5>
                <h5 class="card-title text-white">Hola, <?php echo $_SESSION['NOMBRE'];?>!</h5>
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
                <h5 class="card-title text-white">Dias Habilitados: <?php echo ($_SESSION['DIA1']); ?> - <?php //echo ($_SESSION['DIA2']);?></h5>
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Tu turno: </h5>
                      <p class="card-text fs-1 text-center" id="turnousuario"><?php echo($_SESSION['TURNO'])?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-center my-4 ">    
                <?php
                  if(!isset($_SESSION['TURNO'])){//si no tiene turno no le permite cancelarlo  y si lo tiene no le permite pedirlo
                ?>
                <div class="col-6 d-grid gap-2 mx-auto">
                  <form action="../negocio/funciones/pedirtiquete.php" method="post">                       
                    <button class="btn btn-success"  type="submit" id="pedirturno">Pedir Turno</button>
                    <input name="Codigo" type="hidden" value="<?php echo $_SESSION['CODIGO']?>" > 
                  </form>
                </div> 
                  <div class="col-6 col-4 d-grid gap-2 mx-auto">                                     
                    <button class="btn btn-danger" disabled="disabled" type="button" id="bloqueado">Cancelar Turno</button>                 
                  </div>
                <?php
                  }else{
                ?>                            
                <div class="col-6 d-grid gap-2 mx-auto">                                   
                    <button class="btn btn-success" disabled="disabled"  type="submit" id="pedirturno">Pedir Turno</button>                    
                </div>     
                <div class="col-6 d-grid gap-2 mx-auto">
                  <form action="../negocio/funciones/cancelartiquete.php" class="foract" method="post">     
                    <input name="Codigo" type="hidden" value="<?php echo $_SESSION['CODIGO']?>" >
                    <button class="btn btn-danger" type="submit" id="cancelarTurno">Cancelar Turno</button>
                  </form>
                </div>                                        
                <?php
                  }
                ?>
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
                <li class="list-group text-white">Correo electr??nico: admisiones@unimagdalena.edu.co</li>
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