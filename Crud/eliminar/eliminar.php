<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accesorios";
$id=$_GET['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM usuario WHERE id=".$id;

if ($conn->query($sql) === TRUE) {
  header("location:../Index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>