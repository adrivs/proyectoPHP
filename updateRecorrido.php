<?php 

require_once "Sesion.php";

session_start();

$idRecorrido = $_POST["idRecorrido"];
$comienzo = $_POST["comienzo"];
$fin = $_POST["fin"];
$tiempo = $_POST["tiempo"];
$longitud = $_POST["longitud"];
$zona = $_POST["zona"];
$dia = $_POST["dia"];

$lnk = @new mysqli("sql204.epizy.com", "epiz_23054259","akQEQcq9oxSti");
if($lnk->connect_errno) {
    echo "No se ha podido conectar al servidor.";
    die("**Error: ".$lnk->connect_error);
}

$lnk->select_db("epiz_23054259_clover");
$lnk->set_charset("utf8") ;



        $sql = "UPDATE recorrido SET comienzo = '$comienzo', fin = '$fin', tiempo = '$tiempo', longitud = '$longitud', zona = '$zona', dia = '$dia' WHERE idRecorrido = '$idRecorrido'";
        if($lnk->query($sql));

        header("location:indexGuia.php");
        

?>