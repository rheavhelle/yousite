<section id="heading">
	<div class="container">

		<div class="row top">
			<div class="col-xs-12 column">
				<h3>
					Advanced Search :)
				</h3>
				<ul class="nav nav-pills nav-left">
	    <li>
	     <a href="<?php echo base_url();?>index.php">Home</a>
	    </li> 
	    <li class="active">
	     <a href="<?php echo base_url();?>index.php/category">Search</a>
	    </li>
				</ul>
			</div> <!-- 12 col -->
		</div> <!-- first row -->
				
		<div class="row categ">
			<div class="content">
				<div class="col-md-6">
					<form>
						<h2>
							Restaurant Categories
						</h2>
						<h6>Please choose what type of food you want to eat.</h6>
						<p>
							<input type="checkbox" id="asian" name="asian"> 
							<label for="asian">Asian</label>
						</p>
						<p>
							<input type="checkbox" id="cafe" name="cafe"> 
							<label for="cafe">Cafe and Bistro</label>
						</p>
						<p>
							<input type="checkbox" id="dessert" name="dessert"> 
							<label for="dessert">Dessert House</label>
						</p>
						<p>
							<input type="checkbox" id="diner" name="diner"> 
							<label for="diner">Diner</label>
						</p>
						<p>
							<input type="checkbox" id="fastfood" name="fastfood"> 
							<label for="fastfood">Fastfood</label>
						</p>
						<p>
							<input type="checkbox" id="french" name="french"> 
							<label for="french">French Cuisine</label>
						</p>
						<p>
							<input type="checkbox" i d="grill" name="grill"> 
							<label for="grill">Grill</label>
						</p>
						<p>
							<input type="checkbox" id="italian" name="italian"> 
							<label for="italian">Italian Cuisine</label>
						</p>
						<p>
							<input type="checkbox" id="noodle" name="noodle"> 
							<label for="noodle">Noodle Shop</label>
						</p>
						<p>
							<input type="checkbox" id="pizzapasta" name="pizzapasta"> 
							<label for="pizzapasta">Pizza & Pasta</label>
						</p>
						<p>
							<input type="checkbox" id="snacks" name="snacks"> 
							<label for="snacks">Snacks Bar</label>
						</p>
						<p>
							<input type="checkbox" id="steakhouse" name="steakhouse"> 
							<label for="steakhouse">Steak House</label>
						</p>
						<p>
							<input type="checkbox" id="thai" name="thai"> 
							<label for="thai">Thai Cuisine</label>
						</p>
						<p>
							<input type="checkbox" id="winehouse" name="winehouse"> 
							<label for="winehouse">Wine House</label>
						</p>
						<p>
							<input type="checkbox" id="vietnamese" name="vietnamese"> 
							<label for="vietnamese">Vietnamese Cuisine</label>
						</p>
						<p>
							<input type="checkbox" id="vegetarian" name="vegetarian"> 
							<label for="vegetarian">Vegetarian Cuisine</label>
						</p>
					</form>
				</div> <!-- first part 6 col -->

				<div class="col-md-6">
					<h2>District</h2>
					<!--Start - District-->
					<form>
						<label>
						<h6>Please select the location where you want to eat.</h6>
						 <span class="custom-dropdown custom-dropdown--white custom-dropdown--large">
						  <select class="custom-dropdown__select custom-dropdown__select--white">
						  	<option>Choose the district here</option>
						   <option>Vientiane Capital</option>
						   <option>Chanthaboury</option>
						   <option>Sisattanak</option>
						   <option>Vientiane</option>
						  </select>
							</span>
						</label>
					</form>

				</div><!-- 6 col -->
				<button class="btn btn-success btn-lg submit">SUBMIT</button>
			</div> <!--container-->
		</div><!-- row -->


	</div> <!--container-->

</section>