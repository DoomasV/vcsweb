<?php
  $cities4 = [
    'Tokijas',
    'Vašingtonas',
    'Maskva',
    'Londonas'
  ];
  print_r(implode(' ', $cities4));
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <?php
        for ($i=0; $i < count($cities4); $i++) {
          echo "<li>$cities4[$i]</li>";
        };
      ?>
    </ul>
    <ul>
      <?php
        foreach ($cities4 as $miestas) {
          echo "<li>$miestas</li>";
        };
      ?>
    </ul>
  </body>
</html>
