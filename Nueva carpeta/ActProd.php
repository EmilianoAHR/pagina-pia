<!DOCTYPE html>
<html lang="eng">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="Prod.css">
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
<div class="Formu">
<form action="ActualizarP.php" method="post">
<br>
<br>
<input type="text" name="id_producto" placeholder="Inserte ID a modificar">
<br>
<br>
<input type="text" name="descripcion" placeholder="Inserte registro nuevo">
<br>
<br>
<input type="text" name="precio" placeholder="Inserte registro nuevo">
<br>
<br>
<input type="text" name="iva" placeholder="Inserte registro nuevo">
<br>
<br>
<input type="text" name="categoria" placeholder="Inserte registro nuevo">
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
<a href="http://localhost:8080/Proyectos/ConsCli.php"><li>Clientes</li></a>
<a href="http://localhost:8080/Proyectos/ConsVen.php"><li>Ventas</li></a>
</ul>
</div>
<body>
</html>