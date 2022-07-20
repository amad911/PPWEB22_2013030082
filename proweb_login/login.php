<?php 
	if(isset($_GET['sukses'])){
		if($_GET['sukses']=='0')
			$status = 'LOGIN GAGAL';
	}
	else{
		$status = '';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
</head>
<body>
	<?= $status?>
<h3>Login</h3>
<form action="login_proc.php" method="post">
	username <input type="text" name="username" id="username"><br>
	password <input type="password" name="passwd" id="passwd"><br>
	<input type="submit" name="submit" id="submit" value="Login">
</form>
</body>
</html>