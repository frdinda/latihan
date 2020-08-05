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
	else if(($_SESSION["Posisi"] === "1") || ($_SESSION["Posisi"] > "1")){
		header('Location:lingkunganpengendalian.php');
	}

?>