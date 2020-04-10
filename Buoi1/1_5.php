<?php 
	$array = array(4,5,3,21,100,54,11,22);
	$j = count($array);
		echo "Mảng đã cho: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;(";
		foreach ($array as $key => $value) {
			echo $value."&emsp;";
		}
		echo ")<br>";

	for($i = 0; $i<$j; $i++){

		$result = $array[$i];
		$array[$i] = $array[$j-1];
		$array[$j-1] = $result;
		$j -= 1;

	}
		echo "Mảng sau khi đã lật ngược: (";
		foreach ($array as $key => $value) {
			echo $value."&emsp;";
		}
		echo ")";
	// function sapxep($mang){
	// 	$j = count($mang);
	// 	for($i = 0; $i<$j; $i++){

	// 		$result = $mang[$i];
	// 		$mang[$i] = $mang[$j-1];
	// 		$mang[$j-1] = $result;
	// 		$j -= 1;
	// 	}
	// 	return $mang;
	// }
	// $arrayName = array(1,2,3,4,5,6,7,8,9);
	// print_r(sapxep($arrayName));

 ?>