<?php
session_start();
require 'db.php';
require 'etupoksi.php';
require 'elevelspip.php';
require 'ekegiatanpokok.php';
?>
<html>
	<head>
		<style>
			<?php include 'kegiatanpokok.css'; ?>
		</style>
		<title>
			Identifikasi Kegiatan Pokok
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
					<a href = "penilaianrisiko.php">Penilaian Risiko</a>
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
		<div class = "sidenav">
			<h3>Daftar Kegiatan Pokok</h3>
			<table>
				<tbody>
					<?php if($_SESSION["KegiatanPokok"] === NULL) : echo ("<tr><a href = ''></a></tr>");?>
					<?php else : 
						$numpang = array($_SESSION["KegiatanPokok"]); 
						$a = count($numpang); 
						$b = 0;
						for($b=0; $b<$a; $b++): echo ("<tr><a href = ''>".$numpang[$b]."</a></tr>");
					?>
					
					<?php endfor; endif; ?>
				</tbody>
			</table>
		</div>
		<br>
		<br>
		<div class = "main">
			<h1>Identifikasi Kegiatan Pokok</h1>
			<form id = "kegiatanpokok" method = "post" action = "ikegiatanpokok.php">
				<div class = "info">
					<table class = "table">
						<tbody>
							<tr>
								<td class = "col1">Nama Unit Eselon I</td>
								<td class = "col2"> : </td>
								<td class = "col3">
									<?php
										print_r($_SESSION['Eselon1']);
									?>
								</td>
							</tr>
							<tr>
								<td class = "col1">Nama Satuan Kerja</td>
								<td class = "col2"> : </td>
								<td class = "col3">
									<?php
										print_r($_SESSION['Satker']);
									?>
								</td>
							</tr>
							<tr>
								<td class = "col1">Nama Unit Organisasi</td>
								<td class = "col2"> : </td>
								<td class = "col3">
									<?php
										print_r($_SESSION['NamaUnit']);
									?>
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
								<td class = "col1">Kegiatan Pokok</td>
								<td class = "col2"> : </td>
								<td>
									<input type = "text" id = "kegiatanpokok" name = "kegiatanpokok" placeholder = "" value = "<?php $kegiatanpokok = $_SESSION["KegiatanPokok"]; if($kegiatanpokok === NULL){} else{print_r($_SESSION['KegiatanPokok']);}?>"></input>
								</td>
							</tr>
							<tr>
								<td class = "col1">Definisi Kegiatan</td>
								<td class = "col2"> : </td>
								<td>
									<textarea id = "definisikegiatan" name = "definisikegiatan" placeholder = ""><?php $definisi = $_SESSION["DefinisiKegiatan"]; if($definisi === NULL){} else{print_r($_SESSION['DefinisiKegiatan']);}?></textarea>
								</td>
							</tr>
							<tr>
								<td class = "col1">Output Kegiatan</td>
								<td class = "col2"> : </td>
								<td>
									<textarea id = "outputkegiatan" name = "outputkegiatan" placeholder = ""><?php $output = $_SESSION["OutputKegiatan"]; if($output === NULL){} else{print_r($_SESSION['OutputKegiatan']);}?></textarea>
								</td>
							</tr>
							<tr>
								<td class = "col1">Karakteristik Kegiatan</td>
								<td class = "col2"> : </td>
								<td>
									<textarea id = "karakteristikkegiatan" name = "karakteristikkegiatan" placeholder = ""><?php $karakteristik = $_SESSION["KarakteristikKegiatan"]; if($karakteristik === NULL){} else{print_r($_SESSION['KarakteristikKegiatan']);}?></textarea>
								</td>
							</tr>
							<tr>
								<td class = "col1">Lingkup Kegiatan</td>
								<td class = "col2"> : </td>
								<td>
									<textarea id = "lingkupkegiatan" name = "lingkupkegiatan" placeholder = ""><?php $lingkup = $_SESSION["LingkupKegiatan"]; if($lingkup === NULL){} else{print_r($_SESSION['LingkupKegiatan']);}?></textarea>
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
				<br>
				<br>
			</form>
			<br>
			<br>
			<br>
		</div>
	</body>
</html>