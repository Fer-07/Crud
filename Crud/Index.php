<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Alquiler de equipo de computo</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./estilos/estilodeformulario.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
      
    <section class="app">
        <aside class="sidebar">
        </aside>
      </section>
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Accesorios <b>FAADPRO</b></h2></div>
                    <div class="col-sm-4">
                        <a href='./insertar/insertaracc.html' class="btn btn-info add-new"><i class="fa fa-plus"></i> Añadir Accesorios</a>
                    </div>
                </div>
            </div>
            <?php
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

$sql = "SELECT id, nombre, color, costo, garantia FROM usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table class='table table-bordered'>";
  echo "<tr>";
  echo "<th>ID</th><th>nombre</th><th>color</th><th>costo</th><th>garantia</th><th>acciones</th>";
  echo "</tr>";
  while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["id"]."</td><td>".$row["nombre"]."</td><td>".$row["color"]."</td><td>$".$row["costo"]."</td><td>".$row["garantia"]."</td>";
            echo "<td>
            <a class='edit' title='Editar' data-toggle='tooltip' href='./modificar/formmodaccesorios.php?id=".$row["id"]."&nombre=".$row["nombre"]."&color=".$row["color"]."&costo=".$row["costo"]."&garantia=".$row["garantia"]."' ><i class='material-icons'>&#xE254;</i></a>
            <a class='delete' title='Eliminar' data-toggle='tooltip' href='./eliminar/eliminar.php?id=".$row["id"]."' ><i class='material-icons'>&#xE872;</i></a>
        </td>";
            echo "</tr>";
  }
} else {
  echo "0 results";
}
$conn->close();
            echo "</table>";
            ?>
        </div>
    </div>
</div>     
</body>
</html>