<?php 
    session_start();

    require_once "BaseDatos.php";
    //print_r($_SESSION);
    
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
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"> Clover</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-item nav-link active" href="cerrarSesion.php">Cerrar Sesión <span class="sr-only">(current)</span></a>
                </div>
            </div>
        </nav>

        <div class="recorridos">
            <h4>Tus recorridos</h4>
            <a href="crearRecorrido.php"><span>Crear recorrido</span></a>
            <?php 
            
            $lnk = @new mysqli("sql204.epizy.com", "epiz_23054259","akQEQcq9oxSti");
            if($lnk->connect_errno) {
                echo "No se ha podido conectar al servidor.";
                die("**Error: ".$lnk->connect_error);
            }

            $lnk->select_db("epiz_23054259_clover");
            $lnk->set_charset("utf8") ;


            $sql = "SELECT * FROM recorrido
                WHERE idGuia = $_SESSION[idGuia]";
                
            if ($result = mysqli_query($lnk, $sql)) {
               while ($row = mysqli_fetch_row($result)) {
                    echo '<div class="recorrido">';
                        echo "<hr>";
                        echo "Comienzo del recorrido: ".$row[1]."<br/>";
                        echo "Fin del recorrido: ".$row[2]."<br/>";
                        echo "Tiempo apróximado del recorrido: ".$row[3]."<br/>";
                        echo "Longitud del recorrido (kms): ".$row[4]."<br/>";
                        echo "Zona: ".$row[5]."<br/>";
                        echo "Día del recorrido: ".$row[6]."<br/>";
                        echo '<form class="formMapa" action="mapaRecorrido.php" method="POST">';
                            echo "<input type=\"hidden\" value=".$row[1]." name=\"comienzo\">";
                            echo "<input type=\"hidden\" value=".$row[2]." name=\"fin\">";
                            echo "<button type=\"submit\" class=\"btn btn-info btn-sm\">Ver en mapa</button>";
                        echo "</form>";
                        echo '<form class="formBorrar" action="eliminarRecorrido.php" method="POST">';
                            echo "<input type=\"hidden\" value=".$row[0]." name=\"idRecorrido\">";
                            echo "<button type=\"submit\" class=\"btn btn-danger btn-sm\">Eliminar recorrido</button>";
                        echo '</form>';
                        echo '<form class="formMapa" action="editarRecorrido.php" method="POST">';
                        echo "<input type=\"hidden\" value=".$row[0]." name=\"idRecorrido\">";
                            echo "<input type=\"hidden\" value=".$row[1]." name=\"comienzo\">";
                            echo "<input type=\"hidden\" value=".$row[2]." name=\"fin\">";
                            echo "<input type=\"hidden\" value=".$row[3]." name=\"tiempo\">";
                            echo "<input type=\"hidden\" value=".$row[4]." name=\"longitud\">";
                            echo "<input type=\"hidden\" value=".$row[5]." name=\"zona\">";
                            echo "<input type=\"hidden\" value=".$row[6]." name=\"dia\">";
                            echo "<button type=\"submit\" class=\"btn btn-success btn-sm\">Editar recorrido</button>";
                        echo "</form>";
                    echo "</div>";
                }
                mysqli_free_result($result);
            }
            ?>
        </div>
    </div>
</body>
</html>