<!DOCTYPE html>
<html>
<head>
  <title>BINTANG</title>
</head>
<body>
  <fieldset class="kotak">
    <legend>KOTAK</legend>
    <form method="POST">
      <table>
        <tr>
          <td><input type="number" name="tinggi_kotak" placeholder="tinggi kotak"></td>
        </tr>
        <tr>
          <td><input type="number" name="lebar_kotak" placeholder="lebar kotak"></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit_kotak" value="Submit"></td>
        </tr>
      </table>
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
  <br>

  <fieldset class="siku">
    <legend>SEGITIGA SIKU</legend>
    <form method="POST">
      <table>
        <tr>
          <td><input type="number" name="tinggi_siku" placeholder="tinggi segitiga siku"></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit_siku" value="Submit"></td>
        </tr>
      </table>
    </form>
    <br>
    <?php
      if(isset($_POST['submit_siku'])){
        $tinggi_siku = $_POST['tinggi_siku'];
        tampil_siku($tinggi_siku);
      }
      function tampil_siku($tinggi_siku){
        for($t=1; $t<=$tinggi_siku; $t++){
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
  <br>

  <fieldset class="piramida">
    <legend>PIRAMIDA</legend>
    <form method="POST">
      <table>
        <tr>
          <td><input type="number" name="tinggi_piramida" placeholder="tinggi piramida"></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit_piramida" value="Submit"></td>
        </tr>
      </table>
    </form>
    <br>
    <?php
      if(isset($_POST['submit_piramida'])){
        $tinggi_piramida = $_POST['tinggi_piramida'];
        tampil_piramida($tinggi_piramida);
      }
      function tampil_piramida($tinggi_piramida){
        $tbalik = $tinggi_piramida-1;
        $a=0;
        for($t=1; $t<=$tinggi_piramida; $t++){
          for($u=1; $u<=$tbalik; $u++){
            echo "<a style='color:white'>_</a>";
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