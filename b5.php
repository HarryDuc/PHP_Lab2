<?php
function checkNT($a) {
  if ($a < 2)
    return false;
  for ($i=2; $i <= sqrt($a); $i++) {
    if ($a % $i == 0) {
      return false;
    }
  }
  return true;
}
function xuat() {
  for ($i=1; $i <= 10; $i++) {
    if (checkNT($i)) {
      echo "$i la so nguyen to.<br>";
    }
  }
}
echo xuat();
