<?php
include "class_db.php";
$db = new database();

$id = $_POST['id'];
$sql = "SELECT * FROM mhs WHERE id='$id'";
if($db->jumrec($sql)>0){
	$dat = $db->datasql($sql);
	echo $dat['nama'].' '.$dat['prodi_id'];
}
else{
	echo "Data tidak ditemukan";
}
?>