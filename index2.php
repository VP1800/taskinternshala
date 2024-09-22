<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="initial-scale=1, width=device-width">
  	<link rel="stylesheet"  href="./CSS/style.css" />
    <link rel="stylesheet"  href="./CSS/effect.css" />
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.6.0.min.css" />
    <link rel="stylesheet" href="./responsiveness.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<!-- ajax loader -->
<div id="overlay">
    <div class="cv-spinner">
        <span class="spinner"></span>
    </div>
</div>

<!-- Alert box -->
<div id="alert-box" class="w3-danger w3-center w3-padding w3-round w3-hide"></div>
  	
  	<div class="website">
    		<div class="frame-parent">
      			<div class="frame-group">
        				<div class="frame-container">
          					<div class="frame-div">
                                <div class="recipe-wrapper">
                                    <a href="#">
                                      <div class="recipe">Recipe</div>
                                    </a>
                                  </div>
                                  <div class="recipe-wrapper">
                                    <a href="#">
                                      <div class="recipe-wrapper">
                                        <div class="recipe">Brand Ambassador</div>
                                      </div>
                                    </a>
                                  </div>
                                  <div class="recipe-wrapper">
                                    <a href="#">
                                      <div class="recipe">Student Ambassador</div>
                                    </a>
                                  </div>
                                  <div class="recipe-wrapper">
                                    <a href="#">
                                      <div class="recipe">Gift Card</div>
                                    </a>
                                  </div>
                                  <div class="recipe-wrapper">
                                    <a href="#">
                                      <div class="recipe">Quickly Pass</div>
                                    </a>
                                  </div>
                                  <div class="recipe-wrapper">
                                    <a href="#">
                                      <div class="recipe">Refer a Friend</div>
                                    </a>
                                  </div>
          					</div>
          					<div class="list-parent">
                                <i class="fas fa-list list-icon"></i>
                                
                                <div class="recipe-wrapper">
                                  <b class="shop-by-department">Shop by Department</b>
                                </div>
                              </div>
        				</div>
        				<div class="frame-parent1">
          					<div class="login-parent">
                                    <div class="login">
                                        <i class="fas fa-user"></i>
                                        <div class="log-in">Log in</div>
                                    </div>
            						<div class="signup">
              							<div class="log-in">Sign up</div>
            						</div>
            						<div class="cart">
                                        <i class="fas fa-shopping-cart"></i>
                                        <div class="log-in">Cart</div>
                                        <div class="log-in">0</div>
                                      </div>
          					</div>
          					<div class="frame-parent2">
            						<div class="search-for-pujas-wrapper">
              							<div class="shop-by-department">Search for pujas...</div>
            						</div>
            						<div class="search-wrapper">
                                        <i class="fas fa-search"></i>
                                    </div>
          					</div>
          					<div class="frame-parent3">
            						<div class="quickly-wrapper">
              							<div class="log-in">Quickly</div>
            						</div>
            						<div class="recipe-wrapper">
              							<div class="log-in">Shopping in</div>
            						</div>
            						<div class="parent">
                                        <div class="log-in" style="display: inline-block;">60016</div>
                                        <span class="fa fa-angle-down" style=""></span>
                                      </div>
          					</div>
        				</div>
      			</div>
      			<div class="searchbar-parent">
        				<div class="searchbar">
                            <div class="search-for-pujas-wrapper">
                                <div class="shop-by-department">Search for pujas...</div>
                          </div>
                          <div class="search-wrapper">
                              <i class="fas fa-search"></i>
                          </div>
        				</div>
        				<div class="services-parent">
          					<div class="services">
            						<img class="services-child" alt="" src="./asset/img/category1.png">
            						
            						<div class="online-puja-wrapper">
              							<b class="shop-by-department">Online Puja</b>
            						</div>
          					</div>
          					<div class="services1">
            						<img class="services-child" alt="" src="./asset/img/category2.png">
            						
            						<div class="online-puja-wrapper">
              							<b class="shop-by-department">Astrology</b>
            						</div>
          					</div>
        				</div>
        				<b class="our-online-services">Our Online Services</b>
      			</div>
      			<div class="frame-parent4">
        				<div class="frame-parent5">
          					<div class="group-wrapper">
            						<div class="group-div">
              							<div class="graduation-cap-wrapper">
                                            <i class="fa fa-birthday-cake graduation-cap-icon" style="color: pink;"></i>
                								
              							</div>
              							<div class="education-wrapper">
                								<b class="shop-by-department">All</b>
              							</div>
            						</div>
          					</div>
          					<div class="group-container">
            						<div class="group-div">
              							<div class="graduation-cap-wrapper">
                								<i class="fa fa-birthday-cake graduation-cap-icon" style="color: pink;"></i>
                								
              							</div>
              							<div class="education-wrapper">
                								<b class="shop-by-department">Love & Relationship</b>
              							</div>
            						</div>
          					</div>
          					<div class="group-wrapper">
            						<div class="group-div">
              							<div class="graduation-cap-wrapper">
                								<i class="fa fa-birthday-cake graduation-cap-icon" style="color: pink;"></i>
                								
              							</div>
              							<div class="education-wrapper">
                								<b class="shop-by-department">Good Health</b>
              							</div>
            						</div>
          					</div>
          					<div class="group-wrapper">
            						<div class="group-div">
              							<div class="graduation-cap-wrapper">
                								<i class="fa fa-birthday-cake graduation-cap-icon" style="color: pink;"></i>
                								
              							</div>
              							<div class="education-wrapper">
                								<b class="shop-by-department">Children</b>
              							</div>
            						</div>
          					</div>
          					<div class="group-wrapper">
            						<div class="group-div">
              							<div class="graduation-cap-wrapper">
                								<i class="fa fa-birthday-cake graduation-cap-icon" style="color: pink;"></i>
                								
              							</div>
              							<div class="education-wrapper">
                								<b class="shop-by-department">Education</b>
              							</div>
            						</div>
          					</div>
          					<div class="group-wrapper">
            						<div class="group-div">
              							<div class="graduation-cap-wrapper">
                								<i class="fa fa-birthday-cake graduation-cap-icon" style="color: pink;"></i>
                								
              							</div>
              							<div class="education-wrapper">
                								<b class="shop-by-department">Legal</b>
              							</div>
            						</div>
          					</div>
          					<div class="group-wrapper">
            						<div class="group-div">
              							<div class="graduation-cap-wrapper">
                								<i class="fa fa-birthday-cake graduation-cap-icon" style="color: pink;"></i>
                								
              							</div>
              							<div class="education-wrapper">
                								<b class="shop-by-department">Money & Career</b>
              							</div>
            						</div>
          					</div>
          					<div class="group-wrapper">
            						<div class="group-div">
              							<div class="graduation-cap-wrapper">
                								<i class="fa fa-birthday-cake graduation-cap-icon" style="color: pink;"></i>
                								
              							</div>
              							<div class="education-wrapper">
                								<b class="shop-by-department">House & Property</b>
              							</div>
            						</div>
          					</div>
          					<div class="group-wrapper">
            						<div class="group-div">
              							<div class="graduation-cap-wrapper">
                								<i class="fa fa-birthday-cake graduation-cap-icon" style="color: pink;"></i>
                								
              							</div>
              							<div class="education-wrapper">
                								<b class="shop-by-department">Black Magic & Evil Eye</b>
              							</div>
            						</div>
          					</div>
          					<div class="group-wrapper">
            						<div class="group-div">
              							<div class="graduation-cap-wrapper">
                								<i class="fa fa-birthday-cake graduation-cap-icon" style="color: pink;"></i>
                								
              							</div>
              							<div class="education-wrapper">
                								<b class="shop-by-department">Mental Stress & Depression</b>
              							</div>
            						</div>
          					</div>
          					<div class="group-wrapper">
            						<div class="group-div">
              							<div class="graduation-cap-wrapper">
                								<i class="fa fa-birthday-cake graduation-cap-icon" style="color: pink;"></i>
                								
              							</div>
              							<div class="education-wrapper">
                								<b class="shop-by-department">Peace & Property</b>
              							</div>
            						</div>
          					</div>
          					<div class="group-wrapper">
            						<div class="group-div">
              							<div class="graduation-cap-wrapper">
                								<i class="fa fa-birthday-cake graduation-cap-icon" style="color: pink;"></i>
                								
              							</div>
              							<div class="education-wrapper">
                								<b class="shop-by-department">Nakshatra & Grah Shanti</b>
              							</div>
            						</div>
          					</div>
          					<div class="group-wrapper">
            						<div class="group-div">
              							<div class="graduation-cap-wrapper">
                								<i class="fa fa-birthday-cake graduation-cap-icon" style="color: pink;"></i>
                								
              							</div>
              							<div class="education-wrapper">
                								<b class="shop-by-department">Festive</b>
              							</div>
            						</div>
          					</div>
        				</div>
        				<b class="explore-puja-by">Explore Puja by Category</b>
        				<div class="viewall">
          					<a href="#"><b class="shop-by-department">View All</b>
          					<span class="fa fa-angle-down" style=""></span></a>
          					
        				</div>
                       <a href="#"><span class="frame-child fa fa-arrow-circle-right"></span></a>
        				
      			</div>
      			<div class="frame-wrapper1">
        				<div class="frame-parent18">
          					<div class="frame-wrapper2">
            						<div class="card5-parent">
              							<div class="card5">
                								<img class="image-icon" alt="" src="image.png">
                								
                								<div class="context">
                  									<b class="sindhurmani-rati-manmadha-container">
                    										<p class="sindhurmani-rati-manmadha">Sindhurmani rati manmadha </p>
                    										<p class="sindhurmani-rati-manmadha">puja</p>
                  									</b>
                								</div>
                								<div class="b">
                  									<div class="price">
                    										<div class="button">
                      											<b class="shop-by-department">Book Now</b>
                    										</div>
                    										<b class="b1">$130-$140</b>
                  									</div>
                								</div>
              							</div>
              							<div class="card5">
                								<img class="image-icon" alt="" src="image.png">
                								
                								<div class="context">
                  									<b class="sindhurmani-rati-manmadha-container">
                    										<p class="sindhurmani-rati-manmadha">Sindhurmani rati manmadha </p>
                    										<p class="sindhurmani-rati-manmadha">puja</p>
                  									</b>
                								</div>
                								<div class="b">
                  									<div class="price">
                    										<div class="button">
                      											<b class="shop-by-department">Book Now</b>
                    										</div>
                    										<b class="b1">$130-$140</b>
                  									</div>
                								</div>
              							</div>
              							<div class="card5">
                								<img class="image-icon" alt="" src="image.png">
                								
                								<div class="context">
                  									<b class="sindhurmani-rati-manmadha-container">
                    										<p class="sindhurmani-rati-manmadha">Sindhurmani rati manmadha </p>
                    										<p class="sindhurmani-rati-manmadha">puja</p>
                  									</b>
                								</div>
                								<div class="b">
                  									<div class="price">
                    										<div class="button">
                      											<b class="shop-by-department">Book Now</b>
                    										</div>
                    										<b class="b1">$130-$140</b>
                  									</div>
                								</div>
              							</div>
              							<div class="card5">
                								<img class="image-icon" alt="" src="image.png">
                								
                								<div class="context">
                  									<b class="sindhurmani-rati-manmadha-container">
                    										<p class="sindhurmani-rati-manmadha">Sindhurmani rati manmadha </p>
                    										<p class="sindhurmani-rati-manmadha">puja</p>
                  									</b>
                								</div>
                								<div class="b">
                  									<div class="price">
                    										<div class="button">
                      											<b class="shop-by-department">Book Now</b>
                    										</div>
                    										<b class="b1">$130-$140</b>
                  									</div>
                								</div>
              							</div>
              							<div class="card5">
                								<img class="image-icon" alt="" src="image.png">
                								
                								<div class="context">
                  									<b class="sindhurmani-rati-manmadha-container">
                    										<p class="sindhurmani-rati-manmadha">Sindhurmani rati manmadha </p>
                    										<p class="sindhurmani-rati-manmadha">puja</p>
                  									</b>
                								</div>
                								<div class="b">
                  									<div class="price">
                    										<div class="button">
                      											<b class="shop-by-department">Book Now</b>
                    										</div>
                    										<b class="b1">$130-$140</b>
                  									</div>
                								</div>
              							</div>
            						</div>
          					</div>
          					<div class="frame-wrapper3">
            						<div class="card5-parent">
              							<div class="card5">
                								<img class="image-icon" alt="" src="image.png">
                								
                								<div class="context">
                  									<b class="sindhurmani-rati-manmadha-container">
                    										<p class="sindhurmani-rati-manmadha">Sindhurmani rati manmadha </p>
                    										<p class="sindhurmani-rati-manmadha">puja</p>
                  									</b>
                								</div>
                								<div class="b">
                  									<div class="price">
                    										<div class="button">
                      											<b class="shop-by-department">Book Now</b>
                    										</div>
                    										<b class="b1">$130-$140</b>
                  									</div>
                								</div>
              							</div>
              							<div class="card5">
                								<img class="image-icon" alt="" src="image.png">
                								
                								<div class="context">
                  									<b class="sindhurmani-rati-manmadha-container">
                    										<p class="sindhurmani-rati-manmadha">Sindhurmani rati manmadha </p>
                    										<p class="sindhurmani-rati-manmadha">puja</p>
                  									</b>
                								</div>
                								<div class="b">
                  									<div class="price">
                    										<div class="button">
                      											<b class="shop-by-department">Book Now</b>
                    										</div>
                    										<b class="b1">$130-$140</b>
                  									</div>
                								</div>
              							</div>
              							<div class="card5">
                								<img class="image-icon" alt="" src="image.png">
                								
                								<div class="context">
                  									<b class="sindhurmani-rati-manmadha-container">
                    										<p class="sindhurmani-rati-manmadha">Sindhurmani rati manmadha </p>
                    										<p class="sindhurmani-rati-manmadha">puja</p>
                  									</b>
                								</div>
                								<div class="b">
                  									<div class="price">
                    										<div class="button">
                      											<b class="shop-by-department">Book Now</b>
                    										</div>
                    										<b class="b1">$130-$140</b>
                  									</div>
                								</div>
              							</div>
              							<div class="card5">
                								<img class="image-icon" alt="" src="image.png">
                								
                								<div class="context">
                  									<b class="sindhurmani-rati-manmadha-container">
                    										<p class="sindhurmani-rati-manmadha">Sindhurmani rati manmadha </p>
                    										<p class="sindhurmani-rati-manmadha">puja</p>
                  									</b>
                								</div>
                								<div class="b">
                  									<div class="price">
                    										<div class="button">
                      											<b class="shop-by-department">Book Now</b>
                    										</div>
                    										<b class="b1">$130-$140</b>
                  									</div>
                								</div>
              							</div>
              							<div class="card5">
                								<img class="image-icon" alt="" src="image.png">
                								
                								<div class="context">
                  									<b class="sindhurmani-rati-manmadha-container">
                    										<p class="sindhurmani-rati-manmadha">Sindhurmani rati manmadha </p>
                    										<p class="sindhurmani-rati-manmadha">puja</p>
                  									</b>
                								</div>
                								<div class="b">
                  									<div class="price">
                    										<div class="button">
                      											<b class="shop-by-department">Book Now</b>
                    										</div>
                    										<b class="b1">$130-$140</b>
                  									</div>
                								</div>
              							</div>
            						</div>
          					</div>
        				</div>
      			</div>
      			<div class="about-wrapper">
        				<div class="about">
          					<div class="frame-parent19">
            						<div class="our-company-parent">
              							<b class="our-company">Our Company</b>
              							<div class="about-parent">
                								<div class="contact">About</div>
                								<div class="contact">Contact</div>
                								<div class="contact">Careers</div>
                								<div class="contact">FAQS</div>
                								<div class="contact">Blog</div>
                								<div class="contact">Privacy Policy</div>
                								<div class="contact">Terms & Conditions</div>
                								<div class="contact">Seller</div>
                								<div class="contact">Press Release</div>
              							</div>
            						</div>
            						<div class="find-us-on-parent">
              							<b class="sindhurmani-rati-manmadha-container">FIND US ON</b>
              							<div class="facebook-parent">
                								<div class="facebook">FACEBOOK</div>
                								<div class="facebook">TWITTER</div>
                								<div class="facebook">LINKEDIN</div>
                								<div class="facebook">INSTAGRAM</div>
                								<div class="facebook">PINTEREST</div>
              							</div>
            						</div>
            						<div class="get-in-touch-with-us-parent">
              							<b class="sindhurmani-rati-manmadha-container"> GET IN TOUCH WITH US</b>
              							<div class="phone-support-1224366-0987-parent">
                								<div class="phone-support-1224366-0987">PHONE SUPPORT:  +1(224/366-0987)</div>
                								<div class="facebook">GENERAL ENQUIRY</div>
                								<div class="facebook">HELLO@QUICKLLY.COM</div>
                								<div class="facebook">ORDER SUPPORT.</div>
                								<div class="facebook">ORDERSUPPORT@QUICKLY.COM</div>
                								<div class="facebook">STORES SUPPORT:</div>
                								<div class="facebook">NEWSTORESET@QUICKLLY.COM</div>
              							</div>
            						</div>
            						<div class="frame-parent20">
              							<div class="apple-logo-wrapper">
                								<img class="apple-logo-icon" alt="" src="./asset/img/Apple Logo.png">
                								
              							</div>
              							<div class="download-ios-app-wrapper">
                								<div class="shop-by-department">
                  									<p class="sindhurmani-rati-manmadha">Download</p>
                  									<p class="sindhurmani-rati-manmadha">iOS APP</p>
                								</div>
              							</div>
            						</div>
            						<div class="frame-parent20">
              							<div class="android-os-wrapper">
                								<img class="apple-logo-icon" alt="" src="./asset/img/Android OS.png">
                								
              							</div>
              							<div class="download-android-app-wrapper">
                								<div class="shop-by-department">
                  									<p class="sindhurmani-rati-manmadha">Download</p>
                  									<p class="sindhurmani-rati-manmadha">Android APP</p>
                								</div>
              							</div>
            						</div>
          					</div>
          					<b class="copyright-2021-quickllycom">COPYRIGHT@ 2021 Quicklly.com</b>
        				</div>
      			</div>
    		</div>
  	</div>
  	
  	
  	
  	
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Define the showAlert function in the global scope
    function showAlert(message, type) {
        const alertBox = document.getElementById('alert-box');
        alertBox.innerHTML = message;
        alertBox.className = `w3-${type} w3-center w3-padding w3-round`;
        alertBox.classList.remove('w3-hide');
        setTimeout(() => {
            alertBox.classList.add('w3-hide');
        }, 3500); // hide the notification after 3 seconds
    }

    $(document).ready(function() {
        // Trigger the AJAX loader
        $(document).ajaxStart(function() {
            $('#overlay').fadeIn();
        }).ajaxStop(function() {
            $('#overlay').fadeOut();
        });
    });
</script>
<script src="./jquery/index.js"></script>
</html>