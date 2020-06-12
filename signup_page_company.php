<?php
  session_start();
 /* if(!isset(   $_SESSION['name']   )  )
          header('location:http://localhost/crossfit2/dashclient.php'); */
   ?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TargetTrash| SignUp</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/login.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="home.html"><img src="img/logtrash.png" style="float:left; height:68px; width:100px" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10">
                        <nav class="main-menu mobile-menu">
                            <ul>
                                <li><a href="home.html">Home</a></li>
                               
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="price.html">Price List</a></li>
                                <li><a class="active" href="signup.php">Sign Up</a></li>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="#">Waste Around Us</a></li>
                                
                               
                                <li class="search-btn search-trigger"><i class="fa fa-trash" href="home.html"></i></li>
                            </ul>
                        </nav>
                        <div id="mobile-menu-wrap"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
  <br>
  <br>
  <br>
  <br>
    <form action="signup_client.php" method="POST" onSubmit = "return checkPassword(this)">
        <div class="container">
          <h1>Register your Company</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
      
          <label for="name"><b>Name</b></label>
          <input type="text" placeholder="Enter Your Full Name" name="name" required>

          <label for="c_name"><b>Company Name</b></label>
          <input type="text" placeholder="Enter Your Company's Name" name="c_name" required>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>

          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Your Username" name="username" required>
          
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
      
          <label for="confirm"><b>Confirm Password</b></label>
          <input type="password" placeholder="Re-type Password" name="password2" required>

          <label for="phone"><b>Mobile Number</b></label>
          <input type="tel" placeholder="Enter Your Phone Number" name="phone" required>

          <label for="aadhar"><b>Aadhar Number</b></label>
          <input type="text" placeholder="Enter Your Aadhar Number" name="a_card" required>
      
           <label for="address"><b>Address</b></label>
          <input type="text" placeholder="Enter Your Address" name="address" required>
          
          <label for="landmark"><b>Landmark</b></label>
          <input type="text" placeholder="Nearest Landmark" name="landmark" required>

          <label for="districs"><b>District</b></label>
          <input type="text" placeholder="Enter Your District" name="district" required>
          
          <label for="pincode"><b>Pincode</b></label>
          <input type="text" placeholder="Enter Your Pincode" name="pincode" required>

         
          <hr>
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
      
          <button type="submit" class="registerbtn">Register</button>
        </div>
        
        <div class="container signin">
          <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
      </form>
      
<hr>
    <footer class="footer-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-text">
                        <div class="reserved"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Target Trash <i class="fa fa-heart-o" aria-hidden="true"></i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
    <!-- Search model end -->
    
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/validatepass.js"></script>
</body>

</html>