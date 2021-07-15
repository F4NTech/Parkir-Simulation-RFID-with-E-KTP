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
	//var_dump($last);

	//cek data sudah keluar
	$query = mysqli_query($conn,"SELECT * FROM masuk WHERE id = $last AND status = 'keluar'");
	$check = mysqli_fetch_row($query);
	
	if (!$check) {
		//echo $check[7];
		echo "Status berada didalam";


	}else{
		$sql = mysqli_query($conn, "INSERT INTO 
								masuk(nama, nim, merk, plat, jam, tanggal, status) 
								VALUES
								('$nama','$nim','$merk','$plat','$jam','$tanggal', '$status')
						");
	//var_dump($sql);
	if ($sql) {
	echo "New record " . $nama . " sukses";
	echo " " . $jam;
		//Hidupkan Lampu ijo
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
	}
	}

}

function INSERT_OUT($nama, $nim, $merk, $plat, $jam, $tanggal, $status)
{
	global $conn;
	$query = mysqli_query($conn,"SELECT * FROM masuk");

	foreach ($query as $value) {
		$last = $value['id'];
	}
	var_dump($last);

	//cek data sudah keluar
	$query = mysqli_query($conn,"SELECT * FROM masuk WHERE id = $last AND status = 'masuk' ");
	//var_dump($query);
	$check = mysqli_fetch_row($query);
	echo $check;
	if (!$check) {
		echo "Status tidak ada didalam";
		//echo $last;


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


function INSERT_NEW($nama, $nim, $merk, $plat, $jam, $tanggal, $status)
{
	global $conn;
	$query = mysqli_query($conn,"SELECT * FROM masuk");

	foreach ($query as $value) {
		$last = $value['id'];
	}
	var_dump($last);

	//cek data sudah keluar
	$query = mysqli_query($conn,"SELECT * FROM masuk WHERE id = $last AND status = 'masuk'");
	$check = mysqli_fetch_row($query);
	echo $check[7];
	 if ($check[7] == 'keluar') {
		echo $check[7];
		echo "	TRUE";
	}else{
		echo "FALSE";
	}
	// 	//echo $last;


	// }else{
	// 	$sql = mysqli_query($conn, "INSERT INTO 
	// 							masuk(nama, nim, merk, plat, jam, tanggal, status) 
	// 							VALUES
	// 							('$nama','$nim','$merk','$plat','$jam','$tanggal', '$status')
	// 					");
	// //var_dump($sql);
	// if ($sql) {
	// echo "New record " . $nama . " sukses";
	// echo " " . $jam;
	// 	//Hidupkan Lampu ijo
	// } else {
	// 	echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
	// }
	// }

}



function ResetAll()
{
	global $conn;
	mysqli_query($conn,'TRUNCATE TABLE masuk;');
}