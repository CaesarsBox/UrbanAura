<?php
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
<script src="https://kit.fontawesome.com/39971aae63.js" crossorigin="anonymous"></script>
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
								<a href="index.html"><img src="images/logo1.png" alt="" height="50" width="50"></a>
							</div>
					    </div>
					 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					        <ul class="nav navbar-nav">
								<li><a href="index.html">Home</a></li>
								<li><a href="index.html">Hoodies</a></li>
								<li><a href="index.html">Tees</a></li>
								<li><a href="index.html">Caps</a></li>     
						            
						        <li><a href="contact.html">Contact</a></li>
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
						<a href="checkout.html">
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
<!--tems start here-->
<div class="tems">
	<div class="container">
		<div class="tems-main">
			<div class="tems-top">
				<h1>Terms and Conditions</h1>		
				
			    <h3>Introduction</h3>
				<p>
					These terms and conditions govern your use of this website; by using this website, 
					you accept these terms and conditions in full. If you disagree with these terms and 
					conditions or any part of these terms and conditions, you must not use this website.
				</p>
				<h3>License to Use Website</h3>
					<p>
						Unless otherwise stated, we own the intellectual property rights in the website and material on the website. 
						Subject to the license below, all these intellectual property rights are reserved.
						You may view, download for caching purposes only, and print pages from the website 
						for your own personal use, subject to the restrictions set out below and elsewhere in these terms and conditions.					
					</p>
				<h3>Acceptable Use</h3>
					<p>
						You must not use this website in any way that causes, or may cause, damage to the website 
						or impairment of the availability or accessibility of the website; or in any way which is 
						unlawful, illegal, fraudulent or harmful, or in connection with any unlawful, illegal, 
						fraudulent or harmful purpose or activity.
						You must not use this website to copy, store, host, transmit, send, use, publish or 
						distribute any material which consists of (or is linked to) any spyware, computer virus, 
						Trojan horse, worm, keystroke logger, rootkit or other malicious computer software.
					</p>

				<h3>Privacy Policy</h3>
					<p>
						Our privacy policy governs the use of personal information that you provide to us. By using this website, 
						you consent to the collection, use, and disclosure of your personal information as described in our Privacy Policy.
					</p>

				<h3>Limitations of Liability</h3>
					<p>
						We will not be liable to you (whether under the law of contact, the law of torts, or otherwise) 
						in relation to the contents of, or use of, or otherwise in connection with, this website: to the 
						extent that the website is provided free-of-charge, for any direct loss; for any indirect, special, 
						or consequential loss; or for any business losses, loss of revenue, income, profits or anticipated 
						savings, loss of contracts or business relationships, loss of reputation or goodwill, or loss or 
						corruption of information or data.
					</p>

				<h3>Indemnity</h3>
					<p>
						You hereby indemnify us and undertake to keep us indemnified against any losses, 
						damages, costs, liabilities, and expenses (including, without limitation, legal 
						expenses and any amounts paid by us to a third party in settlement of a claim or 
						dispute on the advice of our legal advisers) incurred or suffered by us arising out 
						of any breach by you of any provision of these terms and conditions.
					</p>
				<h3>Variation</h3>
					<p>
						We may revise these terms and conditions from time-to-time. 
						Revised terms and conditions will apply to the use of this website from the date of the 
						publication of the revised terms and conditions on this website. Please check this page 
						regularly to ensure you are familiar with the current version.
					</p>
				<h3>Entire Agreement</h3>
					<p>
						These terms and conditions, together with our Privacy Policy, constitute the 
						entire agreement between you and us in relation to your use of this website and supersede all 
						previous agreements in respect of your use of this website.
					</p>

				<h3>Law and Jurisdiction</h3>
					<p>
						These terms and conditions will be governed by and construed in accordance with the laws of Kenya, 
						and any disputes relating to these terms and conditions will be subject to the exclusive 
						jurisdiction of the courts of Kenya.
					</p>
				<h3>Data Retention:</h3>
					<p>
						We may retain certain information associated with your use of our website, including 
						but not limited to personal data, transaction history, and preferences, for as long as 
						necessary to fulfill the purposes outlined in our Privacy Policy or as required by law. 
						By using our website, you consent to the retention of such data.
					</p>

				<h3>Data Security:</h3>
					<p>
						We implement appropriate technical and organizational measures to protect the security and 
						integrity of your personal data. However, please note that no method of transmission over 
						the internet or electronic storage is completely secure, and we cannot guarantee absolute security of your data.
					</p>

				<h3>Third-Party Sharing:</h3>
					<p>
						We may share your information with third-party service providers who assist us in 
						operating our website, conducting our business, or serving you, as outlined in our 
						Privacy Policy. We do not sell or rent your personal information to third parties for 
						marketing purposes without your explicit consent.
					</p>
				<h3>Liability Disclaimer:</h3>
					<p>
						Our website and its content are provided on an "as is" and "as available" basis without 
						any warranties, express or implied. We disclaim all warranties of any kind, including but 
						not limited to merchantability, fitness for a particular purpose, and non-infringement. 
						We do not guarantee the accuracy, completeness, or reliability of any information on our website.
					</p>

				<h3>Indemnification:</h3>
					<p>
						You agree to indemnify, defend, and hold harmless our company, its affiliates, 
						officers, directors, employees, agents, and licensors from and against any and all 
						claims, liabilities, damages, losses, costs, expenses, or fees (including reasonable attorneys' fees) 
						arising from your use or misuse of our website, violation of these terms, or infringement of 
						any intellectual property or other rights of a third party.
					</p>

				<h3>Termination of Services:</h3>
					<p>
						We reserve the right to suspend or terminate your access to our website or services 
						at any time for any reason without prior notice or liability, including but not limited 
						to breach of these terms or conduct that we believe violates applicable laws or regulations.
					</p>

				<h3>Marketing Consent</h3>
					<p>
						By using this website, you consent to the collection, processing, and use of your personal data for marketing purposes by Urban Aura Ke. This includes, but is not limited to, sending promotional offers, newsletters, product updates, and other marketing communications via email, SMS, telephone, or postal mail.
						You understand and agree that your personal data, including but not limited to your name, email address, phone number, postal address, and purchase history, may be used for targeted advertising, personalized marketing campaigns, and market research analysis.

						You have the right to withdraw your consent for marketing purposes at any time by contacting us at m2kmediake@gmail.com. Withdrawal of consent does not affect the lawfulness of processing based on consent before its withdrawal.

						<h2>By providing your consent for marketing purposes, you acknowledge that you have read, 
						understood, and agree to the terms of our Privacy Policy, which governs the use of your personal information.</h2>
					</p>			
				   
				  <div class="clearfix"> </div>
			   </div>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--tems end here-->
<!--footer strat here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="ftr-grids-block">
				<div class="col-md-3 footer-grid">
					<ul>
						<li><a href="product.html">Hoodies</a></li>
						<li><a href="product.html">Tees</a></li>
						<li><a href="product.html">Caps</a></li>
						<li><a href="product.html">Brands</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<ul>
						<li><a href="login.html">Your Account</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						<li><a href="product.html">Store Locator</a></li>
						<li><a href="pressroom.html">Press Room</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<ul>
						<li><a href="terms.html">Website Terms</a></li>
						<li><select class="country">
										<option value="select your location">Select Country</option>
										<option value="saab">Kenya</option>
										<option value="fiat">Uganda</option>
										<option value="audi">Tanzania</option>
									</select>
							
						</li>
						<li><a href="shortcodes.html">Short Codes</a></li>
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