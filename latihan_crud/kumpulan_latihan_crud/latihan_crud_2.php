<!DOCTYPE html>
<html>
<head>
<title>DATA SISWA</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "sekolah";
$conn = new mysqli($servername, $username, $pass, $dbname);
?>
<div>
<form method="POST">
<fieldset>
<legend>TAMBAH DATA</legend>
<div>
<input type="text" name="nis" placeholder="NIS">
</div>
<div>
<input type="text" name="nama" placeholder="Nama">
</div>
<div>
<input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir">
</div>
<div>
<input type="text" name="alamat" placeholder="Alamat">
</div>
<div>
<input type="submit" name="btnsubmit" value="Submit">
<input type="reset" name="reset" value="Reset">
</div>
</fieldset>
</form>
</div>
<div>
<?php
$sql = "SELECT * FROM tb_murid ORDER BY nis";
$query = $conn->query($sql);
?>
<fieldset>
<legend>DATA SISWA</legend>
<div>
<table border='1' cellpadding='10'>
<tr>
<th>NIS</th>
<th>Nama Siswa</th>
<th>Tanggal Lahir</th>
<th>Alamat</th>
<th></th>
<th></th>
</tr>
<tr>
<?php
while($data=mysqli_fetch_array($query)){
?>
<tr>
<td><?= $data['nis'];?></td>
<td><?= $data['nama'];?></td>
<td><?= $data['tanggal_lahir'];?></td>
<td><?= $data['alamat'];?></td>
<td><a href="update_murid_2.php?id=<?=$data['nis'];?>">Update</a></td>
<td><a href="latihan_crud_2.php?id=<?=$data['nis'];?>" onClick="return confirm('yakin?');">Delete</a></td>
</tr>
<?php
}?>
</tr>
</table>
</div>
</fieldset>
</div>
<?php
if(isset($_POST['btnsubmit'])){
tambahdata($conn);
}
function tambahdata($conn){
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];

if(!empty($nis) && !empty($nama) && !empty($tanggal_lahir) && !empty($alamat)){
$sql = "INSERT INTO tb_murid(nis, nama, tanggal_lahir, alamat) VALUE ('".$nis."', '".$nama."', '".$tanggal_lahir."', '".$alamat."');";
if($conn->query($sql) === TRUE){
echo 'berhasil';
header ("location: latihan_crud_2.php");
}else{
echo 'nope';
}
}
}

if(isset($_GET['id'])){
$nis = $_GET['id'];
hapusdata($conn, $nis);
}
function hapusdata($conn, $nis){
$sql = "DELETE FROM tb_murid WHERE nis=".$nis;
if($conn->query($sql) === TRUE){
echo "hapus berhasil";
header ("location: latihan_crud_2.php");
}
}
?>
</body>
</html>