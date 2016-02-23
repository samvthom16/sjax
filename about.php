<?php include('includes/header.php');?>
	<h1>About</h1>
	<p>Some content 2</p>
	<?php
		$img_arr = ['images/pic1.png', 'images/pic2.jpg', 'images/pic3.jpg']; 
	?>
	<ul style="list-style:none;">
		<?php foreach($img_arr as $img):?>
		<li>
			<img height="100" src="<?php echo ($img);?>" />
		</li>
		<?php endforeach;?>
	</ul>
	
<?php include('includes/footer.php')?>