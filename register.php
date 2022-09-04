<html>
    <head>
        <title>ConnctMe(Pvt) Ltd</title>
        <link rel="stylesheet" href="styles/headerFooter.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="styles/jobs.css">
        <script src=js/career.js></script>
    </head>

                                                      <!--Header-->
      <body style="background-color: silver;width:100%">  
        <div style="background-color: black; width:100%; height: 160px; "> 
            <img src = "images/logo.jpeg" width = "140px" height="140px" align= "left" style = "border-radius: 100px; padding: 5px;  margin-top: 10px; margin-left:10px; color: black; border: 5px solid #555;">
        <div style="padding-top: 0px; padding-left: 10px; padding-right: 150px;">
            <header>
                <h1 style = "font-size: 40px; font-family: OCR A Std, monospace; padding:50px; text-align: center; color: white;"><b>ConnectMe(Pvt) . Ltd</b></h1>
                <p style="padding-right: 5px; text-align:right; width: 112%; font-size:16px; line-height: 2px;"><a href="User profile.php" style="text-decoration:none; ;">USER PROFILE </a> | <a href="login page.php" style="text-decoration:none">LOG IN </a> | <a href="register.php" style="text-decoration:none">REGISTER</a></p>
            </header>
        </div>
    </div>
    <ul class= "list">
        <li class="list"><a href = "home page.php"><b>Home</b></a></li>
        <li class="list"><a href = "About us.php"><b>About Us</b></a></li>
        <li class="list"><a href = "job catergory.php"><b>Find jobs</b></a></li>
        <li class="list"><a href = "contactUs.php"><b>Contact Us</b></a></li>
        <li class="list"><a href = "news.php"><b>News</b></a></li>
        <li class="list"><a href = "support page.php"><b>Support</b></a></li>
        <li class="list"><a href = "FAQ page.php"><b>FAQ</b></a></li>
    </ul>
    
    
                                                       <!--register-->

<form action="add_register.php" id="myform" method="POST">
       <fieldset style="font-family: Arial, Helvetica, sans-serif;background-color: black;width: 900px;margin-top: 12px;margin-bottom: 12px ;margin-left: 250px;">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="name"><b>User Name</b></label>
    <input type="text" placeholder="Enter your full name" name="uname" id="uname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

    <label for="psw-repeat"><b>Re-enter Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" name="REGISTER" >Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</fieldset>
</form>


  
                                                                    <!--Footer-->
    
    <footer>
      <div class="footer-container">
          <div class="footer">
            <div class = "footer-heading footer-1">
                <h2>Quick links</h2>
                <a href = "home page.php">Home</a>
                <a href = "index.php">About Us</a>
                <a href = "job catergory.php">Find jobs</a>
                <a href = "contactUs.php">Contact us</a>
                <a href = "news.php">News</a>
                <a href = "support page.php">Support</a>
                <a href = "FAQ page.php">FAQ</a>
              </div>
              <div class="footer-heading footer-2">
                <h2 align = "center">About us</h2>
                <p>‘ConnectMe’ is the largest telecommunication company<br> in Sri Lanka. The company provide great service for the country.<br> The company plan to open new branches around the country.<br></p>
                <img src= "images/qr.png" width = "80px" height = 80px style="text-align: center;">
				<input onClick="parent.location='partnership.php'" id="btn" type="button" value="Partnership">
                <input onClick="parent.location='Clients.php'" id="btn" type="button" value="Clients">
              </div>
              <div class="footer-heading footer-3">
                <h2>Contact us</h2>
                    <h3>Address:</h3>
                    <p>NO 41, 3rd Floor, Lanley Building,<br>Galle Road,<br>Colombo 3,<br>Sri Lanka.<br></p>
                    <br>
                    <h4>Telephone:</h4>
                    <p>0114582369 / 0115236854<br></p>
                    <br>
                    
               </div>
               <div class="footer-heading footer-4">
                <h3>Follow Us:</h3>
                  <a class = "icon" href="https://www.facebook.com/"><span class="fa fa-facebook"></span></a>
                  <a class = "icon" href="#"><span class="fa fa-twitter"></span></a>
                  <a class = "icon" href="#"><span class="fa fa-instagram"></span></a>
                  <a class = "icon" href="#"><span class="fa fa-youtube"></span></a>
             </div>
               
               
               <div class="footer-heading footer-5">
                 <h2>Contacts</h2>
                    <input onClick="parent.location='feedback page.php'" id="btn" type="button" value="FeedBack">
                    <input id="btn" type="button" value="Chat with us...">
               </div>
            </div>
        </div>
        <h5 align="center" style = "font-family: 'Poppins', sans-serif"><font color="black">Copyright 2021 © ConnectMe.com . All Rights Reserved.</font></h5>
    </footer>
      </body>
</html>