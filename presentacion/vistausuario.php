<?php

    session_start();
    if (!isset($_SESSION['CODIGO'])) {
        header("Location: login.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='main.js'></script>
</head>
<body>
    <header id="indice">
        <h2>Tu fila virtual unimagdalena</h2>
        <div id="cerrar-sesion">
            <a class="navbar-brand text-white text-decoration-underline fs-6" href="login.php">Cerrar sesion</a>
        </div>
        <div id="logo">
            <img src="./src/logo.png">
        </div>
    </header>
    <div id="todo">
        <div class="flex-container" id="informacion-principal">
            <div id="cuadro-centro">
                <div id="titulo-cuadro">
                    <div id="titulo-cuadro2">
                        <p>Tiquete virtual</p>
                    </div>
                </div>
                <div id="cuadro-info">
                    <div class="texto1">
                        <p>Codigo: <?php echo $_SESSION['CODIGO'];?></p>
                    </div>
                    <div class="texto2">
                        <p>Dias:</p>
                    </div>
                </div>
                <div id="cuadro-info">
                    <div class="texto1">
                        <p>Turno actual:</p>
                    </div>
                    <div id="texto3">
                        <p>Tu turno:</p>
                    </div>
                </div>
                <div id="cuadro-info">
                    <div class="turnos">
                        <h></h>
                    </div>
                    <div class="turnos">
                        <h></h>
                    </div>
                </div>
                <div id="cuadro-info2">
                    <button id="pedir-turno" class="btn-success">
                        <h>Pedir turno</h>
                    </button>
                    <button id="cancelar-turno" class="btn-danger">
                        <h>Cancelar turno</h>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id="margen-final">
        <div id="margen-final-titulo">
            <h4>Información de contacto</h4>
        </div>
        <div id="margen-final-parrafo">
            <p3>Línea Gratuita Nacional: 01 8000 180 504. PBX: (57 - 5) 4381000 EXT. 3221, 3139 y 3117</p3>
            <p3>Correo electrónico: admisiones@unimagdalena.edu.co</p3>
        </div>
        <div id="margen-final-parrafo2">
            <p3>Dirección: Carrera 32 No 22 - 08 Santa Marta D.T.C.H. - Colombia. Código Postal No. 470004</p3>
        </div>
        <div id="margen-final-parrafo2">
            <p3>Correo electrónico: admisiones@unimagdalena.edu.co</p3>
        </div>
        <div id="margen-final-parrafo">
            <p3>La Universidad del Magdalena está sujeta a inspección y vigilancia por el Ministerio de Educación Nacional.</p3>
        </div>
        <div id="margen-final-parrafo">
            <p3>Universidad del Magdalena © 2018</p3>
        </div>
    </div>
</body>
</html>