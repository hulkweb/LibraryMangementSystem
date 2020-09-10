<?php 
include 'connect.php';

$book_id=$_GET['book_id'] ;
$delete="DELETE from books where book_id='$book_id'";
$run_d=mysqli_query($con,$delete);
if ($run_d) {

	echo "<script>alert('book deleted from database'))</script>";
	echo "<script>window.open('librarian.php')</script>";
}

?>