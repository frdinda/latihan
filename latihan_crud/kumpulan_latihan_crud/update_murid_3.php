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
   $sql = "SELECT * FROM tb_murid WHERE nis = ".$nis;
   $query = $conn->query($sql);
   $data = mysqli_fetch_assoc($query);
  ?>

  <fieldset>
   <form method = "POST">
    <legend>UPDATE DATA</legend>
    <table>
     <tr>
      <td><p>NIS</p></td>
      <td><input type = "text" name = "nis" value="<?= $data['nis'];?>" disabled='disabled'></td>
     </tr>
     <tr>
      <td><p>Nama</p></td>
      <td><input type = "text" name = "nama" value="<?= $data['nama'];?>"></td>
     </tr>
     <tr>
      <td><p>Tanggal Lahir</p></td>
      <td><input type = "date" name = "tanggal_lahir" value="<?= $data['tanggal_lahir'];?>"></td>
     </tr>
     <tr>
      <td><p>Alamat</p></td>
      <td><input type = "text" name = "alamat" value="<?= $data['alamat'];?>"></td>
     </tr>
    </table>
    <input type = "submit" name = "btnsubmit" value = "Submit">
    <input type = "reset" name = "btnreset" value = "Reset">
   </form>
  </fieldset>

  <?php
   if(isset($_POST['btnsubmit'])){
    updatedata($conn, $nis);
   }
   function updatedata($conn, $nis){
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    if(!empty($nis) && !empty($nama) && !empty($tanggal_lahir) && !empty($alamat)){
     $sql = "UPDATE tb_murid SET nama = '".$nama."', tanggal_lahir = '".$tanggal_lahir."', alamat = '".$alamat."' WHERE nis = ".$nis;
     if($conn->query($sql) === TRUE){
      header ('location: latihan_crud_3.php');
     }else{
      echo "Update Data Tidak Berhasil";
     }
    }else{
     echo "Data Tidak Lengkap!";
    }
   }
  ?>
 </body>
</html>