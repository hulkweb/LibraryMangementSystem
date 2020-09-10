
<div class="container" id="issue_a_book">
<?php 
include 'connect.php';
if (isset($_GET['book_id'])) {
	# code...

$book_id=$_GET['book_id'] ;
$get_book="SELECT * from books where book_id='$book_id'";
$run_b=mysqli_query($con,$get_book);
while ($row=mysqli_fetch_array($run_b)) {
  $name=$row['book_name'];
  $Author=$row['book_author'];
  $book_id=$row['book_id'];
}


$issue_date=date("d/m/Y");

$mkr_date= mktime(0,0,0,date("m"),date("d")+3,date("Y"));
$return_date=date("d/m/Y",$mkr_date);

?>
	<div class="h2 text-warning">Issue Processing</div>
	<table class="table h4" id="isssue_table">
		<tr><td>Book Name</td><td><p><?php echo $name; ?></p></td></tr>
		<tr><td>Author Name</td><td><p><?php echo $Author; ?></p></td></tr>
		<tr><td>Issue date</td><td><p><?php echo $issue_date; ?></p></td></tr>
		<tr><td>Return date</td><td><p><?php echo $return_date; ?></p></td></tr>

		<tr><td>Fine</td><td><p>$4.0</p></td></tr>
		<form method="post" >
			<tr><td>Boook id</td><td><input type="text" name="book_id" value="<?php echo $book_id;?>"></td></tr>
			
		<tr align="center"><td colspan="6"><button type="submit" name="issue" class="btn btn-info btn-lg" >Issue</button></td></tr>
        </form>
	</table>
	
</div>
<?php  

if (isset($_POST['issue'])) {
 $id=$_POST['book_id'];
 $add_query="INSERT into book_register (book_id,student_id,issue_date,return_date,book_name) values ('$book_id','$sid','$issue_date','$return_date','$name')";
 $update_query="UPDATE books SET status='issued' where book_id='$id'  ";
 $run_add=mysqli_query($con,$add_query);
 $run_update=mysqli_query($con,$update_query);
 if ($run_add and $run_update) {
 	echo "<script> alert('book issued successfully') </script>";
 }
 else{
 	echo "<script> alert('failed') </script>";
 
 }

}}
    ?>