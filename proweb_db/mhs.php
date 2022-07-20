<?php 
include "con_db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mhs - List</title>
</head>
<body>
<h2>Data Mahasiswa</h2>
<a href="mhs_add.php">TAMBAH</a> <a href="mhs.php">LIHAT</a>
<br>
<?php
	$sql = "SELECT  MH.*, P.id as p_id, P.nama as p_nama, F.id as f_id, F.nama  as f_nama 
			FROM mhs MH 
			JOIN prodi P ON MH.prodi_id=P.id 
			JOIN fakultas F ON MH.fak_id=F.id";
	$res = $conn->query($sql);
	//menampilakn jumlahhasil query
	$jml_data = $res->num_rows;
	echo "Ditemukan $jml_data data";
	echo "<table border='1' width='100%'>";
	echo "	<thead>
				<tr>
					<td width='5%'>No.</td>
					<td width='5%'>Act</td>
					<td width='10%'>ID</td>
					<td width='15%'>Nama</td>
					<td width='20%'>Prodi</td>
					<td width='20%'>fakultas</td>
					<td>Alamat</td>
					<td width='20%'>Kab</td>
					
				</tr>
			</thead
			<tbody>";
	$i = 0;
	while($rows = $res->fetch_array(MYSQLI_BOTH)){
		$i++;
		echo "<tr>
				<td align='center'>$i</td>
				<td align='center'>
					<a href='mhs_detail.php?id=".$rows['id']."'>DETIL</a>
				</td>
				<td>".$rows['id']."</td>
				<td>".$rows['nama']."</td>
				<td>".$rows['p_nama']."</td>
				<td>".$rows['f_nama']."</td>
				<td>".$rows['alamat']."</td>
				<td>".$rows['kab']."</td>
				
			</tr>";
	}
	echo "	</tbody>
		</table>"
?>
</body>
</html>