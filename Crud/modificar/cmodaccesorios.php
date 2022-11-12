<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$color = $_GET['color'];
$costo = $_GET ['costo'];
$garantia = $_GET ['garantia'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accesorios";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE usuario SET nombre='".$nombre."', color='".$color."', costo='".$costo."', garantia='".$garantia."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
  header("location:../Index.php");
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>