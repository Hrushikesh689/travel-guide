<!DOCTYPE html>
<html>
<head>
	<title>Travel Guide</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type=text/css href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">TRAVELLER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>-->
      <div class="container">
  <div class="btn-group">
    <div class="btn-group">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Services</button>
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      About</button>
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Contact</button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Tablet</a>
        <a class="dropdown-item" href="#">Smartphone</a>
      </div>
    </div>
  </div>
</div>

 
        <!--<a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>-->
    <form action="login.php">
    	<button type="button" class="btn btn-success"><a class="login" href="login.php">Login</a></button>
    </form>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img1.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">	
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="images/img3.jpg" class="img-fluid abouimg">
			<!--</div>
			<div class="col-lg-6 col-md-6 col-12">
			<h2  class="display-4">I am Hrushikesh</h2>
			<p class="py-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<a href="about.php" class="btn btn-success">Check More</a>
			</div>-->
		<div class="col-lg-6 col-md-6 col-12"></div>
  				<h2>I am Hrushikesh</h2>
  				<p>Click on the button to toggle between showing and hiding content.</p>
  				<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
  			<div id="demo" class="collapse">
    			Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  			</div>
  	</div>
	
</section>

<section class="my-5">	
	<div class="py-5">
		<h2 class="text-center">Our Services</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" style="width:400px">
  					<img class="card-img-top" src="images/img4.jpg" alt="Card image">
  					<div class="card-body">
    		  			<h4 class="card-title">Beautiful Nature:)</h4>
    		  			<p class="card-text">Some example text.</p>
              			<a href="#" class="btn btn-primary">See Profile
              			</a>
  		    		</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" style="width:400px">
  					<img class="card-img-top" src="images/img4.jpg" alt="Card image">
  					<div class="card-body">
    		  			<h4 class="card-title">Beautiful Nature:)</h4>
    		  			<p class="card-text">Some example text.</p>
              			<a href="#" class="btn btn-primary">See Profile
              			</a>
  		    		</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" style="width:400px">
  					<img class="card-img-top" src="images/img4.jpg" alt="Card image">
  					<div class="card-body">
    		  			<h4 class="card-title">Beautiful Nature:)</h4>
    		  			<p class="card-text">Some example text.</p>
              			<a href="#" class="btn btn-primary">See Profile
              			</a>
  		    		</div>
				</div>
			</div>
		</div>
	</div>		
</section>

<section class="my-5">	
	<div class="py-5">
		<h2 class="text-center">Our Gallery</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img5.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img5.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img5.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img5.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img5.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img5.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img5.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img5.jpg" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/img5.jpg" class="img-fluid pb-4">
			</div>
		</div>	
	</div>

</section>

<section class="my-5">	
	<div class="py-5">
		<h2 class="text-center">Contact Us</h2>
	</div>

	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="Email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="Mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Comments</label>
				<textarea class ="form-control" name="comments">
				</textarea>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>	
	</div>
</section>

<foooter>
	<p class="p-3 bg-dark text-white text-center">@hrushikeshrocks55</p>
</foooter>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>