<?php
    require_once "config/config.php";
    require_once "core/routes.php";
    require_once "config/database.php";
    require_once "controllers/Clientes.php";

    $control = new ClientesController();
    $control->index();
    
?>
