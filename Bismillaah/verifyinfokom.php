<?php
session_start();
require 'db.php';
require 'elevelspip.php';

	if(($_SESSION["TugasPokok"] === NULL) || ($_SESSION["Fungsi"] === NULL)){
		echo "<script>alert('Anda Belum Menginput TUPOKSI!'); window.location.replace('menu.php');</script>";
	}
	else if(($_SESSION["Posisi"] === "MEH")){
		echo "<script>alert('Anda Belum Menginput Bobot Nilai!'); window.location.replace('menu.php');</script>";
	}
	else if(($_SESSION["Posisi"] < "4")){
		if($_SESSION["Posisi"] === "1"){
			$posisi = "Anda Masih Berada Pada Lingkungan Pengendalian";
		} else if($_SESSION["Posisi"] === "2"){
			$posisi = "Anda Masih Berada Pada Penilaian Risiko";
		} else if($_SESSION["Posisi"] === "3"){
			$posisi = "Anda Masih Berada Pada Kegiatan Pengendalian";
		} else if($_SESSION["Posisi"] === "4"){
			$posisi = "Anda Masih Berada Pada Informasi dan Komunikasi";
		} else if($_SESSION["Posisi"] === "5"){
			$posisi = "Anda Masih Berada Pada Pemantauan Berkelanjutan";
		}
		echo "<script>alert('$posisi'); window.location.replace('menu.php');</script>";
	}else{
		header('Location:infokom.php');
	}

?>