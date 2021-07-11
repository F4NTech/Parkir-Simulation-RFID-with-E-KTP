<?php

include 'test.php';
date_default_timezone_set('Asia/Jakarta');
$jam = date('H:i:s a');
$nama = array(1 => "Kartu AA","Kartu BB","Kartu CC","Kartu DD","Kartu EE");
$nim = array( 1 => "1234 A","1234 B","1234 C","1234 D","1234 E");
$plat = array( 1 => "BL 1234 A","BL 1234 B","BL 1234 C","BL 1234 D","BL 1234 E");
#===== MASUK =====#
	//Print Kelompok A
if ($nama[3] == $nama[1]) {	// data_rfid1 = krtu 1
	$sql = "INSERT INTO masuk (nama, nim, plat, tanggal) VALUES 
	('$nama[1]','$nim[1]','$plat[1]','$jam')";
	if (mysqli_query($koneksi, $sql)) {
 		echo "New record 1 sukses";
  		echo " ".$jam;
  		//Hidupkan Lampu ijo
		} else {
 			echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
		}
}
	// PRINT Kelmpok B
if ($nama[4] == $nama[2]) {	// data_rfid1 = kartu 2
	$sql = "INSERT INTO masuk (nama, nim, plat, tanggal) VALUES 
	('$nama[2]','$nim[2]','$plat[2]','$jam')";
	if (mysqli_query($koneksi, $sql)) {
 		echo "New record 2 sukses";
  		echo " ".$jam;
		} else {
 			echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
		}
}

//#========= Keluar ==========#
//butuh loop pengecekan per index nama
$query = "SELECT * FROM masuk WHERE nama = '".$nama[1]."'";
 $row = $koneksi->query($query);
 if($row->num_rows  > 0){
    echo "Nama Terdaftar";
    //Keluar
    $sql = "INSERT INTO masuk (nama, nim, plat, tanggal, keluar) VALUES 
	('$nama[1]','$nim[1]','$plat[1]','$jam', '$today')";
	if (mysqli_query($koneksi, $sql)) {
		if (condition) {
			# code...
		}
 		echo "Kartu AA Keluar";
  		echo nl2br("\n ".$jam);
  		//Hidupkan Lampu ijo
		} else {
 			echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
		}
 }else{
 	echo "Belum Terdaftar";
 	//mendaftar
 	
 }
//echo $sqldata;


?>