<?php
	$connect =mysqli_connect('localhost','root','','ps');
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phno = $_POST['phno'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];
		$message = $_POST['message'];
		$gender = $_POST['gender'];
		$sql = "INSERT INTO res (fname,lname,email,phno,pass,cpass,message,gender) values ('$fname','$lname','$email','$phno','$pass','$cpass','$message','$gender')";
			$query = mysqli_query($connect,$sql);
			
	}



?>