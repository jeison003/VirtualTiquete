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
        <a class="navbar-brand text-white text-decoration-underline fs-6" 
          href="login.php">Cerrar sesion</a>        
        </div>
        <img src="../presentacion/img/Escudo_unimag.png" alt="Escudo Unimagdalena" width="110" height="80"
          class="d-inline-block align-text-top">
      </div>
    </nav>
    <br>
    <div class="container-fluid py-5 my-5">
      <div class="card" style="background-color: #758ea4;">
        <div class="card-header text-white fs-4 fw-bold text-center" style="background-color: #0b5386;">
          Administrar tiquete virtual
        </div>
        <div class="card-body">
          <h5 class="card-title text-center text-white fs-6 fw-bold " style="background-color: #0b5386;">Codigo del
            turno actual: <p id="codigoActual"></p>
          </h5>
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Turno actual:</h5>
                  <p class="card-text fs-1 text-center" id="turnoActual">0</p>
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
              <button class="btn btn-success" type="button" id="recibido">Recibido</button>
            </div>
            <div class="col-4 col-4 d-grid gap-2 mx-auto">
              <button class="btn btn-warning text-white" type="button" id="saltarTurno">Saltar turno </button>
            </div>


            <div class="col-4 col-4 d-grid gap-2 mx-auto">
              <button class="btn btn-danger" type="button" id="guardarReiniciar">Guardar y reiniciar</button>
            </div>


          </div>
        </div>
      </div>
    </div>



    <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark" style="background-color: #0b5386;">
      <div class="container-fluid">
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <div class="col-sm-12 text-center">
              <ul class="list-group list-group-flush">
                <li class="list-group text-white">Información de contacto</li>
                <li class="list-group text-white">Línea Gratuita Nacional: 01 8000 180 504. PBX: (57 - 5) 4381000 EXT.
                  3221, 3139 y 3117</li>
                <li class="list-group text-white">Dirección: Carrera 32 No 22 - 08 Santa Marta D.T.C.H. - Colombia.
                  Código Postal No. 470004
                </li>
                <li class="list-group text-white">ACorreo electrónico: admisiones@unimagdalena.edu.co</li>
              </ul>
            </div>
            <div class="col-sm-12 text-center">
              <ul class="list-group list-group-flush">
                <li class="list-group text-white">La Universidad del Magdalena está sujeta a inspección y vigilancia por
                  el Ministerio de Educación Nacional.</li>
                <li class="list-group text-white">Universidad del Magdalena © 2018</li>
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