<?php 
include 'connect.php';

$book_id=$_GET['book_id'] ;
$delete="DELETE from book_register where book_id='$book_id'";
$update_query="UPDATE books SET status='issue' where book_id='$book_id'  ";
 
 $run_update=mysqli_query($con,$update_query);
$run_d=mysqli_query($con,$delete);
if ($run_d and $run_update) {

	echo "<script>alert('book book returned'))</script>";
	echo "<script>window.open('student.php')</script>";
}

?>