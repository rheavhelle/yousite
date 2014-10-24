<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.2.0/superhero/bootstrap.min.css">
</head>


<body>

<div class="container">
	<div class="panel" style="text-align:center;">
	<h2>ADD Sub-Categories</h2>
	<?php echo form_open('a_subcat/create');?>

	<p>
		<label for="category">Category: &nbsp</label>
		<input type="text" name="category" id="category" />
	</p>

	<p>
		<label for="category">Sub-Category: &nbsp</label>
		<input type="text" name="category" id="category" />
	</p>

	<p>
		<input type="submit" value="submit" class="btn btn-info"/>
	</p>

	<?php echo form_close(); ?>
	</div>
</div>

</body>
</html>