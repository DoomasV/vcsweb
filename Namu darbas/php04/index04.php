<?php
  $cities = ['Berlynas', 'Roma', 'Londonas'];
  $cities[] = 'Tokijas';
  print_r($cities);
  echo '<br/>';
  $cities2 = [
    'tokijas' => 13.6,
    'vasingtonas' => 0.6,
    'maskva' => 11.5,
  ];
  $cities2 ['londonas'] = 8.6;
  print_r($cities2);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <li><?php echo($cities[1]); ?></li>
    </ul>
    <ul>
      <li><?php echo('Gyventoju skaicius: '.$cities2['tokijas'].' mln.'); ?></li>
    </ul>
  </body>
</html>
