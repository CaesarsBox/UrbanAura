<?php
// Start the session
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Urban Aura</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<script src="js/jquery-1.11.0.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Hind:400,500,300,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha512-tQxjl28o+Y4RxvWDV0SngPH8famT/S0YDzXtSTjBb+Jbz28oQK4CxH/YFLXSyY0eJAr7TGvgwycWjY3iyB+JjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="js/simpleCart.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").not(".add-to-cart-btn").click(function(event){      
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<script src="https://kit.fontawesome.com/39971aae63.js" crossorigin="anonymous"></script>
<script>
	var savedCurrency = localStorage.getItem('cartCurrency');

	if (!savedCurrency) {
		savedCurrency = 'Ksh';
		localStorage.setItem('cartCurrency', savedCurrency);
	}

	simpleCart.currency({
		symbol: savedCurrency
	});

</script>
<script src="js/simpleCart.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
<style>
	.modal {
	display: none; 
	position: absolute;
	z-index: 1; 
	left: 0;
	top: 0;
	width: 100%; 
	height: 100%;
	overflow: auto; 
	background-color: rgba(0, 0, 0, 0.4); 
	}

	.modal-content {
	background-color: #fefefe;
	margin: 10% auto; 
	padding: 20px;
	border: 1px solid #888;
	width: 20%; 
	}

	.modal-content ul {
	list-style: none;
	padding: 0;
	text-align: right;
	}

	.modal-content ul li {
	margin-bottom: 10px;
	}

	.modal-content ul li a {
	display: inline-block;
	}

	.close {
	color: #aaa;
	float: right;
	font-size: 28px;
	font-weight: bold;
	}

	.close:hover,
	.close:focus {
	color: black;
	text-decoration: none;
	cursor: pointer;
	}
</style>
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
					 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					        <ul class="nav navbar-nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="index.php">Hoodies</a></li>
								<li><a href="index.php">Tees</a></li>
								<li><a href="index.php">Caps</a></li>     
						            
						        <li><a href="contact.php">Contact</a></li>
					        </ul>
					    </div>
					</nav>
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
					<div class="head-signin" id="signin-section">
						<h5 id="signin-link"><a href="login.php" id="signin-link"><i class="hd-dign"></i>Sign in</a></h5>
					</div>								
                     <div class="clearfix"> </div>					
				</div>
			</div>
		 <div class="clearfix"> </div>
		</div>
	</div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var isLoggedIn = <?php echo isset($_SESSION['user_fname']) ? 'true' : 'false'; ?>;
		var signInElement = document.getElementById("signin-link");

		if (isLoggedIn) {
			var firstName = "<?php echo isset($_SESSION['user_fname']) ? $_SESSION['user_fname'] : ''; ?>";
			signInElement.innerHTML = '<a href="#" onclick="openProfileModal()"><i class="hd-dign"></i>' + firstName + '</a>';
		} else {
			signInElement.innerHTML = '<a href="login.php"><i class="hd-dign"></i> Sign In</a>';
		}
    });
    </script>
<!-- HTML for the popup modal -->

<div id="profileModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <!-- Profile links -->
    <ul style="list-style: none; padding: 0; text-align: center;">
      <li style="margin-bottom: 10px;"><a href="my_account.php"><i class="fas fa-user"></i> My Account</a></li>
      <li style="margin-bottom: 10px;"><a href="settings.php"><i class="fas fa-cog"></i> Settings</a></li>
      <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
  </div>
</div>



<script>
	document.addEventListener("DOMContentLoaded", function() {
  var profileIcon = document.getElementById("profile-icon");
  var modal = document.getElementById("profileModal");
  var closeBtn = document.getElementsByClassName("close")[0];

  profileIcon.addEventListener("click", function() {
    modal.style.display = "block";
  });

  closeBtn.addEventListener("click", function() {
    modal.style.display = "none";
  });

  window.addEventListener("click", function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  });
});

</script>

