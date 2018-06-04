<?php
  for ($i=0; $i <= 10; $i++) {
    echo $i .'<br>';
  }
  $a = 1;
  while ($a <= 10) {
    echo $a .'<br>';
    $a++;
  };
  $b = 2;
  do {
    echo $b .'<br>';
    $b++;
  } while ($b <= 10);

  $names = ['A','S','D'];
  foreach ($names as $name) {
    echo $name . '<br>';
  }
?>
