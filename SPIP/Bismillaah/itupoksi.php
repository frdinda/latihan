<?php
session_start();
require 'db.php';

	$kodeunit = $_SESSION["KodeUnit"];
	$tugas = $_POST['tugaspokok'];
	$fungsi = $_POST['fungsi'];
	$sql   = "UPDATE unit_organisasi SET Tugas_Pokok = '$tugas', Fungsi = '$fungsi' WHERE Kode_Unit = '$kodeunit'";
	
	if((!strlen(trim($tugas))) || (!strlen(trim($fungsi)))){
		echo "<script>alert('Data Belum Lengkap!')</script>";
		header ('Location:edittupoksi');
	}
	else{
		$result = $conn->query($sql);
		if($result === TRUE){
			echo "Berhasil diinput";
		}
	}
	