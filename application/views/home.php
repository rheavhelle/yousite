
<body>

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
   	<span class="sr-only">Toggle Navigation</span>
    <span class="icon-bar"></span> 
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
   </button>
  	<a class="navbar-brand" href="#label-head"><span class="glyphicon glyphicon-home"></span> Yousite</a>
 	</div> <!-- Collect the nav links, forms, and other content for toggling -->
 	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  	<ul class="nav navbar-nav navbar-right">
    <li class="page-scroll">
     <a href="#">English</a>
    </li>
    <li class="page-scroll">
     <a href="#">Lao</a>
    </li>
	 </ul>
		</div> <!-- /.navbar-collapse -->
 </div> <!-- /.container-fluid -->
</nav>


<section id="label-head">
 <div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
  		<div class="clear"></div>

				<div class="page-header home animated bounceInLeft">
					<h1>
						Where would you like to go today?<br> 
					</h1>
      <form class="form-inline search-form animated bounceInRight" role="form">
       <div class="form-group">
        <input class="form-control input-lg" type="place" placeholder="Restaurant / Night Clubs">
       </div>
       <div class="form-group">
        <input class="form-control input-lg" type="district" placeholder="District">
       </div>
       <button type="search" class="btn btn-success btn-lg">Search</button>
      </form>
				</div>
			</div>
		</div>
 </div>
</section>

<section id="category">
 <div class="container">
		<div class="row categ animated bounceInUp">
   <div class="col-sm-6 category-item">
   	<a href="<?php echo base_url();?>index.php/category" class="category-link">
     <div class="caption">
     	<div class="caption-content">
       <i><span class="glyphicon glyphicon-search"></span><br>RESTAURANTS</i>
      </div>
     </div>
     <img src="<?php echo base_url();?>img/restaurants2.png" class="img-responsive" alt="">
   	</a>
   </div>
   <div class="col-sm-6 category-item">
    <a href="<?php echo base_url();?>index.php/category" class="category-link">
     <div class="caption">
      <div class="caption-content">
       <i><span class="glyphicon glyphicon-search"></span><br>NIGHT CLUBS & BARS</i>
      </div>
     </div>
     <img src="<?php echo base_url();?>img/bar2.png" class="img-responsive" alt="">
   	</a>
   </div>
  </div>

	</div> <!--container-->
</section>