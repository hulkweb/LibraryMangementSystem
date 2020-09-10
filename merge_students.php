
     
<div class="container-fluid" id="merge_students" >
	
<p style="width: 40%;font-size:30px;padding: 10px; color: red;text-align: center;align-self: center; border-bottom: 1px solid blue;">Students</p>
<div class="table-reponsive"> 
 <table class='table table-bordered  text-center text-primary bg-white h5'>
    <thead><th>Student  id</th><th> Name</th><th>Email</th>
     </thead>
     <tbody>
	<?php 
		$q="select * from student";

$run=mysqli_query($con,$q);


while ($row=mysqli_fetch_array($run))
{
  
     $name=$row['name'];
     $id=$row['student_id'];
    $email=$row['email'];
    $pass =$row['password'];
    
       
     


 ?>

 	<?php echo "
 	 	<tr><td>$id</td>
 	 	<td>$name</td>
 	 	 	 	<td>$email</td>
 	 	
 	
 	 

 	 	</tr>
";
}

?> </tbody></table>
</div>
</div>