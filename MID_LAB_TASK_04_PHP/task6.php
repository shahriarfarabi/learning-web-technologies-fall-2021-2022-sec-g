<?php
	$flag = 0;
	$search = "Farabi";
	$arr = [10, 20, 30, 40, 50, "Farabi", "Arif", "Joy", "Mango",  "Apple", "Orange"];
	foreach ($arr as $value) {
		if ($value == $search) {
			$flag = 1;
		}
	}
	if ($flag == 1) {
			echo "Found :" . $search;
		}
		else{
			echo "Not found";
		}
?>