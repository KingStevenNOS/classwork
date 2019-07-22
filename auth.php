<?php
	include "functions.php";
	if(isset($_POST['login'])){
		login($_POST['username'], $_POST['password']);
	}
	else if(isset($_POST['register']){
		register($_POST['username'], $_POST['password']);
	}
?>