<?php
$servername = "localhost";
$database = "mrmercado";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database,);

echo "Conexion Exitosa";

$sql = "INSERT INTO productos (Id_Producto, Descripcion, Precio, IVA, Categoria) VALUES ('$_POST[id_producto]','$_POST[descripcion]','$_POST[precio]','$_POST[iva]','$_POST[categoria]')";
if (mysqli_query($conn, $sql)) {
echo "EL REGISTRO FUE AGREGADO";
echo "<br> <a href='ConsProd.php'> Mostrar tabla </a>";
} 
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>