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

  //tambah data
  <fieldset style='margin-bottom:3vh'>
    <legend>TAMBAH DATA</legend>
    <form method="POST">
      <table>
        <tr>
          <td><label>NIS</label></td>
          <td><input type="text" name="nis"></td>
        </tr>
        <tr>
          <td><label>Nama</label></td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td><label>Tanggal Lahir</label></td>
          <td><input type="date" name="tanggal_lahir"></td>
        </tr>
        <tr>
          <td><label>Alamat</label></td>
          <td><input type="text" name="alamat"></td>
        </tr>
      </table>
      <input type="submit" name="btnsubmit" value="SUBMIT">
      <input type="reset" name="btnreset" value="RESET">
    </form>
  </fieldset>
  <?php
    if(isset($_POST['btnsubmit'])){
      $nis = $_POST['nis'];
      $nama = $_POST['nama'];
      $tanggal_lahir = $_POST['tanggal_lahir'];
      $alamat = $_POST['alamat'];
      if(!empty($nis) && !empty($nama) && !empty($tanggal_lahir) && !empty($alamat)){
        tambahdata($conn, $nis, $nama, $tanggal_lahir, $alamat);
      }else{
        echo "DATA TIDAK LENGKAP";
      }
    }
    function tambahdata($conn, $nis, $nama, $tanggal_lahir, $alamat){
      $sql = "INSERT INTO tb_murid(nis, nama, tanggal_lahir, alamat) VALUES (".$nis.", '".$nama."', '".$tanggal_lahir."', '".$alamat."');";
      if($conn->query($sql) === TRUE){
        header ('location: latihan_crud_8.php');
      }else{
        echo "TAMBAH DATA TIDAK BERHASIL";
      }
    }
  ?>

  //table
  <?php
    $sql = "SELECT * FROM tb_murid";
    $query = $conn->query($sql);
  ?>
  <fieldset>
    <legend>DATA SISWA</legend>
    <table>
      <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th></th>
        <th></th>
      </tr>
      <?php while($data = mysqli_fetch_assoc($query)){?>
      <tr>
        <td><?= $data['nis'];?></td>
        <td><?= $data['nama'];?></td>
        <td><?= $data['tanggal_lahir'];?></td>
        <td><?= $data['alamat'];?></td>
        <td><a href="update_murid_8.php?id=<?= $data['nis'];?>">update</a></td>
        <td><a href="latihan_crud_8.php?id=<?= $data['nis'];?>">delete</a></td>
      </tr>
      <?php }?>
    </table>
  </fieldset>
  <?php
    if(isset($_GET['id'])){
      $nis = $_GET['id'];
      hapusdata($conn, $nis);
    }
    function hapusdata($conn, $nis){
      $sql = "DELETE FROM tb_murid WHERE nis=".$nis;
      if($conn->query($sql) === TRUE){
        header ('location: latihan_crud_8.php');
      }else{
        echo "HAPUS DATA TIDAK BERHASIL";
      }
    }
  ?>

</body>
</html>