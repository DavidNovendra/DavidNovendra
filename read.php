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

$sql = "SELECT * FROM products WHERE price=16000";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "id: ". $row['id']. " Nama Menu: ". $row['name']. " - Price: ". $row['price']. "\n";
    }
} else {
    echo "0 result";
}


$conn->close();
?>