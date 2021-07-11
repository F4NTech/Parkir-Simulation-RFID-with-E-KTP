
<?php
$username = "oem";
$password = "";
$db	= "test";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$koneksi = mysqli_connect('localhost', $username, $password, $db);

date_default_timezone_set('Asia/Jakarta');
$today = date("d-m-Yd");
//echo $hariini -> format('D M y, H:i');
$tgl = date('H:i:s a');
// mengecek koneksi
// if (!$koneksi) {
//     die("Koneksi gagal: " . mysqli_connect_error());
// }
// echo "Koneksi berhasil";
// mysqli_close($koneksi);
?>
