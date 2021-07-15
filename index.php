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
	    <th>Merk</th>
	    <th>Plat</th>
	    <th>Jam</th>
	    <th>Tanggal</th>
	    <th>Status</th>
	</tr>
	    <?php
	    include 'test.php';
	    $no=1;
	    $data = mysqli_query($conn,"select * from masuk");
	    while ($tampil = mysqli_fetch_array($data)) {
	    	echo "
	    	<tr>
	    		<td>$no</td>
	    		<td>$tampil[nama]</td>
	    		<td>$tampil[nim]</td>
	    		<td>$tampil[merk]</td>
	    		<td>$tampil[plat]</td>
	    		<td>$tampil[jam]</td>
	    		<td>$tampil[tanggal]</td>
	    		<td>$tampil[status]</td>
	    	</tr>";
	    	$no++;
	    }

	    ?>
</table>