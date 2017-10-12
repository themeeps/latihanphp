<?php 
//1. Koneksi
include ("koneksi.php");

//Data dari Form
$id = $_POST['id'];
$nama = mysqli_real_escape_string($db, $_POST['nama']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$email = mysqli_real_escape_string($db, $_POST['email']);
//2. Query 
$query = "UPDATE kontak 
		  SET nama = '$ket',
			  phone = '$phone',
			  email = '$email'
		  WHERE id=$id";
mysqli_query($db, $query);

header('Location: kontak.php');