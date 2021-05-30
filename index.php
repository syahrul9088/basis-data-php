<!DOCTYPE html>
<html lang="en">
<head>
    <title>TABLE</title>
    <style>
        table, th, td {
  			border: 1px solid black;
		}
    </style>
</head>
<body>
<tbody>
<table style="width:20%">
    <h1>TABEL PASIEN</h1>
    <tr>
        <th>No ID</th>
        <th>Nama Pasien</th>
        <th>Keterangan</th>
    </tr>
	<?php
	    include('koneksi.php'); //memanggil file koneksi
		$datas = mysqli_query($koneksi, "select * from pasien") or die(mysqli_error($koneksi));
	    //script untuk menampilkan data barang

		$no = 1;//untuk pengurutan nomor

		//melakukan perulangan
		while($row = mysqli_fetch_assoc($datas)) {
	?>	

	<tr>
        <td><?= $no; ?></td>
        <td><?= $row['nama'];?></td>
        <td><?= $row['keterangan']; ?></td>
	</tr>
	<?php $no++; } ?>
</table>

<table style="width:20%">
    <h1>TABEL TAGIHAN</h1>
    <tr>
        <th>No ID</th>
        <th>Nama Pasien</th>
        <th>Tagihan</th>
    </tr>
	<?php
	    include('koneksi.php'); //memanggil file koneksi
		$datas = mysqli_query($koneksi, "SELECT tagihan.id, pasien.nama, tagihan.jml_bayar FROM tagihan INNER JOIN pasien ON pasien.id = tagihan.id_pasien ") or die(mysqli_error($koneksi));
	    //script untuk menampilkan data barang

		$no = 1;//untuk pengurutan nomor

		//melakukan perulangan
		while($row = mysqli_fetch_assoc($datas)) {
	?>	

	<tr>
        <td><?= $no; ?></td>
        <td><?= $row['nama'];?></td>
        <td><?= $row['jml_bayar']; ?></td>
	</tr>
	<?php $no++; } ?>
</table>

<table style="width:20%">
    <h1>TABEL DOKTER</h1>
    <tr>
        <th>No ID</th>
        <th>Nama Dokter</th>
    </tr>
	<?php
	    include('koneksi.php'); //memanggil file koneksi
		$datas = mysqli_query($koneksi, "select * from dokter") or die(mysqli_error($koneksi));
	    //script untuk menampilkan data barang

		$no = 1;//untuk pengurutan nomor

		//melakukan perulangan
		while($row = mysqli_fetch_assoc($datas)) {
	?>	

	<tr>
        <td><?= $no; ?></td>
        <td><?= $row['nama'];?></td>
	</tr>
	<?php $no++; } ?>
</table>

</tbody>
</body>
</html>
