<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER UANG</title>
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
        <form method="POST">
            <table style="margin-bottom:2vh;">
                <tr>
                    <td><label>NIP</label></td>
                    <td></td>
                    <td><input type="text" name="nip"></td>
                </tr>
                <tr>
                    <td><label>Pass</label></td>
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
                    <td><input type="emai" name="email"></td>
                </tr>
                <tr>
                    <td><label>Gaji Bulanan</label></td>
                    <td><a>Rp. </a></td>
                    <td><input type="number" name="gaji_bulanan"></td>
                    <td><a>  ,-</a></td>
                </tr>
            </table>
            <input type="submit" name="btnsubmit" value="submit">
            <input type="reset" name="btnreset" value="reset">
        </form>
    </fieldset>
    <?php
        if(isset($_POST['btnsubmit'])){
            $nip = $_POST['nip'];
            $pass = $_POST['pass'];
            $nama = $_POST['nama'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $alamat = $_POST['alamat'];
            $email = $_POST['email'];
            $gaji_bulanan = $_POST['gaji_bulanan'];

            if(!empty($nip) && !empty($pass) && !empty($nama) && !empty($tanggal_lahir) && !empty($alamat) && !empty($email) && !empty($gaji_bulanan)){
                tambahdata($conn, $nip, $pass, $nama, $tanggal_lahir, $alamat, $email, $gaji_bulanan);
            }else{
                echo "DATA TIDAK LENGKAP";
                echo $nip, $pass, $nama, $tanggal_lahir, $alamat, $email, $gaji_bulanan;
            }
        }
        function tambahdata($conn, $nip, $pass, $nama, $tanggal_lahir, $alamat, $email, $gaji_bulanan){
            $sql = "SELECT * FROM user WHERE NOT nip=".$nip;
            $data = mysqli_fetch_assoc($conn->query($sql));
            if(count($data)>0){
                echo "NIP SUDAH DIPAKAI";
            }else{
                $sql = "INSERT INTO user(nip, pass, nama, tanggal_lahir, alamat, email, gaji_bulanan) VALUES (".$nip.", '".$pass."', '".$nama."', '".$tanggal_lahir."', '".$alamat."', '".$email."', ".$gaji_bulanan.");";
                if($conn->query($sql) === TRUE){
                    header ('location: latihan_crud_uang_1.php');
                }else{
                    echo "TAMBAH DATA TIDAK BERHASIL";
                }
            }
        }
    ?>

    <fieldset>
        <?php
            $sql = "SELECT * FROM user ORDER BY nip";
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
            <?php while($data= mysqli_fetch_assoc($query)){?>
            <tr>
                <td><?= $data['nip'];?></td>
                <td><?= $data['nama'];?></td>
                <td><?= $data['tanggal_lahir'];?></td>
                <td><?= $data['alamat'];?></td>
                <td><?= $data['email'];?></td>
                <td><?= $data['gaji_bulanan'];?></td>
                <td><a href="update_crud_uang_1.php?nip=<?= $data['nip'];?>">update</a></td>
                <td><a href="latihan_crud_uang_1.php?nip=<?= $data['nip'];?>">delete</a></td>
            </tr>
            <?php }?>
        </table>
    </fieldset>
    <?php
        if(isset($_GET['nip'])){
            $nip = $_GET['nip'];
            hapusdata($conn, $nip);
        }
        function hapusdata($conn, $nip){
            $sql = "DELETE FROM user WHERE nip=".$nip;
            if($conn->query($sql) === TRUE){
                header ('location: latihan_crud_uang_1.php');
            }else{
                echo "HAPUS DATA TIDAK BERHASIL";
            }
        }
    ?>
</body>
</html>