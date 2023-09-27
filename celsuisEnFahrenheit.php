<?php
	echo "Saisir la vitesse en C:\n" ;
	$c = fgets ( STDIN) ;
	echo "Température : " ,$c , " C\n";
	$tempF = $c * 1.8 + 32  ;
	echo " Résultat de la converstion : $tempF " ;

?>
