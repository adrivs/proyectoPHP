<?php
    session_start();
    $idGuia = $_SESSION["idGuia"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <title>Crear recorrido</title>
</head>

<body>


    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Clover</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <!-- FIN NAVBAR -->

        <div class="tituloForm">
            <h2>Rellena el siguiente formulario</h2>
            <hr>
        </div>
        <!-- PRINCIPIO FORM -->
        <div class="formu">
            <form method="POST" action="recorrido.php">
                <div class="form-group">
                    <label>Lugar de comienzo</label>
                    <input type="text" class="form-control" name="comienzo" placeholder="Lugar de comienzo">
                </div>
                <div class="form-group">
                    <label>Lugar de fin</label>
                    <input type="text" class="form-control" name="fin" placeholder="Lugar de fin">
                </div>
                <div class="form-group">
                    <label>Tiempo aprox.</label>
                    <input type="text" class="form-control" name="tiempo" placeholder="Tiempo aprox.">
                </div>
                <div class="form-group">
                    <label>Longitud</label>
                    <input type="text" class="form-control" name="longitud" placeholder="Longitud">
                </div>
                <div class="form-group">
                    <label>Zona</label>
                    <input type="text" class="form-control" name="zona" placeholder="Zona">
                </div>
                <div class="form-group">
                    <label>Día</label>
                    <input type="date" name="dia">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</body>

</html>