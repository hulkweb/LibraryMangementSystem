<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UAC-compatible" content="ie=edge">
	<title></title>
</head>
<body>
<?php 
include 'connect.php';
session_start();
$sid=$_SESSION['sid'] ;


$get_st="select *from student where student_id='$sid'";
$run_st=mysqli_query($con,$get_st) ;
$row=mysqli_fetch_array($run_st);
$name=$row['name'];
$id=$row['student_id'];
$profile=$row['profile'];
?>


     <div class="container-fluid">
     	 <header>
   	  	     <div class="head-text p-2">Library Management Project</div>
   	  	  
   	    </header>
   	    <div class="container-fluid p-2" >
   	        <div class="row ">
   	    	   <div class="col-sm-3 ">
   	    	       <div style="text-align: center;padding: 10px;">
   	    	   	       <img src="<?php echo 'img/'.$profile;  ?>" width="100px" height="auto" style="border-radius: 50%">
   	    	   	    </div>
   	    		   <div class="card-header h3">Name :<span style="text-transform: uppercase;"><?php echo $name;  ?></span></div>
   	    		   <div class="card-header h3">Student Id :<span><?php echo $id;  ?></span></div>
   	    		   <div>	<a href="logout.php" class="btn btn-danger m-2">logout</a> </div>
   	    		   
   	    	  </div>
   	          <div class="col-sm-8" style="background-color: rgba(0,255,100,0.3)">
   	          	 <div>
   	    			<ul style="display: flex;">
   	    				<li><button onclick="issue_book()" class="btn btn-info ">Issue a Book</button></li>
   	    				<li><button onclick="issued_book()" class="btn btn-info ">Issued Books</button></li>
   	    				<li><button onclick="fines()" class="btn btn-info "> Fines</button></li>
   	    				
   	    			</ul>
   	    		  </div>
   	          	      
   	    	  	<?php include 'issued_book.php';
   	    	  	     include 'issue_book.php';
   	    	  	       include 'fines.php';
   	    	  	       include 'issue_a_book.php';
   	    	  	 ?>
   	    	  </div>
   	      </div>
     	</div>
     </div>
<script src="index.js"></script>
<script type="text/javascript">
	function issue_book() {
	// body...
	
	
		document.getElementById('issue_book').style.display='block';
		
		document.getElementById('issued_book').style.display='none';

}
function issued_book() {
	// body...
	  document.getElementById('issue_a_book').style.display='none';
	
	
		document.getElementById('issued_book').style.display='block';
	
		document.getElementById('issue_book').style.display='none';

}
</script>
</body>
</html>