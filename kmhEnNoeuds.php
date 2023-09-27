<?php
	echo "Saisir la vitesse (en noueds ) du bateau \"Ar Solen\" :\n" ;
	$vitesse = fgets ( STDIN) ;
	echo "Vitesse : " ,$vitesse , " noueds\n";
	$vitesseNoeuds = $vitesse / 1.852 ;
	echo " Résultat de la converstion : $vitesseNoeuds " ;

?>
