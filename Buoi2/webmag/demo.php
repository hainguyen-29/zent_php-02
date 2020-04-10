<?php 
	$severName = "localhost";

	$userName = "root";

	$passWord = "";

	$db				= "zent";

// Tạo kết nối
	$connection_mysql = new mysqli($severName, $userName, $passWord,$db);
// Tạo Truy vấn 
	$query = "SELECT * FROM posts";

	$result = mysqli_query($connection_mysql, $query);
// THỰC HIỆN TRUY VẤN DỮ LIỆU TRONG TABLE posts
	// Tạo Mảng Lưu Dữ Liệu Của Các Cột
	$posts = array();

	while ($row = mysqli_fetch_assoc($result)) {
		$posts[] = $row;
	}
	
	
	
	$test_value = array();
	foreach ($posts as $value) {
		$test_value[] = $value['id'];
	}
echo $count = count($posts);
echo "<pre>";
print_r($test_value);

 ?>