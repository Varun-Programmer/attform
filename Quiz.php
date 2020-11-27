<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
	<style>
		.form-control,.custom-select
		{
			width:100%;
		}
	</style>
  </head>
  <body>
    <?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db="student";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password,$db);
		
		// Check connection
		if ($conn->connect_error) 
		{
			die("Connection failed: " . $conn->connect_error);
		}
		//echo "Connected successfully";
		$rollno=@$_POST['roll'];
		$name=@$_POST['name'];
		$section=@$_POST['section'];
		$class=@$_POST['class'];
		$email=@$_POST['email'];
		//echo $rollno." ".$name." ".$section." ".$class." ".$email;
		$sql="INSERT INTO $db(Rollno,Name,Section,Class,Emailid) VALUES('$rollno','$name','$section','$class','$email')";
		if(isset($_POST['roll']))
		{
			if ($conn->query($sql) === TRUE	)
			{	
				echo "Thanks for submission";
			}
			else	
			{
				echo "You have already submitted";
			}
			$conn->close();
		}
	?>
	<form action="" method="post">
		<table align=center cellpadding=10 class="mt-5">
			<tr>
				<td align=center>
					<p class="h1">ATTENDANCE FORM</p>
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="roll" class="form-control" placeholder="Enter roll no." required/>
				</td>
			</tr>
				<td>
					<input type="text" name="name" class="form-control" placeholder="Enter name" required/>
				</td>
			</tr>
			<tr>
				<td>
					<select class="custom-select" name="section" required>
						<option value="">--Select your section--</option>
						<option value="A">A</option>
						<option value="B">B</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<select class="custom-select" name="class" required>
						<option value="">--Select your class--</option>
						<option value="BCA-1st Sem">BCA-1st Sem</option>
						<option value="BCA-2nd Sem">BCA-2nd Sem</option>
						<option value="BCA-3rd Sem">BCA-3rd Sem</option>
						<option value="BCA-4th Sem">BCA-4th Sem</option>
						<option value="BCA-5th Sem">BCA-5th Sem</option>
						<option value="BCA-6th Sem">BCA-6th Sem</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<input type="email" class="form-control" name="email" placeholder="Enter your email" required/>
				</td>
			</tr>
			<tr>
				<td align=center>
					<input type="submit" class="btn btn-success" value="SUBMIT" name="btn"/>
				</td>
			</tr>
		</table>
	</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
 </body>
</html>