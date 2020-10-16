<!DOCTYPE html>
<html>
<head>
  <title>BINTANG</title>
</head>
<body>
  <div class="bintang_kotak">
    <fieldset>
      <legend>KOTAK</legend>
      <form method="POST">
        <div><input type="number" name="tinggi_kotak" placeholder="tinggi kotak"></div>
        <div><input type="number" name="lebar_kotak" placeholder="lebar kotak"></div>
        <div><input type="submit" name="kotak_bintang"></div>
      </form>
      <br>
      <?php
        if(isset($_POST['kotak_bintang'])){
          $tinggi_kotak = $_POST['tinggi_kotak'];
          $lebar_kotak = $_POST['lebar_kotak'];
          kotakbintang($tinggi_kotak, $lebar_kotak);
        }
        function kotakbintang($tinggi_kotak, $lebar_kotak){
          for($t=1; $t<=$tinggi_kotak; $t++){
            for($l=1; $l<=$lebar_kotak; $l++){
              echo "*";
            }
            echo "<br>";
          }
        }
      ?>
    </fieldset>
  </div>
  
  <br>
  <br>
  <div class="bintang_siku">
    <fieldset>
      <legend>SEGITIGA SIKU</legend>
      <form method="POST">
        <div><input type="number" name="tinggi_siku" placeholder="tinggi segitiga"></div>
        <div><input type="submit" name="siku_bintang"></div>
      </form>
      <br>
      <?php
        if(isset($_POST['siku_bintang'])){
          $tinggi_siku = $_POST['tinggi_siku'];
          sikubintang($tinggi_siku);
        }
        function sikubintang($tinggi_siku){
          for($t=1; $t<=$tinggi_siku; $t++){
            for($l=1; $l<=$t; $l++){
              echo "*";
            }
            echo "<br>";
          }
        }
      ?>
    </fieldset>
  </div>

  <br>
  <br>
  <div class="bintang_piramida">
    <fieldset>
      <legend>PIRAMIDA</legend>
      <form method="POST">
        <div><input type="number" name="tinggi_piramida" placeholder="tinggi piramida"></div>
        <div><input type="submit" name="piramida_bintang"></div>
      </form>
      <br>
      <?php
        if(isset($_POST['piramida_bintang'])){
          $tinggi_piramida = $_POST['tinggi_piramida'];
          piramidabintang($tinggi_piramida);
        }
        function piramidabintang($tinggi_piramida){
          $tbalik = $tinggi_piramida-1;
          $a = 0;
          for($t=1; $t<=$tinggi_piramida; $t++){
            for($tb=1; $tb<=$tbalik; $tb++){
              echo "<a style='color:white;'>_</a>";
            }
            for($l=1; $l<=$t+$a; $l++){
              echo "*";
            }
            $a++;
            $tbalik--;
            echo "<br>";
          }
        }
      ?>
    </fieldset>
  </div>
</body>
</html>