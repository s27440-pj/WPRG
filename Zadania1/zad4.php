<?php

	$data = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
galley of type and scrambled it to make a type specimen book. It has survived not only five
centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
and more recently with desktop publishing software like Aldus PageMaker including versions of
Lorem Ipsum.";

	// changing new line into space (needs to be done to make an array properly)
	$data  =str_replace("\n", " ", $data);
	$table = explode(" ", $data);
	
	$separators = [",", ".", ";", "?", "!", "'"];
	
	function contains_separator ($word, $separators) {
		foreach ($separators as $separator) {
			if (strpos($word, $separator)) {
				return true;
			}
		}
		return false;
	}
	
	for ($i = 0; $i < count($table); $i++) {
		if (contains_separator($table[$i], $separators)) {
			array_splice($table, $i, 1);
		}
	}
	
	// 'Lorem' (index 0) has no key, because there is no index -1 (that would be key)
	// should it be like that? PHP warns me about it.
	$new_array = [];
	$odd_index = true;
	foreach ($table as $word) {
		if (!$odd_index) {
			$key = $word;
		} else {
			$new_array[$key] = $word;
		}
		$odd_index = !$odd_index;
	}

	foreach ($new_array as $key => $word) {
		echo ('key: ' . $key . ' value: ' . $word . "\n");
	}
?>