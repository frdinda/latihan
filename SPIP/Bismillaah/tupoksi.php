<?php
session_start();
require 'db.php';
require 'etupoksi.php';
?>
<html>
	<head>
		<style>
			<?php include 'tupoksi.css'; ?>
		</style>
		<title>
			TUPOKSI
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
					<a href = "editunit.html">Edit Profil Unit</a>
					<br>
					<br>
					<a href = "login.php">Logout</a>
				</p>
			</div>
			<a href = "dokumen.html" target = "_blank">
				<img src = "b03a46db8235feb811fcae29a3f5b958-document-icon-by-vexels.png" class = "userimg">
			</a>
		</div>
		<div>
			<video autoplay muted loop id = "myVideo">
				<source src = "videoplayback (1).mp4" type = "video/mp4">
				Meh
			</video>
		</div>
		<div class = "tugas">
			<h2>Tugas Pokok</h2>
			<br>
			<br>
			<br>
			<h2>
				<?php
					print_r($_SESSION['TugasPokok']);
				?>
			</h2>
		</div>
		<div class = "fungsi">
			<h2>Fungsi</h2>
			<br>
			<br>
			<br>
			<h2>
				<?php
					print_r($_SESSION['Fungsi']);
				?>
			</h2>
		</div>
		<div class = "tombol">
			<br>
			<br>
			<center>
				<a href = 'edittupoksi.php'>
					<button class="button" name="edit"/>Edit</button>
				</a>
			</center>
			<br>
			<br>
		</div>
	</body>
</html>