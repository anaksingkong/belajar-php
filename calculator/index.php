<?php

if(isset($_POST["hitung"])){
  $bil1 = $_POST["bil1"];
  $bil2 = $_POST["bil2"];
  $operasi = $_POST["operasi"];
  switch ($operasi){
    case "tambah":
      $hasil = $bil1 + $bil2;
    break;
    case "kurang":
      $hasil = $bil1 - $bil2;
    break;
    case "kali":
      $hasil = $bil1 * $bil2;
    break;
    case "bagi":
      $hasil = $bil1 / $bil2;
    break;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div action="index.php" method="POST" class="calculator">
    <h2 class="judul">calculator</h2>
    <form action="index.php" method="POST" class="form">
      <input type="text" name="bil1" class="bil" placeholder="Bil 1">
      <input type="text" name="bil2" class="bil" placeholder="Bil 2">
      <select name="operasi" class="bil">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="bagi">/</option>
        <option value="kali">*</option>
      </select>
      <div class="action">
        <input type="submit" name="hitung" value="Calculation" class="tombol">
        <input type="reset" name="reset" value="Clear" class="tombol">
      </div>
      <?php if(isset($_POST['hitung'])){ ?>
        <input style="background-color: #fff;" type="text" value="<?= $hasil ?>" name="hasil" class="bil" placeholder="Hasil" disabled>
      <?php } else { ?>
        <input style="background-color: #fff;" type="text" value="0" name="hasil" class="bil" placeholder="Hasil" disabled>
      <?php } ?>
    </form>
    <div class="footer">
      <p>Build with Love</p>
    </div>
  </div>
  
</body>
</html>