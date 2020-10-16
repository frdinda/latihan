<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gambar</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        SELECT IMAGE TO UPLOAD:
        <input type="file" name="gambarnya" id="gambarnya">
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php
        $uploadOk = 1;
        //cek img-nya beneran img bukan
        if(isset($_POST["submit"])){
            $target_dir = "file/";
            $target_file = $target_dir .basename($_FILES["gambarnya"]["name"]);
            $tipegambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["gambarnya"]["name"]);
            if($check !== false){
                echo "filenya image - " .$check["mime"]. ".";
                $uploadOk = 1;
            }else{
                echo "filenya bukan image.";
                $uploadOk = 0;
            }
            //cek filenya udah ada apa nggak
            if(file_exists($target_file)){
                echo "udah ada filenya";
                $uploadOk = 0;
            }

            if($_FILES["gambarnya"]["size"] > 500000){
                echo "gambarnya kegedean";
                $uploadOk = 0;
            }

            //milah file format apa aja yang bisa masuk
            if($tipegambar != "jpg" && $tipegambar != "png" && $tipegambar != "jpeg"){
                echo "cuma jpg, png, sama jpeg";
                $uploadOk = 0;
            }

            //cek uploadok-nya 0 apa nggak
            if($uploadOk == 0){
                echo "maaf gabisa diupload";
            }else{
                if(move_uploaded_file($_FILES["gambarnya"]["tmp_name"], $target_file)){
                    echo "gambarnya" .basename($_FILES["gambarnya"]["name"]). "udah diupload";
                    $uploadOk=99;
                }else{
                    echo "maaf, gagal diupload";
                }
            }
        }
    ?>
    <br>
    <br>
    <?php
        $servername = "localhost";
        $username = "root";
        $pass = "";
        $dbname = "coba_img";
        $conn = new mysqli($servername, $username, $pass, $dbname);

        if($uploadOk==99){
            $sql = "INSERT INTO img1(image) VALUES (LOAD_FILE('".$target_file."'));";
            if($conn->query($sql) === TRUE){
                echo "berhasil diupload ke db";
            }else{
                echo "gagal diupload ke db" .$conn->error;
            }
        }
    ?>
    <br>
    <br>
    <table>
        <?php
            $sql = "SELECT * FROM img1";
            while($data = mysqli_fetch_assoc($conn->query($sql))){
        ?>
        <tr>
            <td><img src="<?= ?>"></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>