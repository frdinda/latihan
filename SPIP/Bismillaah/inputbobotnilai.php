<?php
session_start();
require 'db.php';
require 'etupoksi.php';
?>

<html>
	<head>
		<style>
			<?php include 'inputbobotnilai.css'; ?>
		</style>
		<title>
			Bobot Nilai Pelaksanaan SPIP
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
			<h1>Bobot Nilai Pelaksanaan SPIP</h1>
			<h2>
			</h2>
		</div>
		<br>
		<br>
		<form id = "bobotnilai" method = "post" action = "ibobotnilai.php">
			<div class = "info">
				<table class = "table">
					<tbody>
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
							<td class = "col1">Penanggungjawab Kegiatan</td>
							<td class = "col2"> : </td>
							<td class = "col3">
								<?php
									print_r($_SESSION['Penanggungjawab']);
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
					</tbody>
				</table>
				<table class = "table2">
					<thead>
						<tr>
							<th>Unsur SPIP</th>
							<th>Bobot Nilai</th>
						</tr>
					</thead>
					<br>
					<tbody>
						
						<tr>
							<td><br></td>
							<td><br></td>
						</tr>
						<tr>
							<td>Lingkungan Pengendalian</td>
							<td>
								<input type = "number" id = "LP" name = "U1" value = "<?php if($_SESSION['bobotnilai'][4] === NULL){} else{echo($_SESSION['bobotnilai'][4]);}?>" placeholder = "x%"/>
							</td>
						</tr>
						<tr>
							<td>Penilaian Risiko</td>
							<td>
								<input type = "number" id = "PR" name = "U2" value = "<?php if($_SESSION['bobotnilai'][3] === NULL){} else{echo($_SESSION['bobotnilai'][3]);}?>" placeholder = "x%"/>
							</td>
						</tr>
						<tr>
							<td>Kegiatan Pengendalian</td>
							<td>
								<input type = "number" id = "KP" name = "U3" value = "<?php if($_SESSION['bobotnilai'][2] === NULL){} else{echo($_SESSION['bobotnilai'][2]);}?>" placeholder = "x%"/>
							</td>
						</tr>
						<tr>
							<td>Informasi dan Komunikasi</td>
							<td>
								<input type = "number" id = "IFK" name = "U4" value = "<?php if($_SESSION['bobotnilai'][1] === NULL){} else{echo($_SESSION['bobotnilai'][1]);}?>" placeholder = "x%"/>
							</td>
						</tr>
						<tr>
							<td>Pemantauan Berkelanjutan</td>
							<td>
								<input type = "number" id = "PB" name = "U5" value = "<?php if($_SESSION['bobotnilai'][0] === NULL){} else{echo($_SESSION['bobotnilai'][0]);}?>" placeholder = "x%"/>
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