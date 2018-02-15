<?php

class Calculator {
	
	public function add($a, $b) {
		return $a + $b;
	}

	public function sub($a, $b) {
		return $a - $b;
	}

	public function mul($a, $b) {
		return $a * $b;
	}

	public function div($a, $b) {
		return $a / $b;
	}

	public function avg($array) {		
		for($cpt = 0, $sum = 0; $cpt < count($array); $cpt++) {
			$sum += $array[$cpt];
		}
		return $sum / $cpt;
	}

}

?>
