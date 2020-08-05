<?php
session_start();
require 'db.php';
require 'etupoksi.php';
?>
<html>
	<head>
		<style>
			<?php include 'inputtupoksi.css'; ?>
		</style>
		<title>
			Input TUPOKSI
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
		</div>
		<div>
			<h1>Tugas Pokok dan Fungsi</h1>
			<h2></h2>
		</div>
		<br>
		<br>
		<form id = "tupoksi" method = "post" action = "itupoksi.php">
			<div class = "info">
				<table class = "table">
					<tbody>
						<tr>
							<td class = "col1">Nama Unit Eselon I</td>
							<td class = "col2"> : </td>
							<td class = "col3">
								x
							</td>
						</tr>
						<tr>
							<td class = "col1">Nama Satuan Kerja</td>
							<td class = "col2"> : </td>
							<td class = "col3">
								x
							</td>
						</tr>
						<tr>
							<td class = "col1">Nama Unit Organisasi</td>
							<td class = "col2"> : </td>
							<td class = "col3">
								x
							</td>
						</tr>
						<tr>
							<td class = "col1"><br></td>
							<td class = "col2"><br></td>
							<td class = "col3"><br></td>
						</tr>
						<tr>
							<td class = "col1"><br></td>
							<td class = "col2"><br></td>
							<td class = "col3"><br></td>
						</tr>
						<tr>
							<td id = "label">Tugas Pokok</td>
							<td> : </td>
							<td>
								<textarea type = "text" ID = "tugaspokok" name = "tugaspokok" placeholder = ""><?php print_r($_SESSION['TugasPokok']); ?></textarea>
							</td>
						</tr>
						<tr>
							<td id = "label">Fungsi</td>
							<td> : </td>
							<td>
								<textarea type = "text" ID = "fungsi" name = "fungsi" placeholder = ""><?php print_r($_SESSION['Fungsi']); ?></textarea>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<br>
			<br>
			<center>
				<button class="button" name="submit"/>Submit</button>
			</center>
		</form>
		<br>
	</body>
</html>