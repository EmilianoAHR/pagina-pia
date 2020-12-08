<?php
$servername = "localhost";
$database = "mrmercado";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database,);

$sql = "DELETE FROM clientes WHERE Id_Cliente = '$_POST[id_cliente]' ";
mysqli_query($sql, $conn);
if (mysqli_query($conn, $sql)) {
echo "EL REGISTRO FUE ELIMINADO";
echo "<br> <a href='ConsCli.php'>Verificar</a>";
} 
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>