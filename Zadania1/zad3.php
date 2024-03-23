<?php

	$n = 10;
	$num1 = 1;
	$num2 = 1;
	$table[0] = $num1;
	$table[1] = $num2;

	for ($i = 2; $i < $n; $i++)
	{
		$num = $num1 + $num2;
		$table[$i] = $num;
		$num1 = $num2;
		$num2 = $num;
	}
	
	$j = 0;
	for ($i = 0; $i < $n; $i++)
	{
		if ($table[$i] % 2 != 0)
		{
			echo ($j++ . " " . $table[$i] . "\n");
		}
	}

?>