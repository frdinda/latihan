<?php
session_start();
require 'db.php';
require 'etupoksi.php';
require 'elevelspip.php';
?>
<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "integritas.css" media = "screen">
		<title>
			Komitmen Terhadap Integritas dan Penegakan Etika
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
					<a href = "lingkunganpengendalian.php">Lingkungan Pengendalian</a>
					<br>
					<br>
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
			<h1>Komitmen Terhadap Integritas dan Penegakan Etika</h1>
			<h2></h2>
		</div>
		<br>
		<br>
		<form method = "get/post" enctype="multipart/form-data" action = "uploadsintegritas.php">
			<div>
				<table>
					<thead>
						<tr>
							<th>Kode</th>
							<th>Pernyataan</th>
							<th>Bentuk Dokumen</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1.1</td>
							<td>Pimpinan telah memberikan keteladanan dalam menjunjung tinggi integritas nilai etika, dan menegakan disiplin.</td>
							<td>Dokumen Hasil Kuesioner</td>
							<td>
								<div class = "image-upload" name = "1.1">
									<label for = "file-input">
										<img src = "52890.png"/>
									</label>
									<input id = "file-input" name = "1.1" type = "file"/>
								</div>
							</td>
							<td>
								<input id = "checked" type = "checkbox">
							</td>
						</tr>
					</tbody>
					<tbody>
						<tr>
							<td>1.2</td>
							<td>Unit Organisasi telah memiliki atau membuat rencana penyusunan kode etik/aturan perilaku yang mengatur mengenai keteladanan pimpinan, integritas, nilai etika, dan penegakan disiplin.</td>
							<td>Dokumen DIPA atau RCA/KL</td>
							<td>
								<div class = "image-upload">
									<label for = "file-input">
										<img src = "52890.png"/>
									</label>
									<input id = "file-input" name = "1.2" type = "file"/>
								</div>
							</td>
							<td>
								<input id = "checked" type = "checkbox">
							</td>
						</tr>
					</tbody>
					<tbody>
						<tr>
							<td>1.3</td>
							<td>Unit Organisasi telah menetapkan kode etik/aturan perilaku dan mensosialisasikannya pada seluruh individu (pimpinan dan pegawai) dalam pelaksanaan kegiatan rutin organisasi.</td>
							<td>Dokumen Aturan Perilaku</td>
							<td>
								<div class = "image-upload">
									<label for = "file-input">
										<img src = "52890.png"/>
									</label>
									<input id = "file-input" name = "1.3" type = "file"/>
								</div>
							</td>
							<td>
								<input id = "checked" type = "checkbox">
							</td>
						</tr>
					</tbody>
					<tbody>
						<tr>
							<td>1.4</td>
							<td>Integritas dan etika positif sesuai aturan perilaku telah sepenuhnya menjadi bagian dari setiap individu (pimpinan dan pegawai) dalam pelaksanaan kegiatan rutin organisasi.</td>
							<td>Dokumen Catatan Pelanggaran</td>
							<td>
								<div class = "image-upload">
									<label for = "file-input">
										<img src = "52890.png"/>
									</label>
									<input id = "file-input" name = "1.4" type = "file"/>
								</div>
							</td>
							<td>
								<input id = "checked" type = "checkbox">
							</td>
						</tr>
					</tbody>
					<tbody>
						<tr>
							<td>1.5</td>
							<td>Unit Organisasi telah mengimplementasikan whistle blower system sebagai mekanisme penagangan atas pengaduan terhadap pelanggaran kodeetik dan aturan perilaku.</td>
							<td>Dokumen Analisis Whistle Blower System</td>
							<td>
								<div class = "image-upload">
									<label for = "file-input">
										<img src = "52890.png"/>
									</label>
									<input id = "file-input" name = "1.5" type = "file"/>
								</div>
							</td>
							<td>
								<input id = "checked" type = "checkbox">
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<br>
			<br>
			<div class = "tombol">
				<button class="button" name="submit"/>Submit</button>
				<a href = "menu.php">
					<div class = "button1"/>
						<p>Batal</p>
					</div>
				</a>
			</div>
		</form>
	</body>
</html>