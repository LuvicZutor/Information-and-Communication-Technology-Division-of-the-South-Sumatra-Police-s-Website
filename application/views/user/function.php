<?php

	$koneksi = mysqli_connect("localhost","root","","layanan");

	if ($koneksi)
	{
		echo "Database MYSQL <b>berhasil</b> dikoneksikan<br>";
	}
	else
	{
		echo "Database  MYSQL <b>gagal</b> dikoneksikan<br>";
	}

	$hasil = mysqli_select_db($koneksi,"layanan");

	if ($hasil)
	{
		echo "Database berhasil dipilih";
	}
	else
	{
		echo "Database gagal dipilih";
	}

?>