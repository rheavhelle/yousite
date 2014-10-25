<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.2.0/superhero/bootstrap.min.css">
</head>



<body>
	
	<div class="container">
	<div class="panel" style="text-align:center;">
	<h2>ADD SUB - Categories</h2>
	<?php echo form_open('subcat/create');?>

	<p>
		<label for="category">Categories : </label>
		<select name="cat_id" id="categories">

		<option value="">Please select</option>
		<?php
			if (isset($categories)) {
					?>
				<option value="<?=$cval->id?>" <?php if($cval->id == set_value(cat_id)) { echo "selected"; } ?>><?=$cval->category?></option>
				<?php
							}

		?>
			

		</select>

	</p>
	

	<p>
		<label for="name">Subcategory: </label>
		<input type="text" name="name" id="name" />
	</p>

	<p>
		<input type="submit" value="submit" class="btn btn-info"/>
	</p>

	<?php echo form_close(); ?>
	</div>

</div>
</body>
</html>
