<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="a">
    <input type="submit" value="Xac nhan">
  </form>
  <?php
    function checkNumber($a) {
      if ($a % 2 == 0) {
        return true;
      }
      return false;
    }
    if (isset($_POST['a'])) {
      $a = $_POST['a'];
      if (checkNumber($d)) {
        echo "$a la so chan.";
      }else {
        echo "$a la so le.";
      }
    }
  ?>
</body>
</html>