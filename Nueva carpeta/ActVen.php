<!DOCTYPE html>
<html lang="eng">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="InsVen.css">
</head>
<body>
<div id="menud">
<ul>
<li id="menud"><a href="http://localhost:8080/Proyectos/ConsVen.php">Consultar</a></li>
<li id="menud"><a href="http://localhost:8080/Proyectos/InsVen.html">Insertar</a></li>
<li id="menud"><a href="http://localhost:8080/Proyectos/BorVen.html">Borrar</a></li>
<li id="menud"><a href="http://localhost:8080/Proyectos/ActVen.php">Actualizar</a></li>
<li id="menud"><a href="http://localhost:8080/Proyectos/Ses.php">Salir</a></li>
</ul>
</div>
<div class="Formu">
<form action="ActualizarV.php" method="post">
<br>
<br>
<input type="text" name="id_venta" placeholder="Inserte ID a modificar">
<br>
<br>
<input type="text" name="tipo_pago" placeholder="Inserte registro nuevo">
<br>
<br>
<input type="text" name="id_producto" placeholder="Inserte registro nuevo">
<br>
<br>
<input type="text" name="total" placeholder="Inserte registro nuevo">
<br>
<br>
<input type="text" name="empleado" placeholder="Inserte registro nuevo">
<br>
<br>
<input type="submit" name="act" value="Actualizar">
<br>
<br>
</form>
</div>
<input type ="checkbox" class="checkbox" id="check">
<label class="menu" for="check">|||</label>
<div class="left-panel">
<ul>
<a href="http://localhost:8080/Proyectos/Inicio.php"><li>Inicio</li></a>
<a href="http://localhost:8080/Proyectos/ConsProd.php"><li>Productos</li></a>
<a href="http://localhost:8080/Proyectos/ConsCli.php"><li>Clientes</li></a>
</ul>
</div>
<body>
</html>