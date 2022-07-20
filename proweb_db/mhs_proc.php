<?php 
include "con_db.php";

//tambah data
if(isset($_POST['proses']) && $_POST['proses']=='SIMPAN'){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$prodi_id = $_POST['prodi_id'];
	$fak_id = $_POST['fak_id'];
	$alamat = $_POST['alamat'];
	$kab = $_POST['kab'];
	

	$sql = "INSERT INTO mhs 
			(id,nama,prodi_id,kab,alamat,fak_id)
			VALUES 
			('$id','$nama','$prodi_id','$kab','$alamat','$fak_id')";
	if(!$res = $conn->query($sql))
		echo $sql;
	else
		header("Location: mhs.php");
}

//update data
if(isset($_POST['proses']) && $_POST['proses']=='PERBAHARUI'){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$prodi_id = $_POST['prodi_id'];
	$alamat = $_POST['alamat'];
	$kab = $_POST['kab'];

	

	$sql = "UPDATE mhs 
			SET id='$id',nama='$nama', prodi_id='$prodi_id',
			alamat='$alamat',kab='$kab'
		-- WHERE id='$id'";
	if(!$res = $conn->query($sql))
		echo $sql;
	else
		header("Location: mhs.php");
}

//hapus data
if(isset($_POST['proses']) && $_POST['proses']=='HAPUS'){
	echo "hapus";
	$id = $_POST['id'];
	$sql = "DELETE FROM mhs
			WHERE id='$id'";
	if(!$res = $conn->query($sql))
		echo $sql;
	else
		header("Location: mhs.php");
}
?>