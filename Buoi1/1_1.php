<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<?php 
		$a = 0;
		$b = 0;
		$c = 0;
		$result = "";
		if(isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["c"])){
			$a = $_GET["a"];
			$b = $_GET["b"];
			$c = $_GET["c"];
			if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
				if($a == 0){
					if ($b == 0) {
						if ($c == 0) {
							$result = "Phương trình vô số nghiệm";
						} else $result = "Phương trình vô nghiệm";
					} else $result = "Phương trình có nghiệm duy nhất x = " .(-$c/$b);
				} else{
						$delta = ($b * $b) - (4 * $a * $c);
						$x1 = (-$b+sqrt($delta))/(2*$a);
						$x2 = (-$b-sqrt($delta))/(2*$a);
						if($delta == 0) $result = "Phương trình có nghiệm kép x = ". (-$b / (2 * $a));
						else if($delta < 0) $result = "Phương trình vô nghiệm";
									else $result = "Phương trình có 2 nghiệm x1 = ". $x1. " và x2 = ".$x2 ;
				}
			}
		}
	 ?>
</head>
<body>
	<form action="#" method="get" accept-charset="utf-8">
		<h1>Giải phương trình bậc 2</h1>
		<input type="text" name="a" value="<?php echo $a ?>" placeholder="Nhập a:"> x<sup>2</sup> + 
		<input type="text" name="b" value="<?php echo $b ?>" placeholder="Nhập b:">x + <input type="text" name="c" value="<?php echo $c ?>" placeholder="Nhập c:"> = 0
		<br> <input type="submit" name="submit" value="Xem kết quả"> <?php echo $result; ?>
	</form>
</body>
</html>