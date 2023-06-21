<?php  
?>
<!DOCTYPE html>
      <head>
          <title><?php echo $data["titulo"]; ?></title>
</head>

<body>
    <h2><?php echo $data["titulo"]; ?></h2>
    <br/>
    <br/>
    <a href="">Agregar</a>
    <br/>
    <br/>
    <table border="1" width="80%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data["clientes"] as $dato) {
                echo "<tr>";
                echo "<td>".$dato["nombre"]."</td>";
                echo "<td>".$dato["telefono"]."</td>";
                echo "<td>".$dato["correo"]."</td>";
                echo "</tr>";
            }
            ?>
        </tbody
    </table>
</body>
</html>
