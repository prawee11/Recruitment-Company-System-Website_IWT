<html>
    <head>
        <title>ConnctMe(Pvt) Ltd</title>
        <link rel="stylesheet" href="styles/headerFooter.css">
        <link rel="stylesheet" href="styles/application.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">
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
    
                                                       <!--Application form-->
<form action="add_Application form.php" id="myform" method="POST">
            <fieldset>

                <h1 align= "center" border= "5" style="color: rgb(0, 0, 0); font-weight: bold; ">Application Form</h1>
                <br>
                <p>Please fill in all the needed information in the application form below to apply for a job in the organzation.</p>
                <h3><u>Personal information</u></h3>
                <table>
                    <tr>
                    <td style="font-weight: bold;">
                      First Name       : 
                    </td>
                    <td>
                       <input type = "text" id="fname" name = "fname" >
                    </td>
                </tr>  

                 <tr>
                        <td style="font-weight: bold;">
                          Last Name       : 
                        </td>
                        <td>
                           <input type = "text" id="lname" name = "lname" >
                        </td>
                        <!--<td style="font-weight: bold;">
                        <h3  style="margin-left: 15px;">Update your CV:</h3>
                        <button style="margin-left: 15px;">Upload File</button>
                        <br>
                    </td>-->
                    
                    </tr>  
                    <tr>
                        <td style="font-weight: bold;">
                          Current Address     : 
                        </td>
                        <td>
                           <textarea name = "address" id="address" rows = "5" cols = "21" required>

                           </textarea>
                           </td>
                           <td>
                             <h3 style="margin-left: 15px;">Type your message:</h3>
                             <br>
                            <textarea style="margin-left: 5px;" id="message" name= "message" rows="4" cols="50" placeholder="Type Your message"></textarea>
                        </td>
                        

                    </tr>  
                    <tr>
                        <td style="font-weight: bold;">
                          Email    : 
                        </td>
                        <td>
                           <input type = "text" id="email" name = "email" required >
                        </td>
                    </tr>  
                    <tr>
                        <td style="font-weight: bold;">
                          Phone Number      : 
                        </td>
                        <td>
                           <input type = "text" id="phone" name = "phone" pattern ="[0-9]{10}" required >
                        </td>
                    </tr>  
                    <br><br><br>
                    <tr>
                    <td style="font-weight: bold;">
                      Employee Status : 
                    </td>
                    <td>
                       <input type = "radio" id="emp_status" name = "emp_status" value = "Employed" checked >Employed
                       <input type = "radio" id="emp_status" name = "emp_status" value = "Self- Employed" >Self-Employed
                       <input type = "radio" id="emp_status" name = "emp_status" value = "unemployed" >Unemployed
                       <input type = "radio" id="emp_status" name = "emp_status" value = "Student"  >Student

                    </td>
                     
               
                    </td>
                </tr>  
                
            

        </table>
            <br><br>
            <h3><u>Previous Emloyment Information</u></h3>
            <table>
                <tr>
                    <td style="font-weight: bold;">
                        Company Name:
                        <input type = "text" id="com_name01" name = "com_name01" >
                        <br>

                    </td>

               
                    <td style="font-weight: bold;">
                        Job title:
                        <input type = "text" id="job_title01" name = "job_title01" >
                        <br>

                    </td>

                </tr>
                <tr>
                    <td style="font-weight: bold;">
                        Company Name:
                        <input type = "text" id="com_name02" name = "com_name02" >
                        <br>

                    </td>

                
                    <td style="font-weight: bold;">
                        Job title:
                        <input type = "text" id="job_title02" name = "job_title02" >
                        <br>

                    </td>

                </tr>
                <tr>
                    <td style="font-weight: bold;">
                        Company Name:
                        <input type = "text" id="com_name03" name = "com_name03" >
                        <br>

                    </td>

                
                    <td style="font-weight: bold;">
                        Job title:
                        <input type = "text" id="job_title03" name = "job_title03" >
                        <br>

                    </td>

                </tr>
                
               

            </table>
            <br>

            <input type ="submit" value ="Submit" name= "SUBMIT" style="width: 50%; margin-left: 180px; height: 40px; background: rgb(52, 156, 197);">
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