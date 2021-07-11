<?php
//WAKTU
include 'test.php';
date_default_timezone_set('Asia/Jakarta');
//global $koneksi;



function INSERT($nama, $nim, $merk, $plat, $jam, $tanggal, $status)
{

	global $conn;
	$sql = mysqli_query($conn, "INSERT INTO 
								masuk(nama, nim, merk, plat, jam, tanggal, status) 
								VALUES
								('$nama','$nim','$merk','$plat','$jam','$tanggal', '$status')
						");
	var_dump($sql);
	if ($sql) {
	echo "New record " . $nama . " sukses";
	echo " " . $jam;
		//Hidupkan Lampu ijo
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
	}

}

function INSERT_IN($nama, $nim, $merk, $plat, $jam, $tanggal, $status)
{
	global $conn;
	$query = mysqli_query($conn,"SELECT * FROM masuk");

	foreach ($query as $value) {
		$last = $value['id'];
	}
	var_dump($last);

	//cek data sudah keluar
	$query = mysqli_query($conn,"SELECT * FROM masuk WHERE id = '$last -1' AND status = 'keluar'");
	$check = mysqli_num_rows($query);
	 //var_dump($query);
	if (is_null($query)) {
		echo "HARUSKELUAR";

	}else{
		$sql = mysqli_query($conn, "INSERT INTO 
								masuk(nama, nim, merk, plat, jam, tanggal, status) 
								VALUES
								('$nama','$nim','$merk','$plat','$jam','$tanggal', '$status')
						");
	var_dump($sql);
	if ($sql) {
	echo "New record " . $nama . " sukses";
	echo " " . $jam;
		//Hidupkan Lampu ijo
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
	}
	}

}
