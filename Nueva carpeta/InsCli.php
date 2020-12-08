<?php
$servername = "localhost";
$database = "mrmercado";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database,);

echo "Conexion Exitosa";

$sql = "INSERT INTO clientes (Id_Cliente, Nombre, Telefono, Tipo_Pago, Id_Venta) VALUES ('$_POST[id_cliente]','$_POST[nombre]','$_POST[telefono]','$_POST[tipo_pago]','$_POST[id_venta]')";
if (mysqli_query($conn, $sql)) {
echo "EL REGISTRO FUE AGREGADO";
echo "<br> <a href='ConsCli.php'> Mostrar tabla </a>";
} 
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>