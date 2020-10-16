<!DOCTYPE html>
<html>
<head>
  <title>USER</title>
</head>
<body>
  <?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "uang";
    $conn = new mysqli($servername, $username, $pass, $dbname);
  ?>
  <fieldset style="margin-bottom:7vh;">
    <legend>TAMBAH DATA</legend>
    <form method="post">
      <table style="margin-bottom:2vh;">
        <tr>
          <td><label>NIP</label></td>
          <td></td>
          <td><input type="text" name="nip"></td>
        </tr>
        <tr>
          <td><label>Password</label></td>
          <td></td>
          <td><input type="password" name="pass"></td>
        </tr>
        <tr>
          <td><label>Nama</label></td>
          <td></td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td><label>Tanggal Lahir</label></td>
          <td></td>
          <td><input type="date" name="tanggal_lahir"></td>
        </tr>
        <tr>
          <td><label>Alamat</label></td>
          <td></td>
          <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
          <td><label>Email</label></td>
          <td></td>
          <td><input type="email" name="email"></td>
        </tr>
        <tr>
          <td><label>Gaji Bulanan</label></td>
          <td>Rp. </td>
          <td><input type="text" name="gaji_bulanan"></td>
          <td> ,-</td>
        </tr>
      </table>
      <input type="submit" name="btnsubmit" value="submit">
      <input type="reset" name="btnreset" value="reset">
    </form>
  </fieldset>
  <?php
    if(isset($_POST['btnsubmit'])){
      $nip = $_POST['nip'];
      $nama = $_POST['nama'];
      $pass = $_POST['pass'];
      $tanggal_lahir = $_POST['tanggal_lahir'];
      $alamat = $_POST['alamat'];
      $email = $_POST['email'];
      $gaji_bulanan = $_POST['gaji_bulanan'];
      if(!empty($nip) && !empty($pass) && !empty($nama) && !empty($tanggal_lahir) && !empty($alamat) && !empty($email) && !empty($gaji_bulanan)){
        tambahdata($conn, $nip, $pass, $nama, $tanggal_lahir, $alamat, $email, $gaji_bulanan);
      }else{
        echo "DATA TIDAK LENGKAP"; 
      }
    }
    function tambahdata($conn, $nip, $pass, $nama, $tanggal_lahir, $alamat, $email, $gaji_bulanan){
      $sql = "SELECT * FROM user WHERE nip=".$nip;
      $data = mysqli_fetch_assoc($conn->query($sql));
      if(count($data)>0){
        echo "NIP TELAH DIPAKAI";
      }else{
        $sql = "INSERT INTO user(nip, pass, nama, tanggal_lahir, alamat, email, gaji_bulanan) VALUES (".$nip.", '".$pass."', '".$nama."', '".$tanggal_lahir."', '".$alamat."', '".$email."', ".$gaji_bulanan.");";
        if($conn->query($sql) === TRUE){
          header ('location: latihan_crud_uang_2.php');
        }else{
          echo "TAMBAH DATA TIDAK BERHASIL" .$conn->error;
        }
      }
    }
  ?>

  <fieldset>
    <?php
      $sql = "SELECT * FROM user";
      $query = $conn->query($sql);
    ?>
    <table border="1">
      <tr>
        <th>NIP</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Gaji Bulanan</th>
        <th></th>
        <th></th>
      </tr>
      <?php while($data = mysqli_fetch_assoc($query)){?>
      <tr>
        <td><?= $data['nip'];?></td>
        <td><?= $data['nama'];?></td>
        <td><?= $data['tanggal_lahir'];?></td>
        <td><?= $data['alamat'];?></td>
        <td><?= $data['email'];?></td>
        <td><a>Rp. </a><?= $data['gaji_bulanan'];?><a> ,-</a></td>
        <td><a href="update_crud_uang_2.php?id=<?= $data['nip'];?>">update</a></td>
        <td><a href="latihan_crud_uang_2.php?id=<?= $data['nip'];?>">delete</a></td>
      </tr>
      <?php }?>
    </table>
  </fieldset>
  <?php
    if(isset($_GET['id'])){
      $nip = $_GET['id'];
      hapusdata($conn, $nip);
    }
    function hapusdata($conn, $nip){
      $sql = "DELETE FROM user WHERE nip=".$nip;
      if($conn->query($sql) === TRUE){
        header ('location: latihan_crud_uang_2.php');
      }else{
        echo "HAPUS DATA TIDAK BERHASIL" .$conn->error;
      }
    }
  ?>

</body>
</html>