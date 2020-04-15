<?php
	$severName = "localhost";

	$userName = "root";

	$passWord = "";

	$db				= "test";

// Tạo kết nối
	$connection_mysql = new mysqli($severName, $userName, $passWord,$db);
// Tạo Truy vấn 


	// $query = "SELECT posts.*,categories.title as 'category_title' FROM `posts` INNER JOIN categories ON posts.category_id=categories.id";

	$query = "SELECT posts.*,categories.title as 'category_title' FROM posts INNER JOIN categories ON posts.category_id=categories.id WHERE posts.status = 1 ORDER BY posts.id asc";
	$query_categories = "SELECT * FROM categories";

	$result = mysqli_query($connection_mysql, $query);
	$result_categories = mysqli_query($connection_mysql, $query_categories);

// THỰC HIỆN TRUY VẤN DỮ LIỆU TRONG TABLE posts
	// Tạo Mảng Lưu Dữ Liệu Của Các Cột
	$posts = array();
	$categories = array();
	
//posts
	while ($row = mysqli_fetch_assoc($result)) {
		$posts[] = $row;
	}
//categories
	while ($row_categories = mysqli_fetch_assoc($result_categories)) {
		$categories[] = $row_categories;
	}

	// $query_loadpost = "SELECT * FROM posts WHERE id= 4";
	// $result_loadpost = mysqli_query($connection_mysql, $query_loadpost);

	// $loadpost = mysqli_fetch_assoc($result_loadpost);

	// print_r($loadpost);
	// die;
	?>
	