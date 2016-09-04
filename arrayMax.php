

<?php
 class arrayMax {
 	// array assigned to $x
 	public static $x = array(1,2,3,4,5,6,7,4,5,7,8,9,0);
 	/*
 	function findArrayMax take the array as an argument.
 	and returns $y which is the arrayMax value.
 	*/
 	public  static function findArrayMax($x){
 		//first value of array $x assigned to $y
 		$y = $x[0];
 		//looping through the array
 		for ($i=0; $i < count($x); $i++) { 
 			//comparing each member of the array to determine the highest and assigning the value to a new variable 
 			if ($x[$i] > $x[0] ) {
 				# code...
 				$y = $x[$i];
 			}
 		}
 		return $y;
 	}
 }

echo arrayMax::findArrayMax(arrayMax::$x);

?>