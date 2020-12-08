<?php
include ("ConC.php");
$id_cliente = $_POST['id_cliente'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$tipo_pago = $_POST['tipo_pago'];
$id_venta = $_POST['id_venta'];
$db_select = mysqli_select_db($conexion, "mrmercado");
$sql = ("UPDATE clientes SET nombre = '$nombre' , telefono = '$telefono' , tipo_pago = '$tipo_pago' , id_venta = '$id_venta' WHERE id_cliente = '$id_cliente' ");
if (mysqli_query($conexion, $sql)) {
echo "ACTUALIZACION CORRECTA";
echo "<br> <a href='ConsCli.php'> Mostrar tabla </a>";
} 
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conexion);
?>