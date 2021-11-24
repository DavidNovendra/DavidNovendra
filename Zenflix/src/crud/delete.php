<?php
// include database connection file
require('../../config.php');
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$query = "DELETE FROM films WHERE id=$id";
$delete = mysqli_query( $conn, $query );
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../../dashboard.php?delete=".$delete);
?>