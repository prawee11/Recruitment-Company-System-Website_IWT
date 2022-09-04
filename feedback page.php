<html>
    <head>
        <title>ConnctMe(Pvt) Ltd</title>
        <link rel="stylesheet" href="styles/feedback.css">
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
    
                                                       <!--feedback-->
                                                    
<br> <br>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Feedback Form Using php, CSS And PHP - reusable form</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body >
        <div class="container">
            <div class="imagebg"></div>
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3 form-container">
                    <h2>Feedback</h2> 
                    <p> Please provide your feedback below: </p>
                    <form role="form" method="POST" id="reused_form" action="add_feedback.php">
                    <input type = "hidden" name = "id" >
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>How do you rate your overall experience?</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="Bad" >
                                        Bad 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="Average" >
                                        Average 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="Good" >
                                        Good 
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments"> Comments:</label>
                                <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="fname"> Your Name:</label>
                                <input type="text" class="form-control" id="fname" name="fname" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="email" class="form-control" id="femail" name="femail" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-warning btn-block" name="REGISTER">Post </button>
                            </div> 
                        </div>
                        
                    </form>
                    <div id="message" style="width:100%; height:100%; display:none; "> <h3>Posted your feedback successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
        </div>
    </body>
    </div>
    <br> <br> <br>




  
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