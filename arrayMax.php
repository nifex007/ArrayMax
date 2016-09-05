

<?php
class arrayMax {
	public static $input = array(1, 2, 3, 4, 5, 6, 7, 4, 5, 7, 8, 9, 0, -1);
	public static function findArrayMax($input) {
		$currentMax = $input[0];
		for ($i = 0; $i < count($input); $i++) {
			if ($input[$i] > $currentMax) {
				$currentMax = $input[$i];
			}
		}
		return $currentMax;
	}
}
echo arrayMax::findArrayMax(arrayMax::$input);//9

?>