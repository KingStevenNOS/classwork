<?php
	include 'config.php';
	if(isset($_POST['register'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$enc_password= md5($password);
		
		$sql="INSERT INTO employee";
		$sql.="VALUES('$firstname','$lastname','$username','$enc_password')";
		$result= $connection -> query($sql);
		if($result === TRUE){
			echo '<br> registeration is Successful';
		}else{
			echo '<br> Registration failed';
		}
	}else{
		header('location:register.php');
	}
?>