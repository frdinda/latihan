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
        $nip = $_GET['nip'];
        $sql = "SELECT * FROM user WHERE nip=".$nip;
        $data = mysqli_fetch_assoc($conn->query($sql));
    ?>

    <fieldset style="margin-bottom:7vh;">
        <legend>TAMBAH DATA</legend>
        <form method="POST">
            <table style="margin-bottom:2vh;">
                <tr>
                    <td><label>NIP</label></td>
                    <td></td>
                    <td><input type="text" name="nip" value="<?= $data['nip'];?>"></td>
                </tr>
                <tr>
                    <td><label>Pass</label></td>
                    <td></td>
                    <td><input type="password" name="pass" value="<?= $data['pass'];?>"></td>
                </tr>
                <tr>
                    <td><label>Nama</label></td>
                    <td></td>
                    <td><input type="text" name="nama" value="<?= $data['nama'];?>"></td>
                </tr>
                <tr>
                    <td><label>Tanggal Lahir</label></td>
                    <td></td>
                    <td><input type="date" name="tanggal_lahir" value="<?= $data['tanggal_lahir'];?>"></td>
                </tr>
                <tr>
                    <td><label>Alamat</label></td>
                    <td></td>
                    <td><input type="text" name="alamat" value="<?= $data['alamat'];?>"></td>
                </tr>
                <tr>
                    <td><label>Email</label></td>
                    <td></td>
                    <td><input type="emai" name="email" value="<?= $data['email'];?>"></td>
                </tr>
                <tr>
                    <td><label>Gaji Bulanan</label></td>
                    <td><a>Rp. </a></td>
                    <td><input type="number" name="gaji_bulanan" value="<?= $data['gaji_bulanan'];?>"></td>
                    <td><a>  ,-</a></td>
                </tr>
            </table>
            <input type="submit" name="btnsubmit" value="submit">
            <input type="reset" name="btnreset" value="reset">
        </form>
    </fieldset>
    <?php
        if(isset($_POST['btnsubmit'])){
            $nipbaru = $_POST['nip'];
            $pass = $_POST['pass'];
            $nama = $_POST['nama'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $alamat = $_POST['alamat'];
            $email = $_POST['email'];
            $gaji_bulanan = $_POST['gaji_bulanan'];

            if(!empty($nip) && !empty($nipbaru) && !empty($pass) && !empty($nama) && !empty($tanggal_lahir) && !empty($alamat) && !empty($email) && !empty($gaji_bulanan)){
                ubahdata($conn, $nip, $nipbaru, $pass, $nama, $tanggal_lahir, $alamat, $email, $gaji_bulanan);
            }else{
                echo "DATA TIDAK LENGKAP";
                echo $nip, $pass, $nama, $tanggal_lahir, $alamat, $email, $gaji_bulanan;
            }
        }
        function ubahdata($conn, $nip, $nipbaru, $pass, $nama, $tanggal_lahir, $alamat, $email, $gaji_bulanan){
            if($nip != $nipbaru){
                $sql = "SELECT * FROM user WHERE NOT nip=".$nip;
                $data = mysqli_fetch_assoc($conn->query($sql));
                if(count($data)>0){
                    echo "NIP UDAH DIPAKE";
                }else{
                    $sql = "UPDATE user SET nip=".$nipbaru.", pass='".$pass."', nama='".$nama."', tanggal_lahir='".$tanggal_lahir."', alamat='".$alamat."', email='".$email."', gaji_bulanan=".$gaji_bulanan." WHERE nip=".$nip;
                    if($conn->query($sql) === TRUE){
                        header ('location: latihan_crud_uang_1.php');
                    }else{
                        echo "TAMBAH DATA TIDAK BERHASIL" .$conn->error;
                    }
                }
            }else{
                $sql = "UPDATE user SET pass='".$pass."', nama='".$nama."', tanggal_lahir='".$tanggal_lahir."', alamat='".$alamat."', email='".$email."', gaji_bulanan=".$gaji_bulanan." WHERE nip=".$nip;
                if($conn->query($sql) === TRUE){
                   header ('location: latihan_crud_uang_1.php');
                }else{
                    echo "TAMBAH DATA TIDAK BERHASIL" .$conn->error;
                }
            }
        }
    ?>
</body>
</html>