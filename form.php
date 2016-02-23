<?php include('includes/header.php');?>
	<h1>Form</h1>
	
	<form data-behaviour="sjax-form" action="form.php" method="POST">
		<input type="text" name="name" placeholder="Full Name" />
		<input type="text" name="email" placeholder="Email Address" />
		<input type="submit" value="Submit!" />
	</form>
	
<?php include('includes/footer.php')?>