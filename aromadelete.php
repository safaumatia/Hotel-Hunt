<?php
include 'conn.php';
$id = $_GET['id'];
$q = "DELETE FROM crudhotel WHERE id= $id ";
mysqli_query($con,$q);
header('location:aromadisplay.php' );

?>
 