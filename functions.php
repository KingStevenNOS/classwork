<?php
	include "config.php";
	function register($username, $password){
		$password = password_hash($password);
		$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
		$checkuser = "SELECT * FROM user WHERE username = '$username'";
		$result = mysqli_query($connection, $checkuser);
		if(mysqli_num_rows($result)>0){
			echo "This username is already in use";
		}
		else{
			mysqli_query($connection, $sql) or die ("Unable to Register user");
		}
	}
	function login($username, $password){
		$password = password_hash($password);
		$sql = "SELECT * FROM user WHERE username ='$username' AND password = '$password'";
		$result = mysqli_query($connection, $sql);
		if(mysqli_num_rows($result) > 0){
			header("Location: https://www.google.com");
		}
		else{
		echo "Incorrect Username or Password";
		}
?>