<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <title>Document</title>
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

        <!-- PRINCIPIO FORM GUIA -->
        <div>
            <form method="POST" action="guia.php">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombreGuia" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label>Apellidos</label>
                    <input type="text" class="form-control" name="apellidosGuia" placeholder="Apellidos">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="emailGuia" placeholder="ejemplo@ejemplo.com">
                </div>
                <div class="form-group">
                    <label>País</label>
                    <input type="text" class="form-control" name="paisGuia" placeholder="País">
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" name="passGuia" placeholder="Contraseña">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descríbete</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</body>

</html>