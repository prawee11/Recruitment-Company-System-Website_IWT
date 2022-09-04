<html>
    <head>
        <title>ConnctMe(Pvt) Ltd</title>
        <link rel="stylesheet" href="styles/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">
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
    


                                                       <!--Payment Form-->
    
    <div class="row">
      <div class="col-75">
        <div class="container">
        <form action="add_payment.php" id="myform" method="POST">
            <div class="row">
              <div class="col-50">
                <h2>Billing Address</h2>
                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Dammika Perera" required>
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="text" id="email" name="email" placeholder="dammika@example.com" required>
                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                <input type="text" id="address" name="address" placeholder="542,15th Street, Colombo 7" >
                <label for="city"><i class="fa fa-institution"></i> City</label>
                <input type="text" id="city" name="city" placeholder="Colombo">
    
              </div>
    
              <div class="col-50">
                <h2>Payment</h2>
                <label for="fname">Accepted Cards</label>
                <div class="icon-container">
                  <i class="fa fa-cc-visa" style="color:navy;"></i>
                  <i class="fa fa-cc-americanexpress" style="color:navy;"></i>
                  <i class="fa fa-cc-mastercard" style="color:red;"></i>
                  <i class="fa fa-cc-discover" style="color:orange;"></i>
                </div>
                <label for="cname">Name on Card</label>
                <input type="text" id="cardname" name="cardname" placeholder="Dammika Perera" required>
                <label for="ccnum">Credit card number</label>
                <input type="text" id="creditnumber" name="creditnumber" placeholder="1111-2222-3333-4444" required>
                <label for="expmonth">Exp Month</label>
                <input type="text" id="expiremonth" name="expiremonth" placeholder="September" required>
                <div class="row">
                  <div class="col-50">
                    <label for="expyear">Exp Year</label>
                    <input type="text" id="expireyear" name="expireyear" placeholder="2024" required>
                  </div>
                  <div class="col-50">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" placeholder="352" required>
                  </div>
                </div>
              </div>
              
            </div>
            <label>
              <input type="checkbox" checked="checked" name="sameadr">I agree to the Terms & Conditions and Privacy policy.
            </label>
            <input type="submit" value = "SAVE "name="SAVE" class="btn">
            <input type="submit" value="cancel" class="btn1"> 
          </form>
        </div>
      </div>
      
    </div>


      
   
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