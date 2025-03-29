<?php
$servername = "sci-mysql"; 
$username = "coa123edb";
$password = "E4XujVcLcNPhwfBjx-";
$dbname = "coa123edb";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if ($conn) {
} else {
    echo "Connection failed: " . mysqli_connect_error();
}
?>
