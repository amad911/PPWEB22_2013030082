<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>home</title>
</head>
<body>
<h1>Home</h1>
<h2>
	<?= $_SESSION['nama'] ?>
</h2>
</body>
</html>