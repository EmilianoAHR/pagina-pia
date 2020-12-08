<?php
include ("ConC.php");
$id_venta = $_POST['id_venta'];
$tipo_pago = $_POST['tipo_pago'];
$id_producto = $_POST['id_producto'];
$total = $_POST['total'];
$empleado = $_POST['empleado'];
$db_select = mysqli_select_db($conexion, "mrmercado");
$sql = ("UPDATE ventas SET tipo_pago = '$tipo_pago' , id_producto = '$id_producto' , total = '$total' , empleado = '$empleado' WHERE id_venta = '$id_venta' ");
if (mysqli_query($conexion, $sql)) {
echo "ACTUALIZACION CORRECTA";
echo "<br> <a href='ConsVen.php'> Mostrar tabla </a>";
} 
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conexion);
?>