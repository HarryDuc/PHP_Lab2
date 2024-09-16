<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <input type="number" name="a" id="">
    <input type="number" name="b" id="">
    <input type="submit" value="Xac nhan">
  </form>
  <?php
    function tinhTong($a, $b) {
      if ($a === $b) {
        return $a * 3;
      }else {
        return $a + $b;
      }
    }
    if (isset($_POST['a'], $_POST['b'])) {
      $a = $_POST['a'];
      $b = $_POST['b'];
      echo tinhTong($a, $b);
    }
  ?>
</body>
</html>