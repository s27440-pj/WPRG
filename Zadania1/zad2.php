<?php

	function is_prime ($number) {
		if ($number == 2)
			return True;
		if ($number %2 == 0 || $number <= 1)
			return False;
		
		$num_sqrt = floor(sqrt($number) + 1);
		
		for ($i = 3; $i <= $num_sqrt; $i += 2) {
			if ($number % $i == 0)
				return False;
			return True;
		}
	}

	echo (is_prime(2) . "\n");
	echo (is_prime(5) . "\n");

?>