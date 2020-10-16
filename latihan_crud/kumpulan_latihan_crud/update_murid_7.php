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
    $conn = new mysqli($servername,$username,$pass,$dbname);
    $nis = $_GET['id'];
    $sql = "SELECT * FROM tb_murid WHERE nis=".$nis;
    $data = mysqli_fetch_assoc($conn->query($sql));
  ?>
  
  <fieldset style='margin-bottom:7vh;'>
    <legend>UBAH DATA</legend>
    <form method="POST">
      <table>
        <tr>
          <td><label>NIS</label></td>
          <td><input type="text" name="nis" value="<?= $data['nis'];?>" disabled="disabled"></td>
        </tr>
        <tr>
          <td><label>Nama</label></td>
          <td><input type="text" name="nama" value="<?= $data['nama'];?>"></td>
        </tr>
        <tr>
          <td><label>Tanggal Lahir</label></td>
          <td><input type="date" name="tanggal_lahir" value="<?= $data['tanggal_lahir'];?>"></td>
        </tr>
        <tr>
          <td><label>Alamat</label></td>
          <td><input type="text" name="alamat" value="<?= $data['alamat'];?>"></td>
        </tr>
      </table>
      <input type="submit" name="btnsubmit" value="SUBMIT">
      <input type="reset" name="btnreset" value="RESET">
    </form>
  </fieldset>
  <?php
    if(isset($_POST['btnsubmit'])){
      $nama = $_POST['nama'];
      $tanggal_lahir = $_POST['tanggal_lahir'];
      $alamat = $_POST['alamat'];
      if(!empty($nis) && !empty($nama) && !empty($tanggal_lahir) && !empty($alamat)){
        ubahdata($conn, $nis, $nama, $tanggal_lahir, $alamat);
      }else{
        echo "DATA TIDAK LENGKAP";
      }
    }
    function ubahdata($conn, $nis, $nama, $tanggal_lahir, $alamat){
      $sql = "UPDATE tb_murid SET nama='".$nama."', tanggal_lahir='".tanggal_lahir."', alamat='".$alamat."' WHERE nis=".$nis;
      if($conn->query($sql) === TRUE){
        header ('location: latihan_crud_7.php');
      }else{
        echo "UBAH DATA TIDAK BERHASIL" .$conn->error;
      }
    }
  ?>
</body>
</html>