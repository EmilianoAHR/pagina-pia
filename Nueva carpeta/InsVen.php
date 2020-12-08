<?php
$servername = "localhost";
$database = "mrmercado";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database,);

echo "Conexion Exitosa";

$sql = "INSERT INTO ventas (Id_Venta, Tipo_Pago, Id_Producto, Total, Empleado) VALUES ('$_POST[id_venta]','$_POST[tipo_pago]','$_POST[id_producto]','$_POST[total]','$_POST[empleado]')";
if (mysqli_query($conn, $sql)) {
echo "EL REGISTRO FUE AGREGADO";
echo "<br> <a href='ConsVen.php'> Mostrar tabla </a>";
} 
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>