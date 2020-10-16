<!DOCTYPE html>
<html>
<head>
  <title>BINTANG</title>
</head>
<body>
  <fieldset style='margin-bottom:5vh;'>
    <legend>KOTAK</legend>
    <form method="POST" style='margin-bottom:2vh;'>
      <table>
        <tr>
          <td><input type="number" name="t_kotak" placeholder="tinggi kotak"></td>
        </tr>
        <tr>
          <td><input type="number" name="l_kotak" placeholder="lebar kotak"></td>
        </tr>
        <tr>
          <td><input type="submit" name="s_kotak" placeholder="submit"></td>
        </tr>
      </table>
    </form>
    <?php
      if(isset($_POST['s_kotak'])){
        $t_kotak = $_POST['t_kotak'];
        $l_kotak = $_POST['l_kotak'];
        if(!empty($t_kotak) && !empty($l_kotak)){
          tampil_kotak($t_kotak, $l_kotak);
        }else{
          echo "<script type='text/javascript'>alert('data tidak lengkap')</script>";
        }
      }
      function tampil_kotak($t_kotak, $l_kotak){
        for($t=1; $t<=$t_kotak; $t++){
          for($l=1; $l<=$l_kotak; $l++){
            echo "*";
            echo "<a style='color:white;'>_</a>";
          }
          echo "<br>";
        }
      }
    ?>
  </fieldset>

  <fieldset style='margin-bottom:5vh;'>
    <legend>SEGITIGA SIKU KIRI</legend>
    <form method="POST" style='margin-bottom:2vh;'>
      <table>
        <tr>
          <td><input type="number" name="t_sikir" placeholder="tinggi segitiga siku kiri"></td>
        </tr>
        <tr>
          <td><input type="submit" name="s_sikir" placeholder="submit"></td>
        </tr>
      </table>
    </form>
    <?php
      if(isset($_POST['s_sikir'])){
        $t_sikir = $_POST['t_sikir'];
        if(!empty($t_sikir)){
          tampil_sikir($t_sikir);
        }else{
          echo "<script type='text/javascript'>alert('data tidak lengkap')</script>";
        }
      }
      function tampil_sikir($t_sikir){
        for($t=1; $t<=$t_sikir; $t++){
          for($l=1; $l<=$t; $l++){
            echo "*";
          }
          echo "<br>";
        }
      }
    ?>
  </fieldset>

  <fieldset style='margin-bottom:5vh;'>
    <legend>SEGITIGA SIKU KANAN</legend>
    <form method="POST" style='margin-bottom:2vh;'>
      <table>
        <tr>
          <td><input type="number" name="t_sikan" placeholder="tinggi segitiga siku kanan"></td>
        </tr>
        <tr>
          <td><input type="submit" name="s_sikan" placeholder="submit"></td>
        </tr>
      </table>
    </form>
    <?php
      if(isset($_POST['s_sikan'])){
        $t_sikan = $_POST['t_sikan'];
        if(!empty($t_sikan)){
          tampil_sikan($t_sikan);
        }else{
          echo "<script type='text/javascript'>alert('data tidak lengkap')</script>";
        }
      }
      function tampil_sikan($t_sikan){
        $tbalik=$t_sikan-1;
        for($t=1; $t<=$t_sikan; $t++){
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

  <fieldset style='margin-bottom:5vh;'>
    <legend>PIRAMIDA</legend>
    <form method="POST" style='margin-bottom:2vh;'>
      <table>
        <tr>
          <td><input type="number" name="t_piramida" placeholder="tinggi piramida"></td>
        </tr>
        <tr>
          <td><input type="submit" name="s_piramida" placeholder="submit"></td>
        </tr>
      </table>
    </form>
    <?php
      if(isset($_POST['s_piramida'])){
        $t_piramida = $_POST['t_piramida'];
        if(!empty($t_piramida)){
          tampil_piramida($t_piramida);
        }else{
          echo "<script type='text/javascript'>alert('data tidak lengkap')</script>";
        }
      }
      function tampil_piramida($t_piramida){
        $tbalik=$t_piramida-1;
        $a=0;
        for($t=1; $t<=$t_piramida; $t++){
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