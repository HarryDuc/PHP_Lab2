<?php
//in ra nam nhuan trong khoang 2000 - 2024

function KTNamNhuan() {
  for ($i= 2000; $i <= 2024; $i++) {
    if ($i % 4 == 0 || $i % 100 == 0 && $i % 400 == 0) {
      echo "$i la nam nhuan.<br>";
    }
  }
}
echo KTNamNhuan();