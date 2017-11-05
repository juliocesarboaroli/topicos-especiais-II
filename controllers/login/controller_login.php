<?php
    include($_SERVER["DOCUMENT_ROOT"]."/topicos/models/login/login.php");
    $controller_login = new Login();
    $controller_login->LogarSistema();
?>