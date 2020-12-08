<?php
$servername = "localhost";
$database = "mrmercado";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database,);

$sql = "DELETE FROM ventas WHERE Id_Venta = '$_POST[id_venta]' ";
mysqli_query($sql, $conn);
if (mysqli_query($conn, $sql)) {
echo "EL REGISTRO FUE ELIMINADO";
echo "<br> <a href='ConsVen.php'>Verificar</a>";
} 
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>