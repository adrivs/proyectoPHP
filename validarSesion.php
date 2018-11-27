<?php 

    require_once "BaseDatos.php";
    require_once "Sesion.php";

	$ses = Sesion::iniciarSesion() ;
	if (!empty($_POST)):

		$usr = $_POST["emailGuia"];
        $pwd = $_POST["passGuia"];

        $log = $ses->doLogin($usr, $pwd);

		if ($log) {
            header("location:indexGuia.php");
        } else {
            echo "ERROR";
        }
        
		
	endif ;















       /* $lnk = @new mysqli("localhost", "root","");

        if($lnk->connect_errno) {
            echo "No se ha podido conectar al servidor.";
            die("**Error: ".$lnk->connect_error);
        }

        $lnk->select_db("clover");
        $lnk->set_charset("utf8") ;

        $emailGuia = $_POST['emailGuia'];
        $passGuia = md5($_POST['passGuia']);

        $sql = "SELECT * FROM guia WHERE email='$emailGuia' AND password='$passGuia'";
                
        if($lnk->query($sql));
        
        $filas = mysqli_num_rows($lnk->query($sql));

        if( $filas > 0 ) {
            header("location:indexGuia.php");
        } else {
            echo "ERROR";
        }

        mysqli_close($lnk);
 */
?>