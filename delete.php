<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "latihan_sql";

//Koneksi
$conn = new mysqli($servername, $username, $password, $dbName);

if($conn->connect_error){
    die("Connection failed". $conn->connect_error);
}

$sql = "DELETE FROM products where quantity=4";

if($conn->query($sql) === TRUE){
    echo "Record deleted successfully !";
} else {
    echo "Error: ". $sql . $conn->error;
}

$conn->close();
?>