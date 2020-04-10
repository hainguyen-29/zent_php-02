<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div style="text-align: center">
		<p>BẢNG CỬU CHƯƠNG</p>
		<?php 
			function bangcuuchuong($n){
				for ($i=1; $i <11 ; $i++) { 
					echo "&emsp;&emsp;".$n. " x ".$i." = ".($n * $i)."&emsp;&emsp;";
					echo "<br>";
				}	
			}
	 ?>
	 <div style="float: left;"><?php bangcuuchuong(2); ?></div>
	 <div style="float: left;"><?php bangcuuchuong(3); ?></div>
	 <div style="float: left;"><?php bangcuuchuong(4); ?></div>
	 <div style="float: left;"><?php bangcuuchuong(5); ?></div>
	 <div style="float: left;"><?php bangcuuchuong(6); ?></div>
	 <div style="float: left;"><?php bangcuuchuong(7); ?></div>
	 <div style="float: left;"><?php bangcuuchuong(8); ?></div>
	 <div style="float: left;"><?php bangcuuchuong(9); ?></div>
	</div>
</body>
</html>