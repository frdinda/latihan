<?php
session_start();
require 'db.php';
require 'etupoksi.php';
require 'elevelspip.php';
?>
<html>
	<head>
		<style>
			<?php include 'pemantauanberkelanjutan.css'; ?>
		</style>
		<title>
			Pemantauan Berkelanjutan
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
			<h1>Pemantauan Berkelanjutan</h1>
			<h2></h2>
		</div>
		<br>
		<br>
		<div id = "centeredmenu">
			<center>
				<ul>
					<li><a href = "pelaksanaankegiatan.html">Pelaksanaan Kegiatan</a></li>
					<li><a href = "hambatankegiatan.html">Hambatan Kegiatan</a></li>
					<li><a href = "saran.html">Saran</a></li>
					<li><a href = "tindaklanjutsaran.html">Tindak Lanjut Atas Saran Periode Sebelumnya</a></li>
				</ul>
			</center>
		</div>
	</body>
</html>