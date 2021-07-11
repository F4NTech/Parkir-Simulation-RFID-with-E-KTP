<?php 
//WAKTU
include 'test.php';
date_default_timezone_set('Asia/Jakarta');
global $koneksi;



function INSERT($nama, $nim, $merk, $plat, $jam, $hari)
{
	$sql = mysqli_query($koneksi, "INSERT INTO masuk(nama, nim, merk, plat, tanggal, keluar) VALUES
	('$nama','$nim','$merk', $plat','$jam','$hari')");

	// if (mysql_query($koneksi, $sql)) {
 // 		echo "New record ".$nama[1]." sukses";
 //  		echo " ".$jam;
 //  		//Hidupkan Lampu ijo
	// 	} else {
 // 			echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
	// 	}
}

 ?>