<script>
// JavaScript to open the popup modal when the user clicks on their name
document.addEventListener("DOMContentLoaded", function() {
    var isLoggedIn = <?php echo isset($_SESSION['user_fname']) ? 'true' : 'false'; ?>;
    var signInElement = document.getElementById("signin-link");

    if (isLoggedIn) {
        var firstName = "<?php echo isset($_SESSION['user_fname']) ? $_SESSION['user_fname'] : ''; ?>";
        signInElement.innerHTML = '<a href="#" onclick="openProfileModal()"><i class="hd-dign"></i>' + firstName + '</a>';
    }
});

// JavaScript function to open the popup modal
function openProfileModal() {
    var modal = document.getElementById("profileModal");
    modal.style.display = "block";
}

// JavaScript function to close the popup modal
document.getElementsByClassName("close")[0].onclick = function() {
    var modal = document.getElementById("profileModal");
    modal.style.display = "none";
}
</script>

<!--header end here-->
<!--banner strat here-->
<div class="banner">
    <div class="container">
        <div class="banner-main">
            <div class="col-md-6 banner-left">
                <img id="product-image" src="images/jacko.png" alt="" class="img-responsive">
            </div>
            <div class="col-md-6 banner-right simpleCart_shelfItem">
                <span class="bann-heart"> </span>
                <h2>Urban Aura Hoodie</h2>
                <h1 class="description-hood">In my Hood Era</h1>
                <h5 class="item_price">Ksh200.00</h5>
                <h6>Size Charts</h6>
                <select class="bann-size size-select">
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                </select>
                <ul class="bann-btns">
                    <li>
                        <select class="bann-color">
                            <option value="black">Black</option>
                            <option value="white">White</option>
                        </select>
                    </li>
                    <li><a href="#" class="item_add">Add To Cart</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>


