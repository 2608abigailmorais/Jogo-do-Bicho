<?php
	function sorteio (){
		$vet = array();
		for ($x=0; $x < 5; $x++)
			$vet[] = rand(0, 9999);
		return $vet;
	}
?>