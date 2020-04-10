<?php 
	$arrayName = array(1,4,2,6,9,100,45,8,20);
	echo "<pre>";
	print_r($arrayName);
	echo "</pre>";
	$max = $arrayName[0];
	for($i = 0; $i<count($arrayName); $i++){
		if($arrayName[$i] >= $max){
			$max = $arrayName[$i];
			$position = $i;
		}
	}
	echo "Số lớn nhất trong dãy là ".$max. ". Và nó nằm ở vị trí thứ ".$position;
 ?>