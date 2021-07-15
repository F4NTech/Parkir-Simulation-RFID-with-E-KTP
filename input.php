<?php
//WAKTU
include 'test.php';
date_default_timezone_set('Asia/Jakarta');
//global $koneksi;
$kartu1 = array(1=> "FARHAN", "1820401003", "Avanza Keren", "BL 1234 GG", "masuk", "keluar" );
$kartu2 = array(1=> "JULIAN", "1820401000", "Kijang Keren", "BL 1234 DL", "masuk", "keluar" );
$kartu3 = array(1=> "Ibnu", "1820401025", "Pengen BMW", "BL 1234 XI", "masuk", "keluar" );
$kartu4 = array(1=> "IKRAM", "1820401011", "Motor aja", "BL 1234 HM", "masuk", "keluar" );
$kartu5 = array(1=> "Kharazzi Mukhlisin", "1820401006", "Skate Professional", "BL 1234 XX", "masuk", "keluar" );


function INPUT1()
{
	global $conn;
	$query = mysqli_query($conn,"SELECT * FROM masuk");

	foreach ($query as $value) {
		$last = $value['id'];
	}
	for ($i=0; $i <= sizeof($query); $i++) { 
		if (mysqli_query($conn,"SELECT * FROM masuk WHERE id = $i")) {
			# code...
		}
	}
	// $query = mysqli_query($conn,"SELECT * FROM masuk WHERE id = $last AND status = 'masuk'");
	// $check = mysqli_fetch_row($query);
	
	// if ($check) {
	// 	echo $check[7];
	// 	echo "Status berada didalam";


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
