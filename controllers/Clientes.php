<?php

class ClientesController {
    
    public function index(){
        require_once "models/Clientesmodel.php"; //agregar un script y si ya existe no agregarlo 2 veces
        $clientes = new Clientes_model();
        $data["titulo"] ="Clientes";
        $data["clientes"] = $clientes->get_clientes();

        require_once "views/clientes/clientes.php";
    }
    public function nuevo(){
           $data["titulo"] ="clientes";  
           require_once "views/clietes/clientes_nuevo.php";
}
}

?>
