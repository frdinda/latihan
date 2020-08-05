<?php
session_start();
require 'db.php';
require 'etupoksi.php';
require 'elevelspip.php';
?>
<html>
	<head>
		<style>
			<?php include 'lingkunganpengendalian.css'; ?>
		</style>
		<title>
			Lingkungan Pengendalian
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
			<h1>Lingkungan Pengendalian</h1>
			<h2></h2>
		</div>
		<br>
		<br>
		<div class = "menu">
			<center>
				<ul>
					<li><a href = "integritas.php">Komitmen Terhadap Integritas dan Penegakan Etika</a></li>
					<li><a href = "APIP.html">Efektivitas APIP Terhadap SPIP</a></li>
					<li><a href = "struktur.html">Struktur Tanggung Jawab dan Kewenangan</a></li>
					<li><a href = "kompetensi.html">Komitmen Terhadap Kompetensi</a></li>
					<li><a href = "akuntabilitas.html">Akuntabilitas Individual</a></li>
				</ul>
			</center>
		</div>
	</body>
</html>