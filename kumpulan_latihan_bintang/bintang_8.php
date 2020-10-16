<!DOCTYPE html>
<html>
<head>
  <title>BINTANG</title>
</head>
<body>
  //kotak
  <fieldset style="margin-bottom:5vh;">
    <legend>KOTAK</legend>
    <form method="POST" style="margin-bottom:2vh;">
      <table>
        <tr> <td> <input type="number" name="tinggi_kotak" placeholder="tinggi kotak"> </td> </tr>
        <tr> <td> <input type="number" name="lebar_kotak" placeholder="lebar kotak"> </td> </tr>
        <tr> <td> <input type="submit" name="submit_kotak" value="submit"> </td> </tr>
      </table>
    </form>
    <?php
      if(isset($_POST['submit_kotak'])){
        $tinggi_kotak = $_POST['tinggi_kotak'];
        $lebar_kotak = $_POST['lebar_kotak'];
        if(!empty($tinggi_kotak) && !empty($lebar_kotak)){
          tampil_kotak($tinggi_kotak, $lebar_kotak);
        }else{
          echo "DATA BELUM LENGKAP";
        }
      }
      function tampil_kotak($tinggi_kotak, $lebar_kotak){
        for($t=1; $t<=$tinggi_kotak; $t++){
          for($l=1; $l<=$lebar_kotak; $l++){
            echo "*";
            echo "<a style='color:white;'>_</a>";
          }
          echo "<br>";
        }
      }
    ?>
  </fieldset>
  //sikir
  <fieldset style="margin-bottom:5vh;">
    <legend>SEGITIGA SIKU KIRI</legend>
    <form method="POST" style="margin-bottom:2vh;">
      <table>
        <tr> <td> <input type="number" name="tinggi_sikir" placeholder="tinggi segitiga siku kiri"> </td> </tr>
        <tr> <td> <input type="submit" name="submit_sikir" value="submit"> </td> </tr>
      </table>
    </form>
    <?php
      if(isset($_POST['submit_sikir'])){
        $tinggi_sikir = $_POST['tinggi_sikir'];
        if(!empty($tinggi_sikir)){
          tampil_sikir($tinggi_sikir);
        }else{
          echo "DATA BELUM LENGKAP";
        }
      }
      function tampil_sikir($tinggi_sikir){
        for($t=1; $t<=$tinggi_sikir; $t++){
          for($l=1; $l<=$t; $l++){
            echo "*";
            echo "<a style='color:white;'>_</a>";
          }
          echo "<br>";
        }
      }
    ?>
  </fieldset>
  //sikan
  <fieldset style="margin-bottom:5vh;">
    <legend>SEGITIGA SIKU KANAN</legend>
    <form method="POST" style="margin-bottom:2vh;">
      <table>
        <tr> <td> <input type="number" name="tinggi_sikan" placeholder="tinggi segitiga siku kanan"> </td> </tr>
        <tr> <td> <input type="submit" name="submit_sikan" value="submit"> </td> </tr>
      </table>
    </form>
    <?php
      if(isset($_POST['submit_sikan'])){
        $tinggi_sikan = $_POST['tinggi_sikan'];
        if(!empty($tinggi_sikan)){
          tampil_sikan($tinggi_sikan);
        }else{
          echo "DATA BELUM LENGKAP";
        }
      }
      function tampil_sikan($tinggi_sikan){
        $tbalik=$tinggi_sikan-1;
        $a=0;
        for($t=1; $t<=$tinggi_sikan; $t++){
          for($s=1; $s<=$tbalik; $s++){
            echo "<a style='color:white;'>_</a>";
          }
          for($l=1; $l<=$t; $l++){
            echo "*";
          }
          echo "<br>";
          $tbalik--;
        }
      }
    ?>
  </fieldset>
  //piramida
  <fieldset style="margin-bottom:5vh;">
    <legend>PIRAMIDA</legend>
    <form method="POST" style="margin-bottom:2vh;">
      <table>
        <tr> <td> <input type="number" name="tinggi_piramida" placeholder="tinggi piramida"> </td> </tr>
        <tr> <td> <input type="submit" name="submit_piramida" value="submit"> </td> </tr>
      </table>
    </form>
    <?php
      if(isset($_POST['submit_piramida'])){
        $tinggi_piramida = $_POST['tinggi_piramida'];
        if(!empty($tinggi_piramida)){
          tampil_piramida($tinggi_piramida);
        }else{
          echo "DATA BELUM LENGKAP";
        }
      }
      function tampil_piramida($tinggi_piramida){
        $tbalik=$tinggi_piramida-1;
        $a=0;
        for($t=1; $t<=$tinggi_piramida; $t++){
          for($s=1; $s<=$tbalik; $s++){
            echo "<a style='color:white;'>_</a>";
          }
          for($l=1; $l<=$t+$a; $l++){
            echo "*";
          }
          echo "<br>";
          $tbalik--;
          $a++;
        }
      }
    ?>
  </fieldset>
</body>
</html>