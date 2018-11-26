<?php
$x = 10;
$y = 7;
$z = 0;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php $z = $x+$y; ?>
    <p><?php echo $x . ' + '. $y . ' = ' . $z; ?></p>
    <?php $z = $x-$y; ?>
    <p><?php echo $x . ' - '. $y . ' = ' . $z;  ?></p>
    <?php $z = $x*$y; ?>
    <p><?php echo $x . ' * '. $y . ' = ' . $z;  ?></p>
    <?php $z = $x/$y; ?>
    <p><?php echo $x . ' / '. $y . ' = ' . $z; ?></p>
    <?php $z = $x%$y; ?>
    <p><?php echo $x . ' % '. $y . ' = ' . $z;  ?></p>
  </body>
</html>
