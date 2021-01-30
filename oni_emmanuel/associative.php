<?php
	//array of 5 top favorite football players and their jersey number 
	$players =[
		//"Emmannuel FC" => [
		//	"Favourite Players" => [
				"Mohammed Salah" =>[
					"Jersey No" => 11,
				],
				"Roberto Firminho" =>[
					"Jersey No" => 9,
				],
				"Sadio Mane" =>[
					"Jersey No" => 10,
				],
				"Virgil Van Dirk" =>[
					"Jersey No" => 4,
				],
				"Alexander Trent-Arnord" =>[
					"Jersey No" => 44,
				],
			//],
		//],
	];
	
	//sorting Ascending
	asort($players);
	print_r($players);
	echo "<br><br><br>";
	

	//sorting Descending
	ksort($players);
	print_r($players);
	
?>