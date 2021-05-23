<?php
//include file config.php
include('koneksi.php');

//jika benar mendapatkan GET id dari URL
if(isset($_GET['Kode_Kaos'])){
	//membuat variabel $id yang menyimpan nilai dari $_GET['id']
	$Kode_Kaos = $_GET['Kode_Kaos'];

	//melakukan query ke database, dengan cara SELECT data yang memiliki id yang sama dengan variabel $id
	$cek = mysqli_query($koneksi, "SELECT * FROM tabel_kaos WHERE Kode_Kaos='$Kode_Kaos'") or die(mysqli_error($koneksi));

	//jika query menghasilkan nilai > 0 maka eksekusi script di bawah
	if(mysqli_num_rows($cek) > 0){
		//query ke database DELETE untuk menghapus data dengan kondisi id=$id
		$del = mysqli_query($koneksi, "DELETE FROM tabel_kaos WHERE Kode_Kaos='$Kode_Kaos'") or die(mysqli_error($koneksi));
		if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="index.php?page=tampil_kaos";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="index.php?page=tampil_kaos";</script>';
		}
	}else{
		echo '<script>alert("Kode Kaos tidak ditemukan di database."); document.location="index.php?page=tampil_kaos";</script>';
	}
}else{
	echo '<script>alert("Kode Kaos tidak ditemukan di database."); document.location="index.php?page=tampil_kaos";</script>';
}

?>