<!--banner end here-->
<!--product start here-->
<div class="product">
	<div class="container">
		<div class="product-main">
			<div class=" product-menu-bar">
				<script>
				$(document).ready(function() {

					var savedCurrency = localStorage.getItem('cartCurrency');
	
					if (!savedCurrency) {
						savedCurrency = 'Ksh';
						localStorage.setItem('cartCurrency', savedCurrency);
					}

					simpleCart.currency({
						symbol: savedCurrency
					});
					// Function to add product to cart from the product section
					function addToCartFromProductSection(event) {
						event.preventDefault(); // Prevent default behavior of anchor tag
						var $product = $(this).closest('.home-grid');
						var productName = $product.find('.product-name').text();
						var itemPrice = $product.find('.item_price').text();                        
						var itemSize = $product.find('.size-select').val();
						var itemColor = $product.find('.color-select').val();
						var itemImage = $product.find('.home-product-top img').attr('src');
						var itemDescription = $product.find('.description').text();

						simpleCart.add({
							name: productName,
							price: itemPrice,
							size: itemSize,
							color: itemColor,
							image: itemImage,
							description: itemDescription,
							quantity: 1
						});
					}
					$('.add-to-cart-btn').click(addToCartFromProductSection);
				});

				</script>
								
				
			</div>
			<div class="col-md-4 home-grid">
				<div class="home-product-top">
					<img src="images/jacko.png" alt="" class="img-responsive zoom-img">
				</div>
				<div class="home-product-bottom">
					<h3 class="product-name">T-Shirt</h3>
					<p class="description">Siwaoni</p>
					<div class="product-details">
						<div class="size-color-select">
							<select class="bann-size color-select">
								<option value="black">Black</option>
								<option value="white">White</option>
							</select>
							<select class="bann-size size-select">
								<option value="select">Select Size</option>
								<option value="small">Small</option>
								<option value="medium">Medium</option>
								<option value="large">Large</option>
							</select>
						</div>
						<a href="#" class="add-to-cart-btn simpleCart">
							<div class="cart-button-new">	
								<img src="images/cart.png" alt="Cart Icon" class="cart-icon" height="30" width="30"> Add to cart
							</div>							
						</a>
					</div>
					<div class="srch">
						<p>Ksh</p><span class="item_price">700.00</span>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 home-grid">
				<div class="home-product-top">
					<img src="images/jacko.png" alt="" class="img-responsive zoom-img">
				</div>
				<div class="home-product-bottom">
					<h3 class="product-name">Hoodie</h3>
					<p class="description">Siwaoni</p>
					<div class="product-details">
						<div class="size-color-select">
							
							<select class="bann-size color-select">
								<option value="black">Black</option>
								<option value="white">White</option>
							</select>
							
							<select class="bann-size size-select">
								<option value="select">Select Size</option>
								<option value="small">Small</option>
								<option value="medium">Medium</option>
								<option value="large">Large</option>
							</select>
						</div>
						<a href="#" class="add-to-cart-btn simpleCart">
							<div class="cart-button-new">	
								<img src="images/cart.png" alt="Cart Icon" class="cart-icon" height="30" width="30"> Add to cart
							</div>							
						</a>
					</div>
					<div class="srch">
						<p>Ksh</p><span class="item_price">2300.00</span>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 home-grid">
				<div class="home-product-top">
					<img src="images/jacko.png" alt="" class="img-responsive zoom-img">
				</div>
				<div class="home-product-bottom">
					<h3 class="product-name">Cap</h3>
					<p class="description">Siwaoni</p>
					<div class="product-details">
						<div class="size-color-select">
							
							<select class="bann-size color-select">
								<option value="black">Black</option>
								<option value="white">White</option>
							</select>
							
							<select class="bann-size size-select">
								<option value="select">Select Size</option>
								<option value="small">Small</option>
								<option value="medium">Medium</option>
								<option value="large">Large</option>
							</select>
						</div>
						<a href="#" class="add-to-cart-btn simpleCart">
							<div class="cart-button-new">	
								<img src="images/cart.png" alt="Cart Icon" class="cart-icon" height="30" width="30"> Add to cart
							</div>							
						</a>
					</div>
					<div class="srch">
						<p>Ksh</p><span class="item_price">500.00</span>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 home-grid">
				<div class="home-product-top">
					<img src="images/jacko.png" alt="" class="img-responsive zoom-img">
				</div>
				<div class="home-product-bottom">
					<h3 class="product-name">Marvin</h3>
					<p class="description">Siwaoni</p>
					<div class="product-details">
						<div class="size-color-select">
							
							<select class="bann-size color-select">
								<option value="black">Black</option>
								<option value="white">White</option>
							</select>
							
							<select class="bann-size size-select">
								<option value="select">Select Size</option>
								<option value="small">Small</option>
								<option value="medium">Medium</option>
								<option value="large">Large</option>
							</select>
						</div>
						<a href="#" class="add-to-cart-btn simpleCart">
							<div class="cart-button-new">	
								<img src="images/cart.png" alt="Cart Icon" class="cart-icon" height="30" width="30"> Add to cart
							</div>							
						</a>
					</div>
					<div class="srch">
						<p>Ksh</p><span class="item_price">300.00</span>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 home-grid">
				<div class="home-product-top">
					<img src="images/jacko.png" alt="" class="img-responsive zoom-img">
				</div>
				<div class="home-product-bottom">
					<h3 class="product-name">V-Neck Tee</h3>
					<p class="description">Siwaoni</p>
					<div class="product-details">
						<div class="size-color-select">
							
							<select class="bann-size color-select">
								<option value="black">Black</option>
								<option value="white">White</option>
							</select>
							
							<select class="bann-size size-select">
								<option value="select">Select Size</option>
								<option value="small">Small</option>
								<option value="medium">Medium</option>
								<option value="large">Large</option>
							</select>
						</div>
						<a href="#" class="add-to-cart-btn simpleCart">
							<div class="cart-button-new">	
								<img src="images/cart.png" alt="Cart Icon" class="cart-icon" height="30" width="30"> Add to cart
							</div>							
						</a>
					</div>
					<div class="srch">
						<p>Ksh</p><span class="item_price">450.00</span>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 home-grid">
				<div class="home-product-top">
					<img src="images/jacko.png" alt="" class="img-responsive zoom-img">
				</div>
				<div class="home-product-bottom">
					<h3 class="product-name">Plain T-Shirt</h3>
					<p class="description">Siwaoni</p>
					<div class="product-details">
						<div class="size-color-select">
							
							<select class="bann-size color-select">
								<option value="black">Black</option>
								<option value="white">White</option>
							</select>
							
							<select class="bann-size size-select">
								<option value="select">Select Size</option>
								<option value="small">Small</option>
								<option value="medium">Medium</option>
								<option value="large">Large</option>
							</select>
						</div>
						<a href="#" class="add-to-cart-btn simpleCart">
							<div class="cart-button-new">	
								<img src="images/cart.png" alt="Cart Icon" class="cart-icon" height="30" width="30"> Add to cart
							</div>							
						</a>
					</div>
					<div class="srch">
						<p>Ksh</p><span class="item_price">500.00</span>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 home-grid">
				<div class="home-product-top">
					<img src="images/jacko.png" alt="" class="img-responsive zoom-img">
				</div>
				<div class="home-product-bottom">
					<h3 class="product-name">Jacket</h3>
					<p class="description">Siwaoni</p>
					<div class="product-details">
						<div class="size-color-select">
							
							<select class="bann-size color-select">
								<option value="black">Black</option>
								<option value="white">White</option>
							</select>
							
							<select class="bann-size size-select">
								<option value="select">Select Size</option>
								<option value="small">Small</option>
								<option value="medium">Medium</option>
								<option value="large">Large</option>
							</select>
						</div>
						<a href="#" class="add-to-cart-btn simpleCart">
							<div class="cart-button-new">	
								<img src="images/cart.png" alt="Cart Icon" class="cart-icon" height="30" width="30"> Add to cart
							</div>							
						</a>
					</div>
					<div class="srch">
						<p>Ksh</p><span class="item_price">1300.00</span>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 home-grid">
				<div class="home-product-top">
					<img src="images/jacko.png" alt="" class="img-responsive zoom-img">
				</div>
				<div class="home-product-bottom">
					<h3 class="product-name">Bag</h3>
					<p class="description">Siwaoni</p>
					<div class="product-details">
						<div class="size-color-select">
							
							<select class="bann-size color-select">
								<option value="black">Black</option>
								<option value="white">White</option>
							</select>
							
							<select class="bann-size size-select">
								<option value="select">Select Size</option>
								<option value="small">Small</option>
								<option value="medium">Medium</option>
								<option value="large">Large</option>
							</select>
						</div>
						<a href="#" class="add-to-cart-btn simpleCart">
							<div class="cart-button-new">	
								<img src="images/cart.png" alt="Cart Icon" class="cart-icon" height="30" width="30"> Add to cart
							</div>							
						</a>
					</div>
					<div class="srch">
						<p>Ksh</p><span class="item_price">1200.00</span>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 home-grid">
				<div class="home-product-top">
					<img src="images/jacko.png" alt="" class="img-responsive zoom-img">
				</div>
				<div class="home-product-bottom">
					<h3 class="product-name">Ball</h3>
					<p class="description">Siwaoni</p>
					<div class="product-details">
						<div class="size-color-select">
							
							<select class="bann-size color-select">
								<option value="black">Black</option>
								<option value="white">White</option>
							</select>
							
							<select class="bann-size size-select">
								<option value="select">Select Size</option>
								<option value="small">Small</option>
								<option value="medium">Medium</option>
								<option value="large">Large</option>
							</select>
						</div>
						<a href="#" class="add-to-cart-btn simpleCart">
							<div class="cart-button-new">	
								<img src="images/cart.png" alt="Cart Icon" class="cart-icon" height="30" width="30"> Add to cart
							</div>							
						</a>
					</div>
					<div class="srch">
						<p>Ksh</p><span class="item_price">1500.00</span>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<!--product end here-->

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
						<li><a href="login.php">Your Account</a></li>
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