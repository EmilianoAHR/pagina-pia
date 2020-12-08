<!DOCTYPE html>
<html lang="eng">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="ConsProd.css">
</head>
<body>
<div id="menud">
<ul>
<li id="menud"><a href="http://localhost:8080/Proyectos/ConsProd.php">Consultar</a></li>
<li id="menud"><a href="http://localhost:8080/Proyectos/InsProd.html">Insertar</a></li>
<li id="menud"><a href="http://localhost:8080/Proyectos/BorProd.html">Borrar</a></li>
<li id="menud"><a href="http://localhost:8080/Proyectos/ActProd.php">Actualizar</a></li>
<li id="menud"><a href="http://localhost:8080/Proyectos/Ses.php">Salir</a></li>
</ul>
</div>
<br>
<?php
$con = mysqli_connect("localhost","root", "") or die("Falla al conectar");
$db_select = mysqli_select_db($con, "mrmercado");
$result = mysqli_query($con, "SELECT * FROM productos");
echo "<table border= '3'>
<tr>
<th> Id_Producto</th>
<th> Descripcion </th>
<th> Precio </th>
<th> IVA </th>
<th> Categoria </th>
</tr>";

$cont = 0;
while ($row = mysqli_fetch_array($result)) 
{
	echo "<tr>";
	echo "<td>" .$row['id_producto']. "</td>";
	echo "<td>" .$row['descripcion']. "</td>";
	echo "<td>" .$row['precio']. "</td>";
	echo "<td>" .$row['iva']. "</td>";
	echo "<td>" .$row['categoria']. "</td>";
	echo "</tr>";
	$cont = $cont + 1;
}

echo "</table>";
echo "El numero de registros son: " .$cont;

mysqli_close($con);
?>
<input type ="checkbox" class="checkbox" id="check">
<label class="menu" for="check">|||</label>
<div class="left-panel">
<ul>
<a href="http://localhost:8080/Proyectos/Inicio.php"><li>Inicio</li></a>
<a href="http://localhost:8080/Proyectos/ConsCli.php"><li>Clientes</li></a>
<a href="http://localhost:8080/Proyectos/ConsVen.php"><li>Ventas</li></a>
</ul>
</div>
</body>
</html>