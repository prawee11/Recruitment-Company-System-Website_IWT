<html>
    <head>
        <title>ConnctMe(Pvt) Ltd</title>
        <link rel="stylesheet" href="styles/contactUs.css">
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
                                                       <!--contact us-->
  <br><br>
    <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">No 41, 3rd Floor, Lanley building,</div>
          <div class="text-two">Galle Road,</div>
		  <div class="text-tree">Colombo 3, </div>
		  <div class="text-four">Sri Lanka.</div>
        </div>
		<br>
		
        <div class="phone details">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+011 458 2369</div>
          <div class="text-two">+011 523 6854</div>
        </div>
		<br>
		
		
        <div class="email details">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <div class="topic">Email</div>
          <div class="text-one">connectme72@gmail.com</div>
          
        </div>
      </div>
	  <br>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to our company or jobs, you can send me message from here. It's my pleasure to help you.</p>
      <form action="add_contactUs.php" id="myform" method="POST">
      <input type = "hidden" name = "id" value = "<?php echo $id; ?>">
        <div class="input-box">
          <input type="text" placeholder="Enter your name" id="name"  name="name" required>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email" id="email"  name="email" required>
        </div>
        <div class="input-box message-box">
          <input type="text" placeholder="Enter your message" id="message"  name="message" required>
        </div>
        <div class="button">
          <!-- <input type="button" value="Send Now" name="REGISTER" > -->
          <button type="submit" class="button" name="REGISTER" style="backgroundcolor: #fff;    color: #fff;
    font-size: 18px;
    outline: none;
    border: none;
    padding: 8px 16px;
    border-radius: 6px;
    background: #3e2093;
    cursor: pointer;
    transition: all 0.3s ease">SEND NOW</button>
        </div>
      </form>
    </div>
    </div>
  </div>
  <br><br>

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