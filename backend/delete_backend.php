<?php 
include '../connection.php';

$id = $_POST['id'];

$sql = "DELETE FROM `sales_report` WHERE id = '$id'";

$query = mysqli_query($conn, $sql);


?>