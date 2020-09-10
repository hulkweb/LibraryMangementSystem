<div class="container-fluid row" style="padding:20px; " id="librarian">
 
		<div class="container col-sm-5 m-auto" style="background-color:black;color:yellow ">
				<div class=" text-center text-warning display-4" style="font-family: fantasy;">lIB Login</div>
			 <div class=" p-3" style="font-family: cursive;font-size: 20px">
                <form method="post">
                	 <div class="form-group p-3">
                         <label>User Id</label>
                         <i class="fa fa-lock h3" ></i><input type="text" name="student_id" class="form-control">
                       </div>
                        <div class="form-group p-3">
                         <label>Password</label>
                         <i class="fa fa-lock h3" ></i><input type="password" name="login_pass" class="form-control">
                       </div>
                       

                            <div style="display: block;text-align: center;">
                               <button type="submit" name="signin" class="btn btn-primary">Sign in</button>
                            </div>
                        
                       
                 </form>
                           </div>
		</div>
	</div>
<?php 
session_start();
include 'connect.php';

if (isset($_POST['signin'])) {
  $sid=$_POST['student_id'];

    $pass =$_POST['login_pass'];

$login_query="select *from librarian where id='$sid' and password='$pass'";
$run_query=mysqli_query($con,$login_query);
$num=mysqli_num_rows($run_query);
if ($num>=1) {
    $_SESSION['lid']=$sid;
  
  echo "<script>alert('logged in');</script>";
        echo "<script>window.open('librarian.php')</script>";

   

}
else{
  echo "<script>alert('login details not appear correct!')</script>";
        echo "<script>alert('window.open('index.php'))</script>";

}
}

  ?>