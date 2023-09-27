<?php
	

	echo "Combien y'a t'il d'adultes ?:\n" ;
	$adulte= fgets ( STDIN) ;
	$r=intval($adulte%7) ;
	$q=intval($adulte/7);
	$prix = $q*7*15+$r*18;
	echo " Prix a payer : $prix € " ;

?>
