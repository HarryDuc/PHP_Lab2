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
    function kiemTraNumber($canh) {
      return is_numeric($canh) && $canh > 0;
    }
    function CVHinhChuNhat($a, $b) {
      return ($a + $b) * 2;
    }
    if (isset($_POST['a'], $_POST['b'])) {
      $a = $_POST['a'];
      $b = $_POST['b'];
      if (kiemTraNumber($a) && kiemTraNumber($b)) {
        echo CVHinhChuNhat($a, $b);
      }else {
        echo "Nhap dung";
      }
    }
  ?>
</body>

</html>