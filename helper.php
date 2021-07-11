<?php 
//WAKTU
require 'test.php';
date_default_timezone_set('Asia/Jakarta');
//$koneksi;



function INSERT($nama, $nim, $merk, $plat, $jam, $hari)
{
	global $koneksi;
	$sql = "INSERT INTO masuk(nama, nim, merk, plat, tanggal, keluar) VALUES
	('$nama','$nim','merek', $plat','$jam','$hari')";
	//mysql_query($koneksi, $sql);
	if (mysql_query($koneksi, $sql)) {
 		echo "New record ".$nama[1]." sukses";
  		echo " ".$jam;
  		//Hidupkan Lampu ijo
		} else {
 			echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
		}
}

 ?>