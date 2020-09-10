<?php 
include 'connect.php';
session_start();
#$lid=$_SESSION['lid'];



$get_lib="select *from librarian";
$run_lib=mysqli_query($con,$get_lib) ;
$row=mysqli_fetch_array($run_lib);
$name=$row['name'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UAC-compatible" content="ie=edge">

</head>
<body>
     
     <div class="container-fluid">
     	 <header>
   	  	     <div class="head-text p-2">Library Management Project</div>
   	  	  
   	    </header>
   	    <div class="container-fluid" >
   	        <div class="row m-0 w-100">
   	    	   <div class="col-sm-3">
   	    		   <div class="card-header h3">Name :<span><?php echo $name;  ?></span></div>
   	    		   <div>	<a href="logout.php" class="btn btn-danger m-2">logout</a> </div>
   	    		   <div>
   	    			<ul>
   	    				<li><button onclick="home_screen()" class="btn btn-info btn-lg">Home</button></li>
   	    				<li><button onclick="add_book()" class="btn btn-info btn-lg">Add books</button></li>
   	    				<li><button onclick="merge_book()" class="btn btn-info btn-lg"> Merge books</button></li>
   	    				<li><button onclick="merge_students()" class="btn btn-info btn-lg"> Merge students</button></li>

   	    			</ul>
   	    		  </div>
   	    	
   	    	  </div>
   	          <div class="col-sm-8" style="background-color: rgba(0,255,100,0.3)">
   	          	
   	          	      <div class="container-fluid" id="home_screen">
   	          	      	 <?php  
   	          	      	 $get_books="select * from books";
   	          	      	 $run_books=mysqli_query($con,$get_books);
   	          	      	 $num_books=mysqli_num_rows($run_books);


   	          	      	  	 $get_students="select * from student";
   	          	      	 $run_student=mysqli_query($con,$get_students);
   	          	      	 $num_students=mysqli_num_rows($run_student);
   	          	      	 ?>
                          <table class="table mt-2">
  	                         <tr>
  	                         	<td style="background-color: lightblue;">
  	                         		<div style="min-height: 150px;color:black;padding: 10px;text-align: center;">
  	                         		   <p style="padding: 10px;font-size: 25px;color: red">TOTAL BOOKS</p>
  	                         		   <p id="students" style="padding: 5px;font-size: 30px;color: black"><?php echo $num_books; ?></p>
  	                         	    </div>
  	                            </td>
  	                         	<td style="background-color:lightgreen;">
  	                         		
  	                         		<div style="min-height: 150px;color:black;padding: 10px;text-align: center;">
  	                         		   <p style="padding: 10px;font-size: 25px;color: red">TOTAL STUDENTS</p>
  	                         		   <p id="students" style="padding: 5px;font-size:30px;color: black"><?php echo $num_students; ?></p>
  	                         	    </div>
  	                         	    
  	                         	</td>
  	                         </tr>
                           </table>

   	          	      </div>
   	    	  	<?php include 'add_books.php';
   	    	  	     include 'merge_books.php';
   	    	  	         include 'merge_students.php';
   	    	  	 ?>
   	    	  </div>
   	      </div>
     	</div>
     </div>
<script src="index.js"></script>
</body>
</html>