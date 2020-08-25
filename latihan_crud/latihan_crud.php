<!DOCTYPE html>
<html>
<head>
<title>DATA SISWA</title>
</head>
<body>
<?php 
$servername = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'sekolah';
$conn = new mysqli($servername, $username, $pass, $dbname);
?>
<div>
<h1>TAMBAH DATA</h1>
<form method="POST">
<input type="text" name="nis" placeholder="nis">
<input type="text" name="nama" placeholder="nama">
<input type="date" name="tanggal_lahir" placeholder="tanggal lahir">
<input type="text" name="alamat" placeholder="alamat">
<input type="submit" name="btnsimpan" value="button simpan">
</form>
<?php
if(isset($_POST['btnsimpan'])){
tambahdata($conn);
}
function tambahdata($conn){
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];

if(!empty($nis) && !empty($nama) && !empty($tanggal_lahir) && !empty($alamat)){
$sql = "INSERT INTO tb_murid(nis, nama, tanggal_lahir, alamat) VALUE (".$nis.", '".$nama."', '".$tanggal_lahir."', '".$alamat."');";
$query = $conn->query($sql);
if($query === TRUE){
echo "berhasil";
}else{
echo "nopes";
}
}
}
?>
</div>
</body>
</html>