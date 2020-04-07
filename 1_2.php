<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<?php 
		$sum = 0;
		$ts = 0;
		$ms = 1;
		$n = "";
		$result = "";
		if(isset($_POST["n"])){
			$n = $_POST["n"];
			if($n > 0){
				for ($i=0; $i < $n; $i++) { 
					$ts = $i + 1;
					$ms = $ms * ($i +1);
					$ps = $ts/$ms;
					$sum = $sum + $ps;
				} $result = "S = ".$sum;	
			} else $result = "Phải nhập n là số tự nhiên lớn hơn 0";
		}
	 ?>
</head>
<body>
	<h1>Tính tổng S = 1 /1! + 2 /2! + ....+ n / n!</h1>
	<form action="#" method="post" accept-charset="utf-8">
		Nhập n: <input type="number" name="n" value="" placeholder="<?php echo $n; ?>"><br><br>
		<input type="submit" name="" value="Xem kết quả">
		<?php echo $result; ?>
	</form>
</body>
</html>