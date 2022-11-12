<?php
$nombre = $_POST['nombre'];
$color = $_POST['color'];
$costo = $_POST ['costo'];
$garantia = $_POST ['garantia'];
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

$sql = "INSERT INTO usuario (nombre, color, costo, garantia)
VALUES ('".$nombre."','".$color."','".$costo."','".$garantia."')";

if ($conn->query($sql) === TRUE) {
  header("location:../Index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>