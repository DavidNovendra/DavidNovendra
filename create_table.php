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

$sql = "CREATE TABLE products
(
    id      INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price INT UNSIGNED NOT NULL,
    quantity INT UNSIGNED NOT NULL DEFAULT 0,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
)";

if($conn->query($sql) === TRUE){
    echo "Table created successfully !";
} else {
    echo "Error: ". $sql . $conn->error;
}

$conn->close();
?>