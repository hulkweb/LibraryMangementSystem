<div class="container" id="student_login">
    <style type="text/css">
    #login_bar{
      width: 500px;
      background: black;
      padding: 10px;
    
      z-index: 12;
      display: none;
      color: yellow;
    
      border: 1px solid yellow;




    }
#signup{
  display: none;
}
  </style>
 
  <div class="container row" style="padding:20px; ">
 
    <div class="container col-sm-5 m-auto" style="background-color:black;color:yellow ">
        <div class=" text-center text-primary display-4" style="font-family: fantasy;">Student Login</div>
       <div class=" p-3" style="font-family: cursive;font-size: 20px;color:lightblue">
                <form method="post">
                   <div class="form-group p-3">
                         <label>Student Id</label>
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
                     <div style="display: block;text-align: left;">
                               <button class="btn btn-success" onclick="document.getElementById('signup').style.display='block'">Sign up</button>
                     </div>
       </div>
    </div>
  </div>




  <div class="container row" style="padding:20px; " id="signup">
 
    <div class="container col-sm-6 m-auto" style="background-color:black;color:yellow ">
        <div class=" text-center text-warning display-4" style="font-family: fantasy;">student Signup</div>
       <div class=" p-3" style="font-family: cursive;font-size: 20px">
                <form method="post" enctype="multipart/form-data">
                  <div class="form-group p-3">
                         <label>Name</label>
                          <i class="fa fa-user h3" ></i><input type="text" name="name" class="form-control">
                     </div>
                     <div class="form-group p-3">
                         <label>Email</label>
                          <i class="fa fa-envalope h3" ></i><input type="email" name="email" class="form-control">
                     </div>
                     <div class="form-group p-3">
                         <label>Profile pic</label>
                          <i class="fa fa-envalope h3" ></i><input type="file" name="document" class="form-control">
                     </div>
                        <div class="form-group p-3">
                         <label>Password</label>
                         <i class="fa fa-lock h3" ></i><input type="password" name="pass" class="form-control">
                       </div>
                       

                            <div style="display: block;text-align: center;">
                               <button type="submit" name="signup" class="btn btn-primary">Sign up</button>
                            </div>
                       
                 </form>
       </div>
    </div>
  </div>
  <?php 
 
  include 'connect.php';
  if (isset($_POST['signup'])) {
   $name=$_POST['name'];
   $email=$_POST['email'];
    $pass =$_POST['pass'];
    $document=$_FILES['document']['name'];
    $tmp=$_FILES['document']['tmp_name'];
    move_uploaded_file($tmp,"img/".$document);
    
       
     
        $insert="INSERT INTO student (name,email,password,reg_date,profile) VALUES ('$name','$email','$pass',NOW(),'$document')";
        $run=mysqli_query($con,$insert);

       if ($run) {        
echo "<script>alert('Registration  succssfull!')</script>";
        echo "<script>alert('window.open('student_login.php'))</script>";

       }
       else{
echo "<script>alert('registration failed!')</script>";

        
       
       }

  }






    else if (isset($_POST['signin'])) {
  $sid=$_POST['student_id'];

    $pass =$_POST['login_pass'];

$login_query="select *from student where student_id='$sid' and password='$pass'";
$run_query=mysqli_query($con,$login_query);
$num=mysqli_num_rows($run_query);
if ($num>=1) {
    $_SESSION['sid']=$sid;
  
  echo "<script>alert('logged in');</script>";
        echo "<script>window.open('student.php')</script>";

   

}
else{
  echo "<script>alert('login details not appear correct!')</script>";
        echo "<script>alert('window.open('index.php'))</script>";

}
}

  ?>

  </div>