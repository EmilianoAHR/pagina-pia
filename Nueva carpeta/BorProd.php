<?php
$servername = "localhost";
$database = "mrmercado";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database,);

$sql = "DELETE FROM productos WHERE Id_Producto = '$_POST[id_producto]' ";
mysqli_query($sql, $conn);
if (mysqli_query($conn, $sql)) {
echo "EL REGISTRO FUE ELIMINADO";
echo "<br> <a href='ConsProd.php'>Verificar</a>";
} 
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>