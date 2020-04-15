<?php require_once('connection.php');
//LAY 3 BAI MOI NHAT
	$id = $_GET['id'];
	$query_3post ="SELECT posts.*,categories.title AS category_title FROM posts LEFT JOIN categories ON posts.category_id=categories.id WHERE categories.id =".$id." ORDER BY created_at desc LIMIT 3";
	$result_categories_3post = mysqli_query($connection_mysql, $query_3post);
	$categories_3post = array();

	
	while ($row2 = mysqli_fetch_assoc($result_categories_3post)) {
		$categories_3post[] = $row2;
	}
//Lay 5 bai tiep theo
	$query_5post ="SELECT posts.*,categories.title AS category_title FROM posts LEFT JOIN categories ON posts.category_id=categories.id WHERE categories.id =".$id." ORDER BY created_at desc LIMIT 3,5";
	$result_categories_5post = mysqli_query($connection_mysql, $query_5post);
	$categories_5post = array();

	
	while ($row2 = mysqli_fetch_assoc($result_categories_5post)) {
		$categories_5post[] = $row2;
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>WebMag HTML Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		
		<!-- Header -->
		<header id="header">
			<!-- Nav -->
			<div id="nav">
				<!-- Main Nav -->
				<div id="nav-fixed">
					<div class="container">
						<!-- logo -->
						<div class="nav-logo">
							<a href="index.php" class="logo"><img src="./img/logo.png" alt=""></a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<ul class="nav-menu nav navbar-nav">
							<li><a href="#">News</a></li>
							<li><a href="#">Popular</a></li>
							<?php require_once('menu.php')  ?>
						</ul>
						<!-- /nav -->

						<!-- search & aside toggle -->
						<div class="nav-btns">
							<button class="aside-btn"><i class="fa fa-bars"></i></button>
							<button class="search-btn"><i class="fa fa-search"></i></button>
							<div class="search-form">
								<input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
								<button class="search-close"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Main Nav -->

				<!-- Aside Nav -->
				<div id="nav-aside">
					<!-- nav -->
					<div class="section-row">
						<ul class="nav-aside-menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="#">Join Us</a></li>
							<li><a href="#">Advertisement</a></li>
							<li><a href="contact.html">Contacts</a></li>
						</ul>
					</div>
					<!-- /nav -->

					<!-- widget posts -->
					<div class="section-row">
						<h3>Recent Posts</h3>
						<div class="post post-widget">
							<a class="post-img" href="blog-post.php"><img src="./img/widget-2.jpg" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="blog-post.php">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
							</div>
						</div>

						<div class="post post-widget">
							<a class="post-img" href="blog-post.php"><img src="./img/widget-3.jpg" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="blog-post.php">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
							</div>
						</div>

						<div class="post post-widget">
							<a class="post-img" href="blog-post.php"><img src="./img/widget-4.jpg" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="blog-post.php">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
							</div>
						</div>
					</div>
					<!-- /widget posts -->

					<!-- social links -->
					<div class="section-row">
						<h3>Follow us</h3>
						<ul class="nav-aside-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
					<!-- /social links -->

					<!-- aside nav close -->
					<button class="nav-aside-close"><i class="fa fa-times"></i></button>
					<!-- /aside nav close -->
				</div>
				<!-- Aside Nav -->
			</div>
			<!-- /Nav -->
			
			<!-- Page Header -->
			<div class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<ul class="page-header-breadcrumb">
								<li><a href="index.php">Home</a></li>
								<li><?php foreach ($categories_3post as $key => $value) {
									echo $value['category_title'];
									break;
								}
								 ?></li>
							</ul>
							<h1><?php foreach ($categories_3post as $key => $value) {
									echo $value['category_title'];
									break;
								}
								 ?></h1>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
		</header>
		<!-- /Header -->
		
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<!-- post -->
							<?php foreach ($categories_3post as $key => $value) {
								
							 ?>
							<div class="col-md-12">
								<div class="post post-thumb">
									<a class="post-img" href="blog-post.php"><img src="<?php echo $value['thumbnail'] ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-<?php 
												$_color= 1;
												if($value['category_title'] == "JavaScript") $_color = 2;
												if($value['category_title'] == "CSS") $_color = 4;
												if($value['category_title'] == "jQuery") $_color = 3;
												echo $_color;
											 ?>" href="#"><?php echo $value['category_title'] ?></a>
											<span class="post-date"><?php echo $value['created_at'] ?></span>
										</div>
										<h3 class="post-title"><a href="blog-post.php"><?php echo $value['title'] ?></a></h3>
									</div>
								</div>
							</div>
						<?php break;
					} ?>
							<!-- /post -->
										
							<!-- post -->
							<?php 
							$_count = 0;
							
							foreach ($categories_3post as $key => $value) {
								if($_count > 0 && $_count <3){
							  ?>
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="blog-post.php"><img src="<?php echo $value['thumbnail'] ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-<?php 
												$_color= 1;
												if($value['category_title'] == "JavaScript") $_color = 2;
												if($value['category_title'] == "CSS") $_color = 4;
												if($value['category_title'] == "jQuery") $_color = 3;
												echo $_color;
											 ?>" href="#"><?php echo $value['category_title'] ?></a>
											<span class="post-date"><?php echo $value['created_at'] ?></span>
										</div>
										<h3 class="post-title"><a href="blog-post.php"><?php echo $value['title'] ?></a></h3>
									</div>
								</div>
							</div>
						<?php }

						 $_count++;
						} ?>
							<!-- /post -->

							
							
							<div class="clearfix visible-md visible-lg"></div>
							
							<!-- ad -->
							<div class="col-md-12">
								<div class="section-row">
									<a href="#">
										<img class="img-responsive center-block" src="./img/ad-2.jpg" alt="">
									</a>
								</div>
							</div>
							<!-- ad -->
							
							<!-- post -->
							<?php foreach ($categories_5post as $key => $value) {
						 ?>
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="blog-post.php"><img src="<?php echo $value['thumbnail'] ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-<?php 
												$_color= 1;
												if($value['category_title'] == "JavaScript") $_color = 2;
												if($value['category_title'] == "CSS") $_color = 4;
												if($value['category_title'] == "jQuery") $_color = 3;
												echo $_color;
											 ?>" href="#"><?php echo $value['category_title'] ?></a>
											<span class="post-date"><?php echo $value['created_at'] ?></span>
										</div>
										<h3 class="post-title"><a href="blog-post.php"><?php echo $value['title'] ?></a></h3>
										<p><?php echo $value['desciption'] ?></p>
									</div>
								</div>
							</div>
						<?php } ?>
							<!-- /post -->
							
							<!-- post -->
							
							<!-- /post -->

							<!-- post -->
							
							<!-- /post -->
							
							<!-- post -->
							
							<!-- /post -->
							
							<div class="col-md-12">
								<div class="section-row">
									<button class="primary-button center-block">Load More</button>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
						
						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Most Read</h2>
							</div>

							<div class="post post-widget">
								<a class="post-img" href="blog-post.php"><img src="./img/widget-1.jpg" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.php">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
								</div>
							</div>

							<div class="post post-widget">
								<a class="post-img" href="blog-post.php"><img src="./img/widget-2.jpg" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.php">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
								</div>
							</div>

							<div class="post post-widget">
								<a class="post-img" href="blog-post.php"><img src="./img/widget-3.jpg" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.php">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
								</div>
							</div>

							<div class="post post-widget">
								<a class="post-img" href="blog-post.php"><img src="./img/widget-4.jpg" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.php">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
								</div>
							</div>
						</div>
						<!-- /post widget -->
						
						<!-- catagories -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Catagories</h2>
							</div>
							<div class="category-widget">
								<ul>
									<li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
									<li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
									<li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
									<li><a href="#" class="cat-3">CSS<span>35</span></a></li>
								</ul>
							</div>
						</div>
						<!-- /catagories -->
						
						<!-- tags -->
						<div class="aside-widget">
							<div class="tags-widget">
								<ul>
									<li><a href="#">Chrome</a></li>
									<li><a href="#">CSS</a></li>
									<li><a href="#">Tutorial</a></li>
									<li><a href="#">Backend</a></li>
									<li><a href="#">JQuery</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">Development</a></li>
									<li><a href="#">JavaScript</a></li>
									<li><a href="#">Website</a></li>
								</ul>
							</div>
						</div>
						<!-- /tags -->
						
						<!-- archive -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Archive</h2>
							</div>
							<div class="archive-widget">
								<ul>
									<li><a href="#">Jan 2018</a></li>
									<li><a href="#">Feb 2018</a></li>
									<li><a href="#">Mar 2018</a></li>
								</ul>
							</div>
						</div>
						<!-- /archive -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- Footer -->
		<footer id="footer">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-5">
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="index.php" class="logo"><img src="./img/logo.png" alt=""></a>
							</div>
							<ul class="footer-nav">
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Advertisement</a></li>
							</ul>
							<div class="footer-copyright">
								<span>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">About Us</h3>
									<ul class="footer-links">
										<li><a href="about.html">About Us</a></li>
										<li><a href="#">Join Us</a></li>
										<li><a href="contact.html">Contacts</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">Catagories</h3>
									<ul class="footer-links">
										<li><a href="category.php">Web Design</a></li>
										<li><a href="category.php">JavaScript</a></li>
										<li><a href="category.php">Css</a></li>
										<li><a href="category.php">Jquery</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="footer-widget">
							<h3 class="footer-title">Join our Newsletter</h3>
							<div class="footer-newsletter">
								<form>
									<input class="input" type="email" name="newsletter" placeholder="Enter your email">
									<button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
								</form>
							</div>
							<ul class="footer-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</footer>
		<!-- /Footer -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
