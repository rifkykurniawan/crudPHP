<?php
// include database connection file
include_once("koneksi.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$query = "DELETE FROM tb_mahasiswa WHERE id=$id";
$result = mysqli_query($conn, $query);
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>