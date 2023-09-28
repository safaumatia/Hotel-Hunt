<!DOCTYPE html>    
<html> 
<title>Feedback</title>   
<head>    
<meta name="viewport" content="width=device-width, initial-scale=1">    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Samira hotel template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

<style>
body{
    background-color: white;
    font-family: Arial;
  margin: 0 auto; /* Center website */
  }     
* {    
  box-sizing: border-box;    
}    
    
input[type=text], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
input[type=Number], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
input[type=email], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
    
label {    
  padding: 12px 12px 12px 0;    
  display: inline-block;    
}    
    
input[type=submit] {    
  background-color: rgb(37, 116, 161);    
  color: white;    
  padding: 12px 20px;    
  border: none;    
  border-radius: 4px;    
  cursor: pointer;    
  float: right;    
}    
    
input[type=submit]:hover {    
     
}    
    
.container {    
  border-radius: 5px;    
  
  padding: 20px;    
}    
    
.col-25 {    
  float: left;    
  width: 25%;    
  margin-top: 6px;    
}    
    
.col-75 {    
  float: left;    
  width: 75%;    
  margin-top: 6px;    
}    
    
/* Clear floats after the columns */    
.row:after {    
  content: "";    
  display: table;    
  clear: both;    
}  

.hotel{
   max-width: 800px;
   margin-top:200px;
  
}
.center {
  max-width: 800px; /* Max width */
  padding: 20px;
margin: 0 auto; /* Center website */
background-color: #5a2360;
}

.btn {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  float: right;
}
.button1 {width: 200px;}
.default:hover {
  background:  #d6baa0;
}

    
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */    
</style>    
</head>    
<body>

 <header class="header">
            <div class="header_content">

                  <!-- Logo -->
                  <div class="logo_container d-flex flex-column align-items-center justify-content-center">
                        <div class="logo">
                              <a href="#" class="text-center">
                                    <div class="logo_subtitle">Hotel</div>
                                    <div class="logo_title">Hunt</div>
                                    <div class="logo_stars">
                                          <ul class="d-flex flex-row align-items-start justfy-content-start">
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                          </ul>
                                    </div>
                              </a>
                        </div>
                  </div>
                  <div class="container">
                        <div class="row">
                              <div class="col">
                                    <div class="header_inner d-flex flex-row align-items-center justify-content-start">
                                          <nav class="main_nav">
                                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                                      <li><a href="Home Page.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Home</span></div></a></li>
                                                      <li><a href="login.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Register</span></div></a></li>
                                                      <li><a href="rooms.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Explore</span></div></a></li>
                                                      <li><a href="news.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>My Account</span></div></a></li>
                                                      <li><a href="contact.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Admin</span></div></a></li>
                                                </ul>
                                          </nav>
                                          <a href="filterPage.html" class="button_container header_button ml-auto"><div class="button text-center"><span>BOOK  Now</span></div></a>
                                          <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                          <div class="header_review"><a href="#">Add your review</a></div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </header>

      <!-- Menu -->

      <div class="menu">
            <div class="background_image" style="background-image:url(images/menu.jpg)"></div>
            <div class="menu_content d-flex flex-column align-items-center justify-content-center">
                  <ul class="menu_nav_list text-center">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">Register</a></li>
                        <li><a href="rooms.html">Explore</a></li>
                        <li><a href="news.html">My Account</a></li>
                        <li><a href="contact.html">Admin</a></li>
                  </ul>
                  <div class="menu_review"><a href="#">Add your review</a></div>
            </div>
      </div> 

<center>
<div class="hotel">
<div class="center">

