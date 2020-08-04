<?php
$connect = mysqli_connect($host = 'localhost', $user = 'root', $password = 'mysql', $database = 'darbuotojai');

//printink($connect);

if (!$connect) {
 die("Database connect failed");
}  

function printink($var){
echo "<pre>";
print_r($var);
echo "</pre>";
}
?>