<?php
include '../connection.php'; // Include your database connection file 

$username = $_POST['username'];
$password  = $_POST['password'];


$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$query = mysqli_query($conn, $sql);

if(mysqli_fetch_assoc($query) > 0){
    
    session_start();
    echo 'Successful login';

} else {
    echo 'Unsuccessful login';
}

?>