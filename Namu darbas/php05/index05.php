<?php
  $cities3 = array(
    'Tokijas' => array(13.6, 1868, 'Japonija'),
    'Vasingtonas' => array(0.6, 1790, 'JAV'),
    'Maskva' => array(11.5, 1147, 'Rusija')
  );
  $cities3['Londonas'] = array(8.6, 43, 'Anglija');
  print_r($cities3);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <li><?php echo('Gyventojų skaičius: '.$cities3['Londonas'][0].' mln.'); ?></li>
      <li><?php echo('Įkurtas: '.$cities3['Londonas'][1].' m.'); ?></li>
      <li><?php echo('Šalis: '.$cities3['Londonas'][2]); ?></li>
    </ul>
  </body>
</html>
