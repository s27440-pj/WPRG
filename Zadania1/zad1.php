<?php
	$fruits[0] = "apple";
	$fruits[1] = "orange";
	$fruits[2] = "lemon";
	$fruits[3] = "pomello";
	$fruits[4] = "strawberry";
	
	function reverse($text) {
		$len = strlen($text);
		$new_text = '';
		
		for ($i = $len - 1; $i >= 0; $i--) {
			$new_text .= $text[$i];
		}
		return $new_text;
	}
	
	for ($i = 0; $i < count($fruits); $i++) {
		if ($fruits[$i][0] == "p"){
			echo (reverse($fruits[$i]) . ' starts with p' . "\n");
		} else {
			echo (reverse($fruits[$i]) . ' doessnt start with p' . "\n");
		}		
	}
?>