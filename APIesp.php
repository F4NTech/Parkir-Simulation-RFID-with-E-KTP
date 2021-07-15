<?php

include 'input.php';

date_default_timezone_set('Asia/Jakarta');
$tanggal = date("d-m-Yd");
$jam = date('H:i:s a');
//DATA KARTU
$nama = array(1 => "FARHAN", "JULIAN", "Ibnu", "IKRAM", "Kharazzi");
$nim = array(1 => "1820401003", "1820401000", "1820401025", "18204011", "1820401006");
$merk = array(1 => "Avanza", "Kijang", "BMW", "Motor Aza", "Skate");
$plat = array(1 => "BL 1234 GG", "BL 1234 DL", "BL 1234 XI", "BL 1234 HM", "BL 1234 XX");
$status = array(1 => "masuk", "keluar");

#===== MASUK =====#
//Print Kelompok A
if ($nama[3] = "Ibnu") {	// data_rfid1 = krtu 1
	AUTOINSERT($nama[3], $nim[3], $merk[3], $plat[3], $jam, $tanggal, $status[2]);
}





//#========= Keluar ==========#
// //butuh loop pengecekan per index nama
// $query = "SELECT * FROM masuk WHERE nama = '".$nama[1]."'";
//  $row = $koneksi->query($query);
//  if($row->num_rows  > 0){
//     echo "Nama Terdaftar";
//     //Keluar
//     $sql = "INSERT INTO masuk (nama, nim, plat, tanggal, keluar) VALUES 
// 	('$nama[1]','$nim[1]','$plat[1]','$jam', '$today')";
// 	if ($row > 0)) {
// 		if (condition) {
// 			# code...
// 		}
//  		echo "Kartu AA Keluar";
//   		echo nl2br("\n ".$jam);
//   		//Hidupkan Lampu ijo
// 		} else {
//  			echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
// 		}
//  }else{
//  	echo "Belum Terdaftar";
//  	//mendaftar
 	
//  }
//echo $sqldata;
