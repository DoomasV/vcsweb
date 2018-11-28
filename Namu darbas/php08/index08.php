<?php 
	$temp = array(
		'Vilnius'=> array(
			'balandis' => array(4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21)
		)
	);
	rsort($temp['Vilnius']['balandis']);
	$sum = 0;
	foreach ($temp['Vilnius']['balandis'] as $laipsniai) {
		$sum += $laipsniai;
		echo "$laipsniai ";
	};
	echo'<br />';
	echo('Vidutine temperatura: '.round($sum / count($temp['Vilnius']['balandis'])));
	echo'<br />';
	$toptemp = array_slice($temp['Vilnius']['balandis'], 0, 5);
	echo('Auksciausios: '.implode(' ',$toptemp));
	echo'<br />';
	$mintemp = array_slice($temp['Vilnius']['balandis'], -5, 5);
	echo('Zemiausios: '.implode(' ',$mintemp));
?>

