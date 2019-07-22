<html>
	<head>
		<title>Register</title>
		<link rel="icon" type="image/ico" href="https://www.nicepng.com/png/detail/60-605095_who-is-kingstevennos-line-art.png"/>
	</head>
	<style>a {text-decoration: none; } </style>
	<body>
		<form method="POST" action="auth.php">
			<fieldset>
				<legend>User Registeration</legend>
				
				<p>Username: <input required type="text" name="username"/> </p>
				<p>Password: <input required type="password" name="password"/> </p> 
				
				<input type="submit" value="REGISTER" name="register" /><!--Registration button/*--->
				
			</fieldset>
		</form>
		<a href="login.php">LOGIN</a> <!--points to Login page/*--->
	</body>
</html>