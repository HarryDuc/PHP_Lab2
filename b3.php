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
    <input type="number" name="c" id="">
    <input type="submit" value="Xac nhan">
  </form>
  <?php
    function soLonNhat($a, $b, $c) {
      return max($a, $b, $c);
    }
    if (isset($_POST['a'], $_POST['b'], $_POST['c'])) {
      $a = $_POST['a'];
      $b = $_POST['b'];
      $c = $_POST['c'];
      echo soLonNhat($a, $b, $c);
    }
  ?>
</body>

</html>