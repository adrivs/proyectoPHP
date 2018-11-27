<?php
    require_once "Sesion.php";
    $ses = Sesion::iniciarSesion();
    if($ses->checkActiveSession()){
        $ses->close();
    }

    header("location:../index.html");
?>