<?php 

$id=$_GET["id"];

$nombre=$_GET["nombre"];

$color=$_GET["color"];

$costo=$_GET["costo"];

$garantia=$_GET["garantia"];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilosfaadpro.css">
    <title>Accesorios</title>
</head>
<body>
<form action="cmodaccesorios.php" method= "GET">
        <div class="form">
            <h1>Accesorios</h1>
            <div class="grupo">
                <input type="text" name="id" value='<?php echo $id ?>' readonly="readonly" required><span class="barra"></span>
                <label>ID</label>
            </div>
            <div class="grupo">
                <input type="text" name="nombre" value='<?php echo $nombre ?>' required><span class="barra"></span>
                <label>Nombre</label>
            </div>
            <div class="grupo">
                <input type="text" name="color" value='<?php echo $color ?>' required><span class="barra"></span>
                <label>Color</label>
            </div>
            <div class="grupo">
                <input type="number" name="costo" value='<?php echo $costo ?>' required><span class="barra"></span>
                <label>Costo</label>
            </div>
            <div class="grupo">
                <input name="garantia" value='<?php echo $garantia ?>' type="text" required><span class="barra"></span>
                <label>Garantia</label>
            </div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>