<center><h1 style="font-size: 30px; color: white;">PLEASE GIVE YOUR FEEDBACK HERE</h1></center>    
<div class="container">    
  
  <form action="feedback1.php" method="post">  
    <div class="row">    
      <div class="col-25">    
        <label for="fname" style="color: white;">First Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="fname" name="first_name" placeholder="Your name.." > 
          
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="lname" style="color: white;">Last Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="lname" name="last_name" placeholder="Your last name.." >    
          
      </div>    
    </div>    
    <div class="row">    
        <div class="col-25">    
          <label for="email" style="color: white;">Mail Id</label>    
        </div>
          <div class="col-75">    
          <input type="email" id="mailid" name="email_Id" placeholder="Your mail id..">  
         
        </div>    
      </div>    
    <div class="row">    
      <div class="col-25">    
        <label style="color: white;">Contact Number</label>    
      </div>    
      <div class="col-75"> 
        <input type="Number" id="Contact" name="contact" placeholder="Your Contact Number.." size="11"/ required >   
       
      </div>    
    </div>  
    <div class="row">    
      <div class="col-25">    
        <label for="country" style="color: white;" >Please Select Hotel Name</label>    
      </div>    
      <div class="col-75">    
        <select id="hotelname" name="hotel_name" > 
  <br><br>      
            <option value="none">Select Hotel</option>    
          <option value="The Taj Mahal Palace, Mumbai">The Taj Mahal Palace, Mumbai</option>    
          <option value="Hotel B">Hotel B</option>    
          <option value="Hotel C">Hotel C</option>    
          <option value="Hotel D">Hotel D</option>    
          <option value="Hotel E">Hotel E</option>    
          <option value="Hotel F">Hotel F</option>    
          <option value="Hotel G">Hotel G</option>    
        </select>    
      </div>    
    </div>
    <div class="row">    
      <div class="col-25">    
        <label for="country" style="color: white;" >Rating (out of 5)</label>    
      </div>    
      <div class="col-75">    
        <select id="rating" name="rating" > 
  <br><br>      
            <option value="none">Select star rating</option>    
          <option value="1">1 star</option>    
          <option value="2">2 star</option>    
          <option value="3">3 star</option>    
          <option value="4">4 star</option>    
          <option value="5">5 star</option>    
        </select>    
      </div>    
    </div>        
    <div class="row">    
      <div class="col-25">    
        <label for="feed_back" style="color: white;">Feed Back</label>    
      </div>    
      <div class="col-75">    
        <textarea id="feedback" name="feedback" placeholder="Write feedback here..." style="height:200px"> </textarea>    
        
      </div>    
    </div>    
    <div class="row">    
      <button class="btn default button1"  name="submit" style="margin-left: 550px;">Submit Feedback</button> 
    </div>    
  </form>    
</div>    
</div>
</div>
</center>  


<br>
<br>
<br>

<footer class="footer" style="background-color: #5a2360;">
            <div class="container">
                  <div class="row">

                        <!-- Footer Logo -->
                        <div class="col-lg-3 footer_col">
                              <div class="footer_logo_container">
                                    <div class="footer_logo">
                                          <a href="#" class="text-center">
                                                <div class="footer_logo_subtitle" style="color: white;">hotel</div>
                                                <div class="footer_logo_title" style="color: white;">Hunt</div>
                                                <div class="footer_logo_stars">
                                                      <ul class="d-flex flex-row align-items-start justfy-content-start">
                                                            <li><i class="fa fa-star" aria-hidden="true" style="color: white;"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true" style="color: white;"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true" style="color: white;"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true" style="color: white;"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true" style="color: white;"></i></li>
                                                      </ul>
                                                </div>
                                          </a>
                                    </div>
                                    <div class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by Hotel Hunt

</div>
                              </div>
                        </div>

                        <!-- Footer Menu -->
                        <div class="col-lg-5 footer_col">
                              <div class="footer_menu">
                                    <ul class="d-flex flex-row align-items-start justify-content-start">
                                          <li><a href="index.html" style="color: white;">Home</a></li>
                                          <li><a href="about.html" style="color: white;">Register</a></li>
                                          <li><a href="rooms.html" style="color: white;">Explore</a></li>
                                          <li><a href="news.html" style="color: white;">My Account</a></li>
                                          <li><a href="contact.html" style="color: white;">Admin</a></li>
                                    </ul>
                                    <div class="footer_menu_text">
                                          <p>The best online booking website. We assure to provide the best services to our customers.</p>
                                    </div>
                              </div>
                        </div>

                        <!-- Footer Contact -->
                        <div class="col-lg-4 footer_col">
                              <div class="footer_contact clearfix">
                                    <div class="footer_contact_content float-lg-right">
                                          <ul>
                                                <li style="color: white;">Address: <span>52 Park Lane Colaba MU 30424</span></li>
                                                <li style="color: white;">Phone: <span>+91 022 7953 3453</span></li>
                                                <li style="color: white;">Email: <span>hotelhunt@gmail.com</span></li>
                                          </ul>
                                    </div>
                              </div>
                        </div>

                  </div>
            </div>
      </footer>
  
</body>    
</html> 