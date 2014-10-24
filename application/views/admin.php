<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.2.0/superhero/bootstrap.min.css">
</head>


<body>

<div class="container">
	<h2>CREATE</h2>
	<?php echo form_open('site/create');?>

	<p>
		<label for="category">Category: </label>
		<input type="text" name="category" id="category" />
	</p>

	<p>
		<label for="description">Description: </label>
		<input type="text" name="description" id="description" />
	</p>

	<p>
		<input type="submit" value="submit" />
	</p>

	<?php echo form_close(); ?>
	
</div>

</body>
</html>