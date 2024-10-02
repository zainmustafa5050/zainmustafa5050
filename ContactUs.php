<?php
    $error="";
    $successMessage="";

    if($_POST){

      if(!$_POST["username"]){

        $error."The Username is reuqired.<br>";
      }

      if(!$_POST["email"]){
        $error."Email Address is required.<br>";
      }

      if(!$_POST["subject"]){
        $error."Subject is required.<br>";
      }

      if(!$_POST["message"]){
        $error."Message is required.<br>";
      }

      if($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false){
        $error."The email address is invalid.<br>";
      }

      if($error != ""){

        $error= '<div class="alert alert-danger"><p>There were errors in your form:</p>' .$error. '</div>';
      }
      else{
        $emailTo="sufyan1485@gmail.com";
        $subject=$_POST['subject'];
        $content=$_POST['message'];
        $headers=$_POST="From: " . $_POST['email'];
        
        if (mail($emailTo,$subject,$content,$headers)) {
                $successMessage='<div class="alert alert-success">Thank You! Your Message is sent.
                We will get in touch shortly.</div>';
            }else {
                $error='<div class="alert alert-danger">Your message not sent. Please try again later</div>';
            }
      }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="ContactUs.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


    <link href="https://fonts.googleapis.com/css2?family=Matemasie&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
<nav class="navbar navbar-expand-md">
        <div class="container-fluid" id="logo-nav">
          <a href="Main.html" class="col navbar-brand">
            <img src="logo.png" alt="">
          </a>
          
          
          <button id="abc" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item text-end">
                <a class="nav-link" href="AboutUs.html">About Us</a>
              </li>
              <li class="nav-item text-end">
                <a class="nav-link" href="FAQs.html">FAQs</a> 
              </li>

              <li class="nav-item text-end">
                <a class="nav-link" href="ContactUs.html">Support</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <nav class="nav2">
      <nav class="navbar navbar-expand-md">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbartogglerdemo02" aria-controls="navbartogglerdemo02" aria-expanded="false" aria-label="toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbartogglerdemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 " id="nav1">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="C:\xampp\htdocs\zain\AL RAHAl UI\Main.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Category.html">Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="brand.html">Brands</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Products.html">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="TopOffers.html">Top Offers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/zain/ContactUs.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="AboutUs.html">About us</a>
              </li>
            </ul>
          </div>
        
          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart" id="offcan-icon"><i class="fa-solid fa-bag-shopping" style="color: #763b13;"></i></button>

          <button class="btn btn-primary" type="button"  id="offcan-icon"><a href="myaccount.html" class="fa-regular fa-heart" style="color: #763b13; text-decoration: none;"></a></button>

          <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignup" aria-controls="offcanvasSignup" id="offcan-icon"><i class="fa-regular fa-user" style="color: #763b13;"></i></button>
          
          </div>          
        </nav>
      </nav>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCartLabel">
      <div class="offcanvas-header">
        <h6 id="offcanvasCartLabel">Shopping Cart</h6>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body" style="padding: 0px;">
          <div class="cartItems ">
            <!-- Items in car will show here for pricing -->
          </div>
          
          <div class="itemPriceTotal">
            <h5>Subtotal: <span style="margin-left: 180px; color: #763b13;">QAR 0.00</span></h5>
          </div>

          <div class="offcanvasCartBtn">
            <button type="button" class="btn">View Cart</button>
            <button type="button" class="btn">Checkout</button>
          </div>
      </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasSignup" aria-labelledby="offcanvasSignupLabel">
      <div class="offcanvas-header">
        <h6 id="offcanvasSignupLabel">Login</h6>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        
      </div>
      <div class="offcanvas-body p-4">
        <form action="" method="post">
          
          <div class="mb-3" id="offcanvasForm">
            <label for="exampleFormControlInput1" class="form-label">Mobile Number<span style="color: red;">&ast;</span></label>
            <input type="tel" name="mobileNumber" id="mobileNumber" placeholder="Mobile Number" required style="width: 100%;">
          </div>

          <div class="mb-3" id="offcanvasForm" >
            <label for="exampleFormControlInput2" class="form-label">Password<span style="color: red;">&ast;</span></label>
            <input type="password" name="password" id="password placeholder="Password" required style="width: 100%;">
          </div>

          <div class="mb-3" id="offcanvasForm">
            <button type="submit" class="btn mb-3">Login</button>
          </div>

          <div class="form-check" id="formCheck" style="margin-bottom: 15px;">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">Remember Me</label>
            <a href="">Forget Password?</a>
          </div>

          <div style="float:left; width: 46%;"><hr/ style=" color: black;"></div>
          <div style="float:right; width: 46%;"><hr/ style=" color: black;" ></div> 
            .OR
          
          <div class="mb-3" style="margin-top: 15px;">
            <p>No account yet? <a href="register.html"  style="padding-left: 70px;">Create New Acccount</a></p>
            
          </div>
        </form>
      </div>
    </div>

    <div class="container">
        <h3 style="text-align: center; margin-top: 20px; margin-bottom: 20px;">Contact US</h3>
    </div>

    <div id="error"><?php echo $error.$successMessage; ?></div>

            <div class="container" id="form-contain">
        <div class="row">
            <div class="col-md-6">
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14430.70866901447!2d51.5016434!3d25.2814432!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45dac45380bff1%3A0xb052bcb34fb61413!2sRoyal%20Plaza%20Mall!5e0!3m2!1sen!2s!4v1724741094583!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-6">
            
                <form method="post">
                    <div class="form-group" id="contact-form">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                    </div>
                    <div class="form-group" id="contact-form">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group" id="contact-form">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">
                    </div>
                    <div class="form-group" id="contact-form">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message"placeholder="Enter message"></textarea>
                    </div>
                    <button type="submit" value="submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md contact-info">
              <h2>
                <span>Find Us</span>
                <span style="color: white;">Royal Plaza, 1st floor, Al Sadd St, Doha</span>
              </h2>
              <h2>
                <span>Contact Us</span>
                <span style="color: white;"> 44131177</span>
              </h2>
              <h2>
                <span>Mail Us</span>
                <span style="color: white;">ares@gmail.com</span>
              </h2>
            </div>
          </div>
          <br><br>
          <hr>
          <div class="row">
            <div class="col-md-2">
              <img src="footer-logo-img.png" class="img-fluid">
            </div>
            <div class="col-md-10" id="ad">
              <div class="row" style="padding-left: 100px;">
                <div class="col-md-4 links">
                  <h5>Company</h5>
                  <ul class="list-unstyled">
                    <li>
                      <a href="AboutUs.html">About Us</a>
                    </li>
                    <li>
                      <a href="ContactUs.html">Call Us</a>
                    </li>
                    <li>
                      <a href="Products.html">Products</a>
                    </li>
                    <li>
                      <a href="Category.html">Category</a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4 links">
                  <h5>Legal</h5>
                  <ul class="list-unstyled">
                    <li>
                      <a href="PrivacyPolicy.html">Privacy Policy</a>
                    </li>
                    <li>
                      <a href="Terms.html">Terms & Conditions</a>
                    </li>
                    <li>
                      <a href="ReturnPolicy.html">Return Policy</a>
                    </li>
                    <li>
                      <a href="Shippingpolicy.html">Shipping Policy</a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4 links">
                  <h5>Resources</h5>
                  <ul class="list-unstyled">
                    <a href="ContactUs.html">Support</a>
                  </li>
                  <li>
                    <a href="https://play.google.com/store/games?device=windows">Android App</a>
                  </li>
                  <li>
                    <a href="https://www.apple.com/in/app-store/">IOS App</a>
                  </li>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12 text-start" id="contact-icons">
              <a href="https://instagram.com/" target="_blank" class="fab fa-instagram"></a>
            <a href="https://facebook.com/" target="_blank" class="fab fa-facebook"></a>
            <a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a>
            <a href="https://whatsapp.com/" target="_blank" class="fab fa-whatsapp"></a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-start copyright">
              <p>Copyright © 2024, All Right Reserved</p>
            </div>
          </div>
        </div>
      </footer>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>

    <script>

        $("form").submit(function(e){

          let error="";

          if($('#username').value()==""){

              error += "The username is required"<br>;
          }

          if($('#email').value()==""){

              error += "Email Address is required"<br>;
          }

          if($('#subject').value()==""){

              error += "Subject is required"<br>;
          }

          if($('#message').value()==""){

              error += "Message is required"<br>;
          }

          if(error != "") {
              
            $("#error").html('<div class="alert alert-danger"' +
                'role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');

                  return false;
          }
          else{  //no errors!
            
            return true;
          }//end if-e
        })


    </script>
</body>
</html>
