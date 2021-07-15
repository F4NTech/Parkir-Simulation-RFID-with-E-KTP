<?php
//WAKTU
include 'test.php';
date_default_timezone_set('Asia/Jakarta');
//global $conn;



function INSERT($nama, $nim, $merk, $plat, $jam, $tanggal, $status)
{

	global $conn;

	//cek data sudah keluar
	$query = mysqli_query($conn, "SELECT * FROM masuk WHERE nama='$nama' ORDER BY id DESC LIMIT 1");
	$check = mysqli_fetch_assoc($query);


	if ($check["status"] == "masuk") {
		echo "Status absen hari ini";
	} else {
		$sql = mysqli_query($conn, "INSERT INTO 
			masuk(nama, nim, merk, plat, jam, tanggal, status) 
			VALUES
			('$kartu','$nim','$merk','$plat','$jam','$tanggal', '$status')
						");
		var_dump($sql);
		if ($sql) {
			echo "New record " . $nama . " sukses";
			echo " " . $jam;
			//Hidupkan Lampu ijo
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
}

function INSERT_IN($nama, $nim, $merk, $plat, $jam, $tanggal, $status)
{
	global $conn;

	//cek data sudah keluar
	$query = mysqli_query($conn, "SELECT * FROM masuk WHERE nim='$nim' ORDER BY id DESC LIMIT 1");
	$check = mysqli_fetch_assoc($query);

	if ($check["status"] == "masuk") {
		echo "Tidak bisa masuk ! Status sudah berada didalam.";
	} else {
		$sql = mysqli_query($conn, "INSERT INTO 
			masuk(nama, nim, merk, plat, jam, tanggal, status) 
			VALUES('$nama','$nim','$merk','$plat','$jam','$tanggal', '$status')");
		var_dump($sql);
		if ($sql) {
			echo "New record " . $nama . " sukses";
			echo " " . $jam;
			//Hidupkan Lampu ijo
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
}

function INSERT_OUT($nama, $nim, $merk, $plat, $jam, $tanggal, $status)
{
	global $conn;

	//cek data sudah keluar
	$query = mysqli_query($conn, "SELECT * FROM masuk WHERE nim='$nim' ORDER BY id DESC LIMIT 1");
	$check = mysqli_fetch_assoc($query);

	if ($check["status"] == "keluar") {
		echo "Tidak bisa Keluar. Status Sudah Keluar sebelumnya !";
	} else {
		$sql = mysqli_query($conn, "INSERT INTO 
			masuk(nama, nim, merk, plat, jam, tanggal, status) 
			VALUES('$nama','$nim','$merk','$plat','$jam','$tanggal', '$status')");
		var_dump($sql);
		if ($sql) {
			echo "Detected  " . $nama . " sukses KELUAR";
			echo " " . $jam;
			//Hidupkan Lampu ijo
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
}
