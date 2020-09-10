
<div class="container-fluid table-responsive "  id="issued_book">
	 <p style="width: 40%;font-size:20px;padding: 10px; color: red;text-align: center;align-self: center; border-bottom: 1px solid blue;background-color: white;opacity: 0.7">Issued Books</p>
 <table class='table table-bordered table-hover text-center text-primary bg-light h5'>
 	<thead ><th>Book Id</th><th>Book name</th><th>Author Name</th><th>Status</th><th>Action</th>
 	 </thead>
 	 <tbody>

 	 	<?php 
 	 	include 'connect.php';
		$q="select * from book_register  where student_id='$sid' ";

$run=mysqli_query($con,$q);
$num=mysqli_num_rows($run);



while ($row=mysqli_fetch_array($run))
{

$id=$row['book_id'];

$get_issued_book="select * from books where book_id='$id' ";
$run_get=mysqli_query($con,$get_issued_book);
while ($row=mysqli_fetch_array($run_get))
{
$name=$row['book_name'];
$author=$row['book_author'];
$status=$row['status'];

 echo "
 	 	<tr><td>$id</td><td>$name</td><td>$author</td><td>$status</td><td><a href='return_book.php?book_id=$id' class='btn btn-warning'>return</a></td></tr>
";
}
}?> 
</tbody>
</table>

	
</div>
