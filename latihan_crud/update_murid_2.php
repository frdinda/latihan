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
$nis = $_GET['id'];

$sql = "SELECT * FROM tb_murid WHERE nis=".$nis;
$query = $conn->query($sql);
$data = mysqli_fetch_array($query);
?>
<div>
<form method="POST">
<fieldset>
<legend>TAMBAH DATA</legend>
<div>
<input type="text" name="nis" value="<?= $data['nis'];?>" disabled="disabled">
</div>
<div>
<input type="text" name="nama" value="<?= $data['nama'];?>">
</div>
<div>
<input type="date" name="tanggal_lahir" value="<?= $data['tanggal_lahir'];?>">
</div>
<div>
<input type="text" name="alamat" value="<?= $data['alamat'];?>">
</div>
<div>
<input type="submit" name="btnsubmit" value="Submit">
<input type="reset" name="reset" value="Reset">
</div>
</fieldset>
</form>
</div>
<?php
if(isset($_POST['btnsubmit'])){
updatedata($conn, $nis);
}

function updatedata($conn, $nis){
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tanggal_lahir = $_POST['tanggal_lahir'];

if(!empty($nis) && !empty($nama) && !empty($tanggal_lahir) && !empty($alamat)){
$sql = "UPDATE tb_murid SET nama='".$nama."', tanggal_lahir='".$tanggal_lahir."', alamat='".$alamat."' WHERE nis=".$nis;
if($conn->query($sql) === TRUE){
header ("location: latihan_crud_2.php");
}else{
echo "nope";
}
}
}
?>
</body>
</html>