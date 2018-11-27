<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
<?php
session_start();

$idRecorrido = $_POST["idRecorrido"];
$comienzo = $_POST["comienzo"];
$fin = $_POST["fin"];
$tiempo = $_POST["tiempo"];
$longitud = $_POST["longitud"];
$zona = $_POST["zona"];
$dia = $_POST["dia"];
?>
        <div class="tituloForm">
            <h2>Editar formulario</h2>
            <hr>
        </div>
        <div class="container">
            <form method="POST" action="updateRecorrido.php">
                <div class="form-group">
                    <label>Lugar de comienzo</label>
                    <input type="text" value="<?php echo $comienzo ?>" class="form-control" name="comienzo">
                </div>
                <div class="form-group">
                    <label>Lugar de fin</label>
                    <input type="text" value="<?php echo $fin ?>" class="form-control" name="fin">
                </div>
                <div class="form-group">
                    <label>Tiempo aprox.</label>
                    <input type="text" value="<?php echo $tiempo ?>" class="form-control" name="tiempo">
                </div>
                <div class="form-group">
                    <label>Longitud</label>
                    <input type="text" value="<?php echo $longitud ?>" class="form-control" name="longitud">
                </div>
                <div class="form-group">
                    <label>Zona</label>
                    <input type="text" value="<?php echo $zona ?>" class="form-control" name="zona">
                </div>
                <div class="form-group">
                    <label>Día</label>
                    <input type="date" value="<?php echo $dia ?>" name="dia">
                </div>
                <input type="hidden" value="<?php echo $idRecorrido ?>" name="idRecorrido">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            </div>
</body>
</html>

