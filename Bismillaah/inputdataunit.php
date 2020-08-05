<?php
session_start();
require 'db.php';
require 'etupoksi.php';
?>
<html>
	<head>
		<style>
			<?php include 'editdataunit.css'; ?>
		</style>
		<title>
			Edit Unit
		</title>
	</head>
	<body>
		<div class = "user">
			<img src = "person.png" class = "userimg">
			<div class = "user-content" style = "left:0;">
				<br>
				<p>
					<?php
						$namaunit = $_SESSION["NamaUnit"];
						if($namaunit === NULL){
							print_r("HAI!");
						}
						else{
							print_r($_SESSION['NamaUnit']);
						}
					?>
					<br>
					<br>
				</p>
				<p>
					<?php $kuasaanggaran = $_SESSION["KuasaAnggaran"]; if($kuasaanggaran === NULL){} else{print_r('<a href = "menu.php">Halaman Utama</a> <br><br>');}?>
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
			<h1>Edit Unit</h1>
			<h2></h2>
		</div>
		<br>
		<br>
		<form id = "dataunit" method = "post" action = "idataunit.php">
			<div class = "info">
				<table class = "table">
					<tbody>
						<tr>
							<td class = "col1">Nama Unit Kerja</td>
							<td class = "col2"> : </td>
							<td class = "col3">
								<textarea type = "text" id = "namaunit" name = "namaunit" placeholder = ""><?php $namaunit = $_SESSION["NamaUnit"]; if($namaunit === NULL){} else{print_r($_SESSION['NamaUnit']);}?></textarea>
							</td>
						</tr>
						<tr>
							<td class = "col1">Pimpinan Unit Kerja</td>
							<td class = "col2"> : </td>
							<td class = "col3">
								<textarea type = "text" id = "pimpinanunit" name = "pimpinanunit" placeholder = ""><?php $pimpinanunit = $_SESSION["PimpinanUnit"]; if($pimpinanunit === NULL){} else{print_r($_SESSION['PimpinanUnit']);}?></textarea>
							</td>
						</tr>
						<tr>
							<td class = "col1">No. Telepon</td>
							<td class = "col2"> : </td>
							<td class = "col3">
								<input type = "number_format" maxlength = "13" id = "notelp" name = "notelp" placeholder = "" value = "<?php $notelp = $_SESSION["NoTelp"]; if($notelp === NULL){} else{print_r($_SESSION['NoTelp']);}?>"/>
							</td>
						</tr>
						<tr>
							<td class = "col1">Email</td>
							<td class = "col2"> : </td>
							<td class = "col3">
								<input type = "email" id = "email" name = "email" placeholder = "" value = "<?php $email = $_SESSION["Email"]; if($email === NULL){} else{print_r($_SESSION['Email']);}?>"/>
							</td>
						</tr>
						<tr>
							<td class = "col1">Alamat</td>
							<td class = "col2"> : </td>
							<td class = "col3">
								<textarea type = "text" id = "alamat" name = "alamat" placeholder = ""><?php $alamat = $_SESSION["Alamat"]; if($alamat === NULL){} else{print_r($_SESSION['Alamat']);}?></textarea>
							</td>
						</tr>
						<tr>
							<td class = "col1">Kuasa Pengguna Anggaran</td>
							<td class = "col2"> : </td>
							<td class = "col3">
								<textarea type = "text" id = "kuasaanggaran" name = "kuasaanggaran" placeholder = ""><?php $kuasaanggaran = $_SESSION["KuasaAnggaran"]; if($kuasaanggaran === NULL){} else{print_r($_SESSION['KuasaAnggaran']);}?></textarea>
							</td>
						</tr>
						<tr>
							<td class = "col1">Pejabat Pembuat Komitmen</td>
							<td class = "col2"> : </td>
							<td class = "col3">
								<textarea type = "text" id = "pembuatkomitmen" name = "pembuatkomitmen" placeholder = ""><?php $pembuatkomitmen = $_SESSION["PembuatKomitmen"]; if($pembuatkomitmen === NULL){} else{print_r($_SESSION['PembuatKomitmen']);}?></textarea>
							</td>
						</tr>
						<tr>
							<td class = "col1">Penanggungjawab Kegiatan</td>
							<td class = "col2"> : </td>
							<td class = "col3">
								<textarea type = "text" id = "penanggungjawab" name = "penanggungjawab" placeholder = ""><?php $penanggungjawab = $_SESSION["Penanggungjawab"]; if($penanggungjawab === NULL){} else{print_r($_SESSION['Penanggungjawab']);}?></textarea>
							</td>
						</tr>
						<tr>
							<td class = "col1">Nama Unit Eselon 1</td>
							<td class = "col2"> : </td>
							<td class = "col3">
								<textarea type = "text" id = "eselon1" name = "eselon1" placeholder = ""><?php $eselon1 = $_SESSION["Eselon1"]; if($eselon1 === NULL){} else{print_r($_SESSION['Eselon1']);}?></textarea>
							</td>
						</tr>
						<tr>
							<td class = "col1">Nama Satuan Kerja</td>
							<td class = "col2"> : </td>
							<td class = "col3">
								<textarea type = "text" id = "satker" name = "satker" placeholder = ""><?php $satker = $_SESSION["Satker"]; if($satker === NULL){} else{print_r($_SESSION['Satker']);}?></textarea>
							</td>
						</tr>
						<tr>
							<td class = "col1">Anggaran</td>
							<td class = "col2"> : </td>
							<td class = "col3">
								<input type = "number_format" id = "anggaran" name = "anggaran" placeholder = "" value = "<?php $anggaran = $_SESSION["Anggaran"]; if($anggaran === NULL){} else{print_r($_SESSION['Anggaran']);}?>"/>
							</td>
						</tr>
						<tr>
							<td class = "col1">Tahun Anggaran</td>
							<td class = "col2"> : </td>
							<td class = "col3">
								<input type = "number_format" maxlength = "4" id = "tahunanggaran" name = "tahunanggaran" placeholder = "" value = "<?php $tahunanggaran = $_SESSION["TahunAnggaran"]; if($tahunanggaran === NULL){} else{print_r($_SESSION['TahunAnggaran']);}?>"/>
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
			</div>
			<br>
			<br>
			<div class = "tombol">
				<button class="button" name="submit"/>Submit</button>
				<?php $sql   = "SELECT * FROM unit_organisasi WHERE Kode_Unit = '$kodeunit'"; $result = $conn->query($sql); if($result -> num_rows == 0) : ?>
					<a href = "logout.php">
						<div class = "button1"/>
							<p>Batal</p>
						</div>
					</a>	
				<?php else : ?>
					<a href = "menu.php">
						<div class = "button1"/>
							<p>Batal</p>
						</div>
					</a>
				<?php endif; ?>
			</div>
		</form>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	</body>
</html>