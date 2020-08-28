<!DOCTYPE html>
<html>
<head>
  <title>BINTANG</title>
</head>
<body>
  <fieldset class="kotak">
    <legend>KOTAK</legend>
    <form method="POST">
      <input type="number" name="tinggi_kotak" placeholder="tinggi kotak">
      <br>
      <input type="number" name="lebar_kotak" placeholder="lebar kotak">
      <br>
      <input type="submit" name="submit_kotak" submit="SUBMIT">
    </form>
    <br>
    <?php
      if(isset($_POST['submit_kotak'])){
        $tinggi_kotak = $_POST['tinggi_kotak'];
        $lebar_kotak = $_POST['lebar_kotak'];
        tampil_kotak($tinggi_kotak, $lebar_kotak);
      }
      function tampil_kotak($tinggi_kotak, $lebar_kotak){
        for($t=1; $t<=$tinggi_kotak; $t++){
          for($l=1; $l<=$lebar_kotak; $l++){
            echo "*";
          }
          echo "<br>";
        }
      }
    ?>
  </fieldset>
  <br>
  <br>
  
  <fieldset class="siku kiri">
    <legend>SEGITIGA SIKU KIRI</legend>
    <form method="POST">
      <input type="number" name="tinggi_sikir" placeholder="tinggi segitiga siku kiri">
      <br>
      <input type="submit" name="submit_sikir" submit="SUBMIT">
    </form>
    <br>
    <?php
      if(isset($_POST['submit_sikir'])){
        $tinggi_sikir = $_POST['tinggi_sikir'];
        tampil_sikir($tinggi_sikir);
      }
      function tampil_sikir($tinggi_sikir){
        for($t=1; $t<=$tinggi_sikir; $t++){
          for($l=1; $l<=$t; $l++){
            echo "*";
          }
          echo "<br>";
        }
      }
    ?>
  </fieldset>
  <br>
  <br>

  <fieldset class="siku kanan">
    <legend>SEGITIGA SIKU KANAN</legend>
    <form method="POST">
      <input type="number" name="tinggi_sikan" placeholder="tinggi segitiga siku kanan">
      <br>
      <input type="submit" name="submit_sikan" submit="SUBMIT">
    </form>
    <br>
    <?php
      if(isset($_POST['submit_sikan'])){
        $tinggi_sikan = $_POST['tinggi_sikan'];
        tampil_sikan($tinggi_sikan);
      }
      function tampil_sikan($tinggi_sikan){
        $tbalik = $tinggi_sikan-1;
        for($t=1; $t<=$tinggi_sikan; $t++){
          for($s=1; $s<=$tbalik; $s++){
            echo "<a style='color:white;'>_</a>";
          }
          for($l=1; $l<=$t; $l++){
            echo "*";
          }
          $tbalik--;
          echo "<br>";
        }
      }
    ?>
  </fieldset>
  <br>
  <br>

  <fieldset class="piramida">
    <legend>PIRAMIDA</legend>
    <form method="POST">
      <input type="number" name="tinggi_piramida" placeholder="tinggi piramida">
      <br>
      <input type="submit" name="submit_piramida" submit="SUBMIT">
    </form>
    <br>
    <?php
      if(isset($_POST['submit_piramida'])){
        $tinggi_piramida = $_POST['tinggi_piramida'];
        tampil_piramida($tinggi_piramida);
      }
      function tampil_piramida($tinggi_piramida){
        $tbalik = $tinggi_piramida-1;
        $a = 0;
        for($t=1; $t<=$tinggi_piramida; $t++){
          for($s=1; $s<=$tbalik; $s++){
            echo "<a style='color:white;'>_</a>";
          }
          for($l=1; $l<=$t+$a; $l++){
            echo "*";
          }
          $tbalik--;
          $a++;
          echo "<br>";
        }
      }
    ?>
  </fieldset>
  <br>
  <br>

</body>
</html>