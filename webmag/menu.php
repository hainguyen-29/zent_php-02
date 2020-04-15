<?php 
	foreach ($categories as $value) {
?>	
		<li class="cat-<?php $_color= 1;
		if($value['title'] == "JavaScript") $_color = 2;
		if($value['title'] == "CSS") $_color = 3;
		if($value['title'] == "jQuery") $_color = 4;
		echo $_color; ?>"><a href="category.php?id=<?php echo $value['id']; ?>"><?php echo $value['title']; ?></a></li>
 <?php }
  ?>