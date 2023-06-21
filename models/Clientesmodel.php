<?php

class Clientes_model{

    private $db;
    private $clientes;

    public function __construct() {//metodo constructor
        $this->db = Conectar::conexion();
        $this->clientes = array();
}

public function get_clientes()
{
    $sql = "SELECT * FROM clientes";
    $resultado = $this->db->query($sql);
    while($row = $resultado->fetch_assoc())
    {
        $this->clientes[] = $row;
    }
    return $this->clientes;
}

public function insertar($nombre, $telefono, $correo) 
{
    $sql = "INSERT INTO clientess ('nombre', 'telefono', 'correo') VALUES ('$nombre', '$telefono', '$correo')";
    $resultado = $this->db->query($sql);
}
}
?>
