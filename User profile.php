
<html>
    <head>
      <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
          background-color: black;
          
        }
        
        * {
          box-sizing: border-box;
        }
        
        
        .container1 {
          padding: 16px;
          background-color: #3973ac;
          margin: 0 auto;
          width: 50%;
          
        }
        
        
        input[type=text], input[type=password] {
          width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          display: inline-block;
          border: none;
          background: #f1f1f1;
        }
        
        input[type=text]:focus, input[type=password]:focus {
          background-color: #ddd;
          outline: none;
        }
        
        
        hr {
          border: 1px solid #f1f1f1;
          margin-bottom: 25px;
        }
        
        
        .registerbtn1 {
          background-color: #04AA6D;
          color: white;
          padding: 16px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
          opacity: 0.9;
        }
        
        .registerbtn1:hover {
          opacity: 1;
        }
        
       
        a {
          color: dodgerblue;
        }
        
    
        .signin {
          background-color: #f1f1f1;
          text-align: center;
        }
        </style>

        <title>ConnctMe(Pvt) Ltd</title>
        <link rel="stylesheet" href="styles/user profile.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, user-scale=no, initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">
        <script src=js/career.js></script>
    </head>

                                                      <!--Header-->
      <body style="background-color: silver ;width:100%">  
          <div style="background-color: black; width:100%; height: 160px; "> 
              <img src = "images/logo.jpeg" width = "140px" height="140px" align= "left" style = "border-radius: 100px; padding: 5px;  margin-top: 10px; margin-left:10px; color: black; border: 5px solid #555;">
            <div style="padding-top: 0px; padding-left: 10px; padding-right: 150px;">
              <header>
                <h1 style = "font-size: 40px; font-family: OCR A Std, monospace; padding:50px; text-align: center; color: white;"><b>ConnectMe(Pvt) . Ltd</b></h1>
               <p style="padding-right: 5px; text-align:right; width: 112%; font-size:16px; line-height: 2px; color: blue;"><a href="User profile.php" style="text-decoration:none; ;">USER PROFILE </a> | <a href="login page.php" style="text-decoration:none">LOG IN </a> | <a href="register.php" style="text-decoration:none">REGISTER</a></p>
              </header>
            </div>
          </div>
                                                     <!--Navigation Bar-->
    <ul class= "list">
      <li class="list"><a href = "home page.php"><b>Home</b></a></li>
        <li class="list"><a href = "About us.php"><b>About Us</b></a></li>
        <li class="list"><a href = "job catergory.php"><b>Find jobs</b></a></li>
        <li class="list"><a href = "contactUs.php"><b>Contact Us</b></a></li>
        <li class="list"><a href = "news.php"><b>News</b></a></li>
        <li class="list"><a href = "support page.php"><b>Support</b></a></li>
        <li class="list"><a href = "FAQ page.php"><b>FAQ</b></a></li>
  </ul>
    
                                                       <!--User profile-->

<form action="" method="post">
          <div class="container1">
            <h1>User Profile</h1>
            <hr>
        
            <label for="email"><b>Name</b></label>
            <input type="text" placeholder="Enter First Name" name="name" id="name" required>

    <?php


$con = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,'iwt');

if (isset($_POST["search"])) {
  $name = $_POST["name"];
  $query = "SELECT * FROM `applicationform` WHERE fname = '$name'";

  $query_run = mysqli_query($con,$query); 

  while($row = mysqli_fetch_array($query_run))
  {
?>

    <br><br><br>
  <table border="5" class = "center" style="margin: auto;">
      <tr>
        <th scope="row">First Name</th>
        <td align="center" style="width:75%; padding :6px"><?php echo $row['fname']?></td>
      </tr>
      <tr>
        <th scope="row">Last Name</th>
        <td align="center" style="width:75%; padding :6px"><?php echo $row['lname']?></td>
      </tr>
      <tr>
        <th scope="row">Address</th>
        <td align="center" style="width:75%; padding :6px"><?php echo $row['address']?></td>
      </tr>
      <tr>
        <th scope="row">Email Address</th>
        <td align="center" style="width:75%; padding :6px"><?php echo $row['email']?></td>
      </tr>
      <tr>
        <th scope="row">Phone number</th>
        <td align="center" style="width:75%; padding :6px"><?php echo $row['phone']?></td>
      </tr>

    </table>
<?php 
  } 

  }


?>           
            
        <br> <br>
            <input type="submit" name="search" class="registerbtn1" value="Search">
          </div>
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

