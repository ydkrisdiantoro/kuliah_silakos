<?php
include("konekin.php");

if (isset($_POST['signup'])) {
	//ambil data dari formulir
	$fullname = $_POST['fullname'];
	$address = $_POST['address'];
	$phone_number = $_POST['phone_number'];
	$email = $_POST['email'];
	$guarantor_phone_number = $_POST['guarantor_phone_number'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id_wisma = $_POST['id_wisma'];
	$id_kamar = $_POST['id_kamar'];
	$tanggal_masuk = $_POST['tanggal_masuk'];
	$tanggal_keluar = $_POST['tanggal_keluar'];
 
	//buat query
	$sql1 = "insert into login 
	(username,password)
	value ('$username','$password')";
	$login = mysqli_query($db, $sql1);
	$sql2 = mysqli_query($db, "insert into pengguna
		(alamat,nama,cp_wali,cp,id_kamar,id_pengguna)
		value('$address','$fullname','$guarantor_phone_number','$phone_number','$id_kamar','$username')");
	$sql3 = mysqli_query($db, "insert into sewa
		(id_kamar,id_pengguna,tgl_masuk,tgl_keluar)
		value('$id_kamar','$username','$tanggal_masuk','$tanggal_keluar')");

	//apakah query simpan berhasil?
	if ($login && $sql2 && $sql3) {
		//jika berhasil, alihkan ke index.php dengan status=sukses
		header('Location: index.php?status=sukses');
	} else{
		//jika gagal, alihkan ke index.php dengan status=gagal
		header('Location: signingup.php?status=daftar_lagi');
	}
} else{
	die("Access denied...");
}

?>