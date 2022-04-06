<?php
Define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'fabulor');
$conn = mysqli_connect('localhost', 'root', '', 'fabulor');

//Check the connection
if($conn == false){
    die('Error: Cannot connect');
}
?>

