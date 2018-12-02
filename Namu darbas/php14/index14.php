<?php
  $dabartiniaiMetai = date('Y');
  $sukurimoMetai = 2015;
  function sukurimoMetai($x, $y) {
    if ($x == $y ) {
      return $x;
    } else {
      return $y.'-'.$x;
    }
  }

  echo '<p>&copy; '.sukurimoMetai($dabartiniaiMetai, $sukurimoMetai).'</p>';

 //  $data1 = new DateTime();
 //  $data2 = new DateTime();
 //
 //  $los = new DateTimeZone('America/Los_Angeles');
 //  $vil = new DateTimeZone('Europe/Vilnius');
 //
 //  $data1 -> setTimezone($los);
 //  $data2 -> setTimezone($vil);
 //
 //  echo "Laikas Los: ".$data1->format('g:ia, l,F j,Y').'<br>';
 //
 // ?>
