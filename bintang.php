<!DOCTYPE html>
<html>
<head>
  <title>BINTANG</title>
</head>
<body>
 <fieldset>
  <legend>KOTAK</legend>
  <form method="POST">
    <div>
      <label>Tinggi Kotak</label>
      <input type="number" name="tinggi">
    </div>
    <div>
      <label>Lebar Kotak</label>
      <input type="number" name="lebar">
    </div>
    <div>
      <input type="submit" name="btnsubmit" value="Submit">
    </div>
  </form>

  <?php
    if(isset($_POST['btnsubmit'])){
      $tinggi = $_POST['tinggi'];
      $lebar = $_POST['lebar'];
      kotak($tinggi, $lebar);
    }
    function kotak($tinggi, $lebar){
  ?>
  <br>
  <div>
    <?php
      for($t=1; $t<=$tinggi; $t++){
        for($l=1; $l<=$lebar; $l++){
          echo "*";
        }
        echo "<br>";
      }
    ?>
  </div>
  <?php
    }
  ?>
 </fieldset>
 <br>
 <br>
 <br>
 <fieldset>
  <legend>PIRAMIDA KANAN</legend>
  <form method="POST">
    <div>
      <label>Tinggi Piramida</label>
      <input type="number" name="tinggipiramidakanan">
    </div>
    <div>
      <input type="submit" name="btnpiramidakanan" value="Submit">
    </div>
    <br>
    <?php
      if(isset($_POST['btnpiramidakanan'])){
        $tinggipiramidakanan = $_POST['tinggipiramidakanan'];
        piramidakanan($tinggipiramidakanan);
      }
      function piramidakanan($tinggipiramidakanan){
    ?>
    <div>
      <?php
        for($t=1; $t<=$tinggipiramidakanan; $t++){
          for($b=1; $b<=$t; $b++){
            echo "*";
          }
          echo "<br>";
        }
      ?>
    </div>
    <?php
      }
    ?>
  </form>
 </fieldset>
 <br>
 <br>
 <br>
 <fieldset>
  <legend>PIRAMIDA</legend>
  <form method="POST">
    <div>
      <label>Tinggi Piramida</label>
      <input type="number" name="tinggipiramida">
    </div>
    <div>
      <input type="submit" name="btnpiramida" value="Submit">
    </div>
    <br>
    <?php
      if(isset($_POST['btnpiramida'])){
        $tinggipiramida = $_POST['tinggipiramida'];
        piramida($tinggipiramida);
      }
      function piramida($tinggipiramida){
    ?>
    <div>
      <?php
        $tbalik = $tinggipiramida-1;
        $a=0;
        for($t=1; $t<=$tinggipiramida; $t++){
          for($c=1; $c<=$tbalik; $c++){
            echo "<a style='color:white'>_</a>";
          }
          for($b=1; $b<=$t+$a; $b++){
            echo "*";
          }
          $a=$a+1;
          $tbalik=$tbalik-1;
          echo "<br>";
        }
      ?>
    </div>
    <?php
      }
    ?>
  </form>
 </fieldset>
</body>
</html>