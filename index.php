<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UAC-compatible" content="ie=edge">
 <link rel="stylesheet" href="index.css">
</head>
<body>
   <div class="container">
   	  <header>
   	  	<div class="head-text">Library Management Project</div>
   	  	<div id="timer"></div>
   	  </header>
		
   	  <main class="container bg-light">
          <table class="table">
          	<tr>
          		<td align="center">
          			   <button class="btn btn-primary btn-lg" onclick="student_login()"><i class="fa fa-person"></i>Student Login</button>
          		</td>
          		<td  align="center">
          	   <button class="btn btn-warning btn-lg" onclick="librarian()"><i class="fa fa-person"></i>Libraian Login</button>
          		</td>
          		<td  align="center">
          			<a href="index.php" class="btn btn-success btn-lg"><i class="fa fa-person"></i>Staff Login</a>
          		</td>
          	</tr>
          </table>   	  	
          <div class="login-area">
   	  	   <?php 
            include 'librarian_login.php';
            include 'student_login.php';
          ?>
   	       </div>
   	  </main>

   </div>
   <script src="index.js"></script>
   <script type="text/javascript">
     function student_login() {
  // body...
  
  
    document.getElementById('student_login').style.display='block';
  
    document.getElementById('librarian').style.display='none';

}
function librarian() {
  // body...
  
  
    document.getElementById('student_login').style.display='none';
  
    document.getElementById('librarian').style.display='block';

}

   </script>
</body>
</html>