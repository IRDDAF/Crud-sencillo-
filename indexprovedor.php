<?php
$servername="localhost";
$username="root";
$password="";
$dbname="gala1";

if($_POST){

$nombre=$_POST['nombre'];
$rfc=$_POST['rfc'];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("<strong>CONEXION FALLIDA</strong>" . $conn->connect_error);
  }
  
  $sql = "INSERT INTO provedores (nombre, rfc)
  VALUES ('".$nombre."', '".$correo."')";
  
  if ($conn->query($sql) === TRUE) {
    echo "<strong>EXITO</strong>";
  } else {
    echo "<strong>ERROR</strong>" . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
}
?>

<html>
    <head>
        <link rel="stylesheet" href="index.css"/>
        <title>CONEXION A BASE DE DATOS</title>
    </head>
    <body>

    <div class="insert">
    <form action="indexprovedor.php" method="POST" class="aqui">
        Ingrese su nombre:
        <input type="text" name="nombre" >
        <br>
        Ingrese su correo:
        <input type="text" name="correo" >
        <br>
        
        <button type="submit">GUARDAR</button>        
    </form>
    </div>

        Desea eliminar algo??
        <a href="./eliminarprovedores.php" target="_blank">SI</a>
        <br>
        Desea modificar el nombre??
        <a href="./modificarprovedor.php" target="_blank">SI</a>
        
    </body>
</html>