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
	
	$start = 1;
	$end = 23;
	
	for ($i = $start; $i <= $end; $i++)
	{
		if (is_prime($i))
			echo ($i . "\n");
	}
?>