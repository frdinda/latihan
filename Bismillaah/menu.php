<?php
session_start();
require 'etupoksi.php';
require 'elevelspip.php';
?>
<html>
	<head>
		<style>
			<?php include 'menupj.css'; ?>
		</style>
		<title>
			Menu Utama
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
					<a href = "inputdataunit.php">Edit Profil Unit</a>
					<br>
					<br>
					<a href = "Logout.php">Logout</a>
				</p>
			</div>
		</div>
		<br>
		<br>
		<div>
			<h1>Sistem Pengendalian Intern Pemerintah</h1>
			<h2>Level Pelaksanaan SPIP : <?php print_r($_SESSION['Total_Persentase']); ?> %</h2>
		</div>
		<br>
		<br>
		<div class = "menu">
			<center>
				<ul>
					<li><a href = "verifytupoksi.php">TUPOKSI</a></li>
					<li><a href = "verifybobotnilai.php">Bobot Nilai</a></li>
					<li><a href = "verifylingkunganpengendalian.php">Lingkungan Pengendalian</a></li>
					<li><a href = "verifypenilaianrisiko.php">Penilaian Risiko</a></li>
					<li><a href = "verifykegiatanpengendalian.php">Kegiatan Pengendalian</a></li>
					<li><a href = "verifyinfokom.php">Informasi dan Komunikasi</a></li>
					<li><a href = "verifypemantauanberkelanjutan.php">Pemantauan Berkelanjutan</a></li>
					<li><a href = "dokumen.php">Dokumen</a></li>
					<li><a href = "tentangspip.php">Tentang SPIP</a></li>
				</ul>
			</center>
		</div>
	</body>
</html>