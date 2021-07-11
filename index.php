<h2>Data Absensi</h2>
<h4>Data Masuk hari</h4>
<?php 
include 'test.php';
 $hariini;
 ?>
<table border="1">
	<tr>
		<th>No</th>
	    <th>Nama</th>
	    <th>Nim</th>
	    <th>Plat</th>
	    <th>jam</th>
	</tr>
	    <?php
	    include 'test.php';
	    $no=1;
	    $data = mysqli_query($koneksi,"select * from masuk");
	    while ($tampil = mysqli_fetch_array($data)) {
	    	echo "
	    	<tr>
	    		<td>$no</td>
	    		<td>$tampil[nama]</td>
	    		<td>$tampil[nim]</td>
	    		<td>$tampil[plat]</td>
	    		<td>$tampil[tanggal]</td>
	    	</tr>";
	    	$no++;
	    }

	    ?>
</table>