
    <?php 
    //Introducir guía
    $lnk = @new mysqli("sql204.epizy.com", "epiz_23054259","akQEQcq9oxSti");
    if($lnk->connect_errno) {
        echo "No se ha podido conectar al servidor.";
        die("**Error: ".$lnk->connect_error);
    }
    
    $lnk->select_db("epiz_23054259_clover");
    $lnk->set_charset("utf8") ;
    

         $nombreGuia = $_POST['nombreGuia'];
         $apellidosGuia = $_POST['apellidosGuia'];
         $emailGuia = $_POST['emailGuia'];
         $passGuia = md5($_POST['passGuia']);

        $sql = "INSERT INTO guia
			    (nombre,apellidos,email, password) VALUES
                ('$nombreGuia','$apellidosGuia','$emailGuia', '$passGuia');";
                
                echo $sql;

        if($lnk->query($sql));
        header("location:../index.html");
    ?>
