<div class="container-fluid" id="add_books" style="font-family: monospace;">
	<div style="font-size: 25px;color:red;border-bottom: 1px solid orange;padding: 10px"> Add Book</div>
	<form method="post" >
		<div class="form-group" >
			<label style="color: blue;font-size: 20px">Book Name</label>
			<br>
			<input type="text" name="book_name" class="form-control">
		</div>
		<div class="form-group" >
			<label style="color: blue;font-size: 20px">Author Name</label>
			<br>
			<input type="text" name="author_name" class="form-control">
		</div>
		<div class="form-group" >
			<label style="color: blue;font-size: 20px">Class Name</label>
			<br>
			<input type="text" name="class_name" class="form-control">
		</div>
		<div class="form-group">
			<label style="color: blue;font-size: 20px">Creation Date</label>
			<br>
			<input type="text" name="date" value="<?php echo date('l jS  F Y'); ?>" class="form-control">
			
		</div>
		<div style="display: block;text-align: center;"><button class="btn btn-info mt-3 allign-center" name="add">Add</button>
		</div>
		
		
	</form>
</div>
<?php  if (isset($_POST['add'])) {
  $name=$_POST['book_name'];
  $author=$_POST['author_name'];
  $class=$_POST['class_name'];
  $add="insert into books(book_name,reg_date,book_author,class) values('$name',NOW(),'$author','$class')";
  $run=mysqli_query($con,$add);
  if ($run) {
 echo "<script>alert('Book has added succssfully!')</script>";
        echo "<script>alert('window.open('index.php'))</script>";
exit();
  }
  else{echo "<script>alert('subject coudn't add!')</script>";


  }


  }


  ?>