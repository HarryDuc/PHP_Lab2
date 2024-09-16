<!DOCTYPE html>
<html lang="en">
<!-- <head> -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <input type="number" name="a" id="">
    <input type="submit" value="Xac nhan">
  </form>
  <?php
    function tinhTong(...$a) {
      return $a;
    }
    if (isset($_POST['a'], $_POST['b'])) {
      $a = $_POST['a'];
      echo tinhTong($a);
    }
  ?>
</body>
</html>