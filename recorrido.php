
    <?php 

        session_start();


        $lnk = @new mysqli("sql204.epizy.com", "epiz_23054259","akQEQcq9oxSti");
        if($lnk->connect_errno) {
            echo "No se ha podido conectar al servidor.";
            die("**Error: ".$lnk->connect_error);
        }

        $lnk->select_db("epiz_23054259_clover");
        $lnk->set_charset("utf8") ;


         $comienzo = $_POST['comienzo'];
         $fin = $_POST['fin'];
         $tiempo = $_POST['tiempo'];
         $longitud = $_POST['longitud'];
         $zona = $_POST['zona'];
         $auxdia = $_POST['dia'];
         $dia = date('Y-m-d', strtotime($auxdia));
         $idGuia = $_SESSION["idGuia"];



        $sql = "INSERT INTO recorrido
			    (comienzo,fin,tiempo, longitud, zona, dia, idGuia) VALUES
                ('$comienzo','$fin','$tiempo', '$longitud', '$zona', '$dia', '$idGuia');";
                
                echo $sql;

        if($lnk->query($sql));
        header("location:indexGuia.php");
    ?>
