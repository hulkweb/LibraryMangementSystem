
<div class="container-fluid table-responsive "  id="issue_book">
	 <p style="width: 40%;font-size:20px;padding: 10px; color: red;text-align: center;align-self: center; border-bottom: 1px solid blue;background-color: white;opacity: 0.7">Available Books</p>
 <table class='table table-bordered table-hover text-center text-primary bg-light h5'>
 	<thead ><th>Book Id</th><th>Book name</th><th>Author Name</th><th>Status</th><th>Action</th>
 	 </thead>
 	 <tbody>

 	 	<?php 
 	 	include 'connect.php';
		$q="select * from books";

$run=mysqli_query($con,$q);
$num=mysqli_num_rows($run);

while ($row=mysqli_fetch_array($run))
{
$name=$row['book_name'];
$author=$row['book_author'];
$id=$row['book_id'];
$status=$row['status'];

if ($status=='issued') {
	# code...
	 echo "
 	 	<tr><td>$id</td><td>$name</td><td>$author</td><td>$status</td><td><a href='student.php'  class='btn btn-danger'>issued</a></td></tr>
";
}
else{
	echo "
 	 	<tr><td>$id</td><td>$name</td><td>$author</td><td>$status</td><td><a href='student.php?book_id=$id' class='btn btn-success'>Issue</a></td></tr>
";
}

 
}?> 
</tbody>
</table>

	
</div>
