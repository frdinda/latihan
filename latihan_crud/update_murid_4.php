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
    $data = mysqli_fetch_assoc($query);
  ?>
  <fieldset>
    <legend>TAMBAH DATA</legend>
    <form method="POST">
      <div><input type="text" name="nis" value="<?= $data['nis'];?>" disabled="disabled"></div>
      <div><input type="text" name="nama" value="<?= $data['nama'];?>"></div>
      <div><input type="date" name="tanggal_lahir" value="<?= $data['tanggal_lahir'];?>"></div>
      <div><input type="text" name="alamat" value="<?= $data['alamat'];?>"></div>
      <div>
        <input type="submit" name="btnsubmit" value="Submit">
        <input type="reset" name="btnreset" value="Reset">
      </div>
    </form>
  </fieldset>

  <?php
    if(isset($_POST['btnsubmit'])){
      ubahdata($conn, $nis);
    }
    function ubahdata($conn, $nis){
      $nama = $_POST['nama'];
      $tanggal_lahir = $_POST['tanggal_lahir'];
      $alamat = $_POST['alamat'];
      
      if(!empty($nis) && !empty($nama) && !empty($tanggal_lahir) && !empty($alamat)){
        $sql = "UPDATE tb_murid SET nama='".$nama."', tanggal_lahir='".$tanggal_lahir."', alamat='".$alamat."' WHERE nis=".$nis;
        if($conn->query($sql)){
          header('location: latihan_crud_4.php');
        }else{
          echo "Tambah Data Gagal";
        }
      }else{
        echo "Data Tidak Lengkap";
      }
    }
  ?>
</body>
</html>