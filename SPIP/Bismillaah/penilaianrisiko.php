<?php
session_start();
require 'db.php';
require 'etupoksi.php';
require 'elevelspip.php';
?>
<html>
	<head>
		<style>
			<?php include 'penilaianrisiko.css'; ?>
		</style>
		<title>
			Penilaian Risiko
		</title>
	</head>
	<body>
		<div class = "user">
			<img src = "person.png" class = "userimg">
			<div class = "user-content" style = "left:0;">
				<br>
				<p>
					<?php
						print_r($_SESSION['NamaUnit']);
					?>
					<br>
					<br>
				</p>
				<p>
					<a href = "menu.php">Halaman Utama</a>
					<br>
					<br>
					<a href = "inputdataunit.php">Edit Profil Unit</a>
					<br>
					<br>
					<a href = "logout.php">Logout</a>
				</p>
			</div>
			<a  href = "dokumen.html" target = "_blank">
				<img src = "b03a46db8235feb811fcae29a3f5b958-document-icon-by-vexels.png" class = "userimg">
			</a>
		</div>
		<br>
		<br>
		<div>
			<h1>Penilaian Risiko</h1>
			<h2></h2>
		</div>
		<br>
		<br>
		<div id = "centeredmenu">
			<center>
				<ul>
					<li><a href = "tambahkegiatanpokok.php">Identifikasi Kegiatan Pokok</a></li>
					<li><a href = "prosesbisnis.php">Proses Bisnis</a></li>
					<li><a href = "registerrisiko.php">Register Risiko</a></li>
					<li><a href = "matriksanalisis.php">Matriks Analisis Risiko</a></li>
				</ul>
			</center>
		</div>
	</body>
</html>