<?php

//1. Koneksi 
$db = mysqli_connect("localhost", "root", "", "kalbis_web");

if(mysqli_connect_errno()){
	//jika gagal tampilkan pesan error
	die(mysqli_connect_error());
}
//2. Querry
$query = "SELECT t_kontak.id,
				 t_kontak.nama,
				 t_kontak.hp
		  FROM t_kontak
		  INNER JOIN t_kategori
		  ON t_kontak.kategori = t_kategori.kategori";
//3. Hasil
$hasil = mysqli_query($db, $query);
?>