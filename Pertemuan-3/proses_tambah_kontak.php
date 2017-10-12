<?php 

//1. Koneksi 
include("koneksi.php");

//2. Query 
//Data Dari Form
$nama = mysqli_real_escape_string($db, $_POST['nama']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$query = "INSERT INTO kontak (nama, phone, email) 
		  VALUES ('$_POST[nama]', '$_POST[phone]', '$_POST[email')";

mysqli_query($db, $query);

header("Location: index.php");