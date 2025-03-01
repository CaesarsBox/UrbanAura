<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login Urban Aura</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<script src="js/jquery-1.11.0.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Hind:400,500,300,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<script src="js/simpleCart.min.js"></script>
<script src="https://kit.fontawesome.com/39971aae63.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").not(".add-to-cart-btn").click(function(event){      
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<script>
    simpleCart.currency({
    symbol: 'Ksh'
});
</script>

<script src="js/simpleCart.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<!--header strat here-->
<div class="header">
	<div class="container">
		<div class="header-main">
			<div class="top-nav">
				<div class="content white">
	              <nav class="navbar navbar-default" role="navigation">
					    <div class="navbar-header">
					        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
					        </button>
					        <div class="navbar-brand logo">
								<a href="index.php"><img src="images/logo1.png" alt="" height="50" width="50"></a>
							</div>
					    </div>
					    <!--/.navbar-header-->
					 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					        <ul class="nav navbar-nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="index.php">Hoodies</a></li>
								<li><a href="index.php">Tees</a></li>
								<li><a href="index.php">Caps</a></li>     
						            
						        <li><a href="contact.php">Contact</a></li>
					        </ul>
					    </div>
					    <!--/.navbar-collapse-->
					</nav>
					<!--/.navbar-->
				</div>
			</div>
			<div class="header-right">
				<div class="search">
					<div class="search-text">
					    <input class="serch" type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"/>
					</div>
					<div class="cart box_1">
						<a href="checkout.php">
						<h3>
							<img src="images/cart1.png" alt="" height="30" width="30"/>
							<div class="total">
							<span class="simpleCart_total"></span></div>
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
					</div>    
					<div class="head-signin">
						<h5><a href="login_page.php"><i class="hd-dign"></i>Sign in</a></h5>
					</div>              
                     <div class="clearfix"> </div>					
				</div>
			</div>
		 <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header end here-->
<!--log in start here-->
<div class="login">
	<div class="container">
		<div class="login-main">
			<h1>Login</h1>
			<div class="col-md-6 login-left">
				<h2>Existing User</h2>
				<form action="login.php" method="post"> 
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<input type="submit" value="Login">
				</form>
			</div>
			<div class="col-md-6 login-right">
				<h3>New User? Create an Account</h3>
				<p>If you don't have an account, please create one below:</p>
				<a href="signup.php" class="login-btn">Create an Account</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<!--log in end here-->
<!--footer strat here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="ftr-grids-block">
				<div class="col-md-3 footer-grid">
					<ul>
						<li><a href="product.php">Hoodies</a></li>
						<li><a href="product.php">Tees</a></li>
						<li><a href="product.php">Caps</a></li>
						<li><a href="product.php">Brands</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<ul>
						<li><a href="login_page.php">Your Account</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="product.php">Store Locator</a></li>
						<li><a href="pressroom.php">Press Room</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<ul>
						<li><a href="terms.php">Website Terms</a></li>
						<li><select class="country">
										<option value="select your location">Select Country</option>
										<option value="saab">Kenya</option>
										<option value="fiat">Uganda</option>
										<option value="audi">Tanzania</option>
									</select>
							
						</li>
						<li><a href="shortcodes.php">Short Codes</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid-icon">
					<ul>
						<li><a href="#"><span class="u-tub"> </span></a></li>
						<li><a href="#"><span class="instro"> </span></a></li>
						<li><a href="#"><span class="twitter"> </span></a></li>
						<li><a href="#"><span class="fb"> </span></a></li>
						<li><a href="#"><span class="print"> </span></a></li>
					</ul>
					<form>
					<input class="email-ftr" type="text" value="Newsletter" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Newsletter';}">
					<input type="submit" value="Submit"> 
					</form>
				</div>
		    <div class="clearfix"> </div>
		  </div>
		  <div class="copy-rights">
			<p>© 2024 Urban Aura. All Rights Reserved </p>
		</div>
		</div>
	</div>
</div>
<!--footer end here-->
</body>
</html>