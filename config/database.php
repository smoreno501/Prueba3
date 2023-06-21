<?php
     class Conectar {
         public static function conexion(){
             $conexion = new mysqli("localhost","","","Clientes");
             return $conexion;
             
         }
     }
?>
