<?php

class baju {

	public $ukuran 		= 'xl';
	public $berbahan 	= 'sutra';
	public $model		= 'pria';
	public $harga 		= 25.000;

}

$baju1 = new baju ;
echo "baju". '<br>' ; 
echo "	Ukuran baju 		: " .$baju1->ukuran. 	'<br>' ; 
echo "	Baju berbahan 		: " .$baju1->berbahan. 	'<br>' ;
echo "	Model baju 			: " .$baju1->model. 	'<br>' ; 
echo "	Harga 				: " .$baju1->harga. 	'<br>' ;  


?>
