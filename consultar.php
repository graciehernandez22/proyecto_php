<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="guardardatos.php">Guardar</a>
    <h1>CONSULTA DE CLIENTES</h1>    

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sis21c";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT idcliente,nombre,apellidos, telefono,dui FROM clientes";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    echo "<table border=1><tr><td>IDCLIENTE</td><td>Nombre</td><td>Apellidos</td><td>telefono</td><td>DUI</td> </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["idcliente"]."</td>"; 
        echo "<td>" . $row["nombre"]."</td>";
        echo "<td>" . $row["apellidos"]."</td>";
        echo "<td>" . $row["telefono"]."</td>";
        echo "<td>" . $row["dui"]."</td></tr>";
      
    }
     echo "</table>";
    } else {
    echo "0 results";
    }
    $conn->close();
?>
</body>
</html>