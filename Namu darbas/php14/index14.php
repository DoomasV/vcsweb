<?php
  $dabartiniaiMetai = date('Y');
  $sukurimoMetai = 2020;
  function sukurimoMetai($x, $y) {
    if ($x == $y ) {
      return $x;
    } elseif ($x < $y) {
      return $x;
    } else {
      return $y.'-'.$x;
    }
  }

  echo '<p>&copy; '.sukurimoMetai($dabartiniaiMetai, $sukurimoMetai).'</p>';
 ?>
