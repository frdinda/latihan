<html>
	<head>
		<meta charset="utf-8">
		<script src = "jquery-3.3.1.min.js"></script>
		<script type = "text/javascript">
			$(document).ready(function(){
				$("#tambah").click(function () {
					var markup = " <tr><td>1</td><td><textarea type = 'text' ID = 'risiko' placeholder = ''></textarea></td><td><textarea type = 'text' ID = 'pemilik' placeholder = ''></textarea></td><td><textarea type = 'text' ID = 'sumber' placeholder = ''></textarea></td><td><textarea type = 'text' ID = 'UC' placeholder = ''></textarea></td><td><textarea type = 'text' ID = 'uraian' placeholder = ''></textarea></td><td><textarea type = 'text' ID = 'dampak' placeholder = ''></textarea></td><td><textarea type = 'text' ID = 'pengendalian' placeholder = ''></textarea></td><td><textarea type = 'text' ID = 'sisa' placeholder = ''></textarea></td></tr> ";
					$('#table2 tbody').append(markup);
				});
			});
		</script>
		<link rel = "stylesheet" type = "text/css" href = "registerrisiko.css" media = "screen">
		<title>
			Register Risiko
		</title>
	</head>
	<body>
		<div class = "user">
			<img src = "person.png" class = "userimg">
			<div class = "user-content" style = "left:0;">
				<br>
				<p>
					Hai, Subbag X!
					<br>
					<br>
				</p>
				<p>
					<a href = "penilaianrisiko.html">Penilaian Risiko</a>
					<br>
					<br>
					<a href = "menupj.html">Halaman Utama</a>
					<br>
					<br>
					<a href = "editunit.html">Edit Profil Unit</a>
					<br>
					<br>
					<a href = "logout.html">Logout</a>
				</p>
			</div>
			<a  href = "dokumen.html" target = "_blank">
				<img src = "b03a46db8235feb811fcae29a3f5b958-document-icon-by-vexels.png" class = "userimg">
			</a>
		</div>
		<div class = "sidenav">
			<h3>Daftar Kegiatan Pokok</h3>
			<a href = "">Kegiatan Pokok 1</a>
			<a href = "">Kegiatan Pokok 2</a>
			<a href = "">Kegiatan Pokok 3</a>
			<a href = "">Kegiatan Pokok 4</a>
			<a href = "">Kegiatan Pokok 5</a>
		</div>
		<br>
		<br>
		<div class = "main">
			<h1>Register Risiko</h1>
			<br>
			<br>
			<br>
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
							<td class = "col1">Nama Kegiatan</td>
							<td class = "col2"> : </td>
							<td class = "col3">
								x
							</td>
						</tr>
						<tr>
							<td class = "col1">Tahapan</td>
							<td class = "col2"> : </td>
							<td class = "col3">
								<input type = "text" id = "tahapan" placeholder = ""/>
							</td>
						</tr>
						<br>
					</tbody>
				</table>
				<div>
					<a href = "">
						<div class = "oke">oke</div>
					</a>
				</div>
				<br>
				<br>
				<table id = "table2">
					<thead>
						<tr>
							<th>Kode Risiko</th>
							<th>Pernyataan Risiko</th>
							<th>Pemilik</th>
							<th>Sumber</th>
							<th>U/C</th>
							<th>Uraian</th>
							<th>Dampak</th>
							<th>Pengendalian Yang Ada</th>
							<th>Sisa Risiko</th>
						</tr>
					</thead>
					<br>
					<tbody>
						<tr>
							<td><br></td>
							<td><br></td>
						</tr>
						<tr>
							<td>1</td>
							<td>
								<textarea type = "text" ID = "risiko" placeholder = ""></textarea>
							</td>
							<td>
								<textarea type = "text" ID = "pemilik" placeholder = ""></textarea>
							</td>
							<td>
								<textarea type = "text" ID = "sumber" placeholder = ""></textarea>
							</td>
							<td>
								<textarea type = "text" ID = "UC" placeholder = ""></textarea>
							</td>
							<td>
								<textarea type = "text" ID = "uraian" placeholder = ""></textarea>
							</td>
							<td>
								<textarea type = "text" ID = "dampak" placeholder = ""></textarea>
							</td>
							<td>
								<textarea type = "text" ID = "pengendalian" placeholder = ""></textarea>
							</td>
							<td>
								<textarea type = "text" ID = "sisa" placeholder = ""></textarea>
							</td>
						</tr>
					</tbody>
				</table>
				<p>
					<input type = "button" id = "tambah" value = "Tambah">
				</p>
				<br>
				<br>
				<center>
					<a href = "">
						<div class = "submit">submit</div>
					</a>
				</center>
				<br>
		</div>
	</body>
</html>