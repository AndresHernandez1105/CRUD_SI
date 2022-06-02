<?php

//Conectar a base de datos
require '../includes/config/database.php';
$db = conectarDB();

$id = $_GET['id'];
$sql = "DELETE FROM contactos WHERE id = $id";
$resultado = mysqli_query($db,$sql);

if ($resultado){
    header("Location: index.php");
    exit();
}
echo "Error en eliminar dato";
exit();
?>