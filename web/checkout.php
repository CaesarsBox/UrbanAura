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
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/39971aae63.js" crossorigin="anonymous"></script>
<script src="js/simpleCart.min.js"></script>

	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
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
<style>
	.shopping-cart {
	width: 750px;
	height: auto;
	margin: 80px auto;
	background: #FFFFFF;
	box-shadow: 1px 2px 3px 0px rgba(0,0,0,0.10);
	border-radius: 6px;
	
	display: flex;
	flex-direction: column;
	}
	.title {
	height: 80px;
	border-bottom: 1px solid #E1E8EE;
	padding: 20px 30px;
	color: #776b5e;
	font-size: 18px;
	font-weight: 400;
	}
	
	.item {
	padding: 20px 30px;
	height: 120px;
	display: flex;
	}
	

	@keyframes animate {
	0%   { background-position: left;  }
	50%  { background-position: right; }
	100% { background-position: right; }
	}
	.image {
	margin-right: 50px;
	}
	.description {
	padding-top: 10px;
	margin-right: 60px;
	width: 115px;
	}
	
	.description span {
	display: block;
	font-size: 14px;
	color: #43484D;
	font-weight: 400;
	}
	
	.description span:first-child {
	margin-bottom: 5px;
	}
	.description span:last-child {
	font-weight: 300;
	margin-top: 8px;
	color: #86939E;
	}
	.quantity {
	padding-top: 20px;
	margin-right: 60px;
	}
	.quantity input {
	-webkit-appearance: none;
	border: none;
	text-align: center;
	width: 32px;
	font-size: 16px;
	color: #43484D;
	font-weight: 300;
	}

	.total-price {
	width: 83px;
	padding-top: 27px;
	text-align: center;
	font-size: 16px;
	color: #43484D;
	font-weight: 300;
	}
	@media (max-width: 800px) {
	.shopping-cart {
		width: 100%;
		height: auto;
		overflow: hidden;
	}
	.item {
		height: auto;
		flex-wrap: wrap;
		justify-content: center;
	}
	
	.image,
	.quantity,
	.description {
		width: 100%;
		text-align: center;
		margin: 6px 0;
	}
	
	}
	.pay-button {
		text-decoration: none;
		color: #fff;
		background:#752dea;
		padding: 0.4em 0.8em;
		font-size: 0.9em;
		margin-top: 1.3em;
		display: inline-block;  
	}
	.pay-button:hover {
		background:#EA572D;
		transition: 0.5s all;
		-webkit-transition: 0.5s all;
		-o-transition: 0.5s all;
		-moz-transition: 0.5s all;
		-ms-transition: 0.5s all;
	}
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
        // Check if the user is logged in (you'll need to set a variable indicating the login status)
        var isLoggedIn = <?php echo isset($_SESSION['user_fname']) ? 'true' : 'false'; ?>;
        
        // Get the element containing the "Sign in" link
        var signInElement = document.getElementById("signin-link");

        // If the user is logged in, replace "Sign in" with their first name
        if (isLoggedIn) {
            // Get the user's first name from the session variable
            var firstName = "<?php echo isset($_SESSION['user_fname']) ? $_SESSION['user_fname'] : ''; ?>";

            // Replace the text content of the link with the user's first name
            signInElement.innerHTML = '<a href="profile.php"><i class="hd-dign"></i>' + firstName + '</a>';
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
<!--start-ckeckout-->
<div class="checkout">
    <div class="shopping-cart">
        <!-- Title -->
        <div class="title">
            Shopping Bag
        </div>
        <div class="cart-items-container">
            <div class="cart-items-list">
                <div class="item">

                </div>
            </div>
        </div>
		<br>
		<br>
        <div class="total-order-amount">
            <p>Total Order Amount: <span class="simpleCart_total"></span></p>
            <button class="pay-button">Pay Now</button>
        </div>
    </div>
</div>
<script>
    // Wait for the document to be ready
    $(document).ready(function() {
        // Add click event listener to the Pay Now button
        $('.pay-button').click(function() {
            // Check if the user is logged in (You need to replace this condition with your actual check)
            var isLoggedIn = checkIfUserIsLoggedIn(); // You need to implement this function
            
            // If the user is logged in, proceed with payment
            if (isLoggedIn) {
                // Implement your payment logic here
                // For example, redirect the user to the payment page
                window.location.href = 'payment.php';
            } else {
                // If the user is not logged in, redirect to the login page
                window.location.href = 'login.php';
            }
        });
    });
</script>



<!--end-ckeckout-->

<!--end-ckeckout-->
<script>
    // Function to populate cart items
function populateCartItems() {
    var cartItemsList = $('.cart-items-list');

		// Clear existing cart items
		cartItemsList.empty();

    	// Loop through each item in the cart
		simpleCart.each(function (item, index) {
			// Create HTML for cart item block
			var cartItemHTML = '<div class="item">' +
				'<div class="buttons">' +
				'<span class="delete-btn"><img src="images/close.svg" alt="" height="20" width="20"/></span>' +
				'</div>' +
				'<div class="image">' +
				'<img src="' + item.get('image') + '" alt="' + item.get('name') + '" height="100" width="100" />' +
				'</div>' +
				'<div class="description">' +
				'<span>' + item.get('name') + '</span>' +
				'<span>' + item.get('price') + '</span>' +
				'<span>' + item.get('description') + '</span>' +
				'<span>' + item.get('color') + '</span>' +
				'</div>' +
				'<div class="quantity">' +
				'<input type="text" name="name" value="' + item.quantity() + '">' +
				'</div>' +
				'<div class="total-price">$' + item.total() + '</div>' +
				'</div>';

			// Append the cart item HTML to the cart items list
			cartItemsList.append(cartItemHTML);
		});
	}

	$(document).ready(function () {
		// Handle click event of delete button using event delegation
		$('.cart-items-list').on('click', '.delete-btn', function () {
			var $item = $(this).closest('.item'); // Get the parent item element
			var productName = $item.find('.description span:first').text(); // Get the product name
			
			// Loop through each item in the cart
			simpleCart.each(function (item, index) {
				// Check if the current item matches the product name
				if (item.get('name') === productName) {
					// Remove the item from the cart
					item.remove();
					return false; // Exit the loop early since the item has been removed
				}
			});
		});

		populateCartItems();

		// Listen for changes in the cart and update the display accordingly
		simpleCart.bind('update', function () {
			populateCartItems();
		});

		// Handle the pay button click event
		$('.pay-button').click(function () {
			// Implement your payment logic here
			// For example, redirect the user to the PayPal checkout page
			// window.location.href = 'https://www.paypal.com/checkout';
		});
	});
</script>

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