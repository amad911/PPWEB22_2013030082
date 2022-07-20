<?php 
	session_start();
	include 'class_db.php';
	$db = new database();

	$username = $_POST['username'];
	$passwd = $_POST['passwd'];

	//echo $username.' '.$passwd;

	$sql = "SELECT * FROM login 
			WHERE username='$username' 
			AND passwd=MD5('$passwd')";
	$jml_data = $db->jumrec($sql);
	if($jml_data>0){
		//echo "login success";
		$dat = $db->datasql($sql);
		$_SESSION['nama'] =  $dat['nama'];
		$_SESSION['institusi'] =  $dat['institusi'];
		header("Location: home.php");
	}
	else{
		//echo "login fail";
		header("Location: login.php?sukses=0");
	}

?>