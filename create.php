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

$sql = "INSERT INTO products(name, price, quantity) VALUES ('Ayam gepuk', 25000, 4)";

if($conn->query($sql) === TRUE){
    echo "New Record created successfully !";
} else {
    echo "Error: ". $sql . $conn->error;
}

$conn->close();
?>