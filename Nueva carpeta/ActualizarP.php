<?php
include ("ConC.php");
$id_producto = $_POST['id_producto'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$iva = $_POST['iva'];
$categoria = $_POST['categoria'];
$db_select = mysqli_select_db($conexion, "mrmercado");
$sql = ("UPDATE productos SET descripcion = '$descripcion' , precio = '$precio' , iva = '$iva' , categoria = '$categoria' WHERE id_producto = '$id_producto' ");
if (mysqli_query($conexion, $sql)) {
echo "ACTUALIZACION CORRECTA";
echo "<br> <a href='ConsProd.php'> Mostrar tabla </a>";
} 
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conexion);
?>