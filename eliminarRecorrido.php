<?php 

session_start();


$lnk = @new mysqli("sql204.epizy.com", "epiz_23054259","akQEQcq9oxSti");
if($lnk->connect_errno) {
    echo "No se ha podido conectar al servidor.";
    die("**Error: ".$lnk->connect_error);
}

$lnk->select_db("epiz_23054259_clover");
$lnk->set_charset("utf8") ;

$idRecorrido = $_POST["idRecorrido"];

$sql = "DELETE FROM recorrido WHERE idRecorrido = '$idRecorrido'";
        
if($lnk->query($sql));
header("location:indexGuia.php");

?>