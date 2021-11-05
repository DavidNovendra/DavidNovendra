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

$sql = "UPDATE products
SET name='Mie Soto', quantity='500', description='ini untuk jualan'
WHERE id=3";

if($conn->query($sql) === TRUE){
    echo "Record updated successfully !";
} else {
    echo "Error: ". $sql . $conn->error;
}

$conn->close();
?>