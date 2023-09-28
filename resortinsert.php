<!DOCTYPE html>
<html>
<head>
	<title>Admin Home Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<style type="text/css">
		.admin{
			border: 1px solid transparent;
			box-shadow: 4px 3px 8px 1px #0c0c0c;
			width: 600px;
			margin-left: 350px;	
			background-color: #5a2360;
			padding-top: 12px;
			padding-bottom: 12px;
			
		}
		.mainpage{
			margin-top: 250px;
		}
		.see{
			text-align: center;
			font-size: 23px;
			color: white;
			font-style: bold;	
		}
		.admin:hover{
			background-color: #d6baa0;
			transform:scale(1.1);

		}
		.see:hover{
			color: black;
		}
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
                <ul class="d-flex flex-row align-items-center justify-content-start" style="margin-left: 750px;">
                  <li><a href="adminhomepagefinal.php"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Home</span></div></a></li>
                  <!--<li><a href="login.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Register</span></div></a></li>
                  <li><a href="rooms.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Explore</span></div></a></li>
                  <li><a href="news.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>My Account</span></div></a></li>-->
                  <li  class="active"><a href="contact.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Admin</span></div></a></li>
                </ul>
              </nav>
              <!--<a href="#" class="button_container header_button ml-auto"><div class="button text-center"><span>Book Your Stay</span></div></a>
              <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
              <div class="header_review"><a href="#">Add your review</a></div>-->
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="col-lg-6 m-auto">
  <form action="insertresortfinal.php" method="post" enctype="multipart/form-data" style="border: 5px solid #5a2360; padding-right: 10px;padding-left: 10px;">
    <div class="card">
      <div class="card-header" style="background-color: #5a2360;">
        <h3 class="text-white text-center">Insert Details of Resort/Villas</h3>
      </div>
    </div>
    <br>

    <label style="color: black; font-weight: bold; font-size: 18px;">HOTEL NAME: </label>
    <input type="text" name="name" placeholder="Enter name of Resort/villa" class="form-control" style="color: grey; border: 1px solid black;"><br>
    <label style="color: black; font-weight: bold; font-size: 18px;">LOCATION: </label>
    <input type="text" name="location" placeholder="Enter location" class="form-control" style="color: grey; border: 1px solid black;"><br>
    <label style="color: black; font-weight: bold; font-size: 18px;">ADDRESS: </label>
    <input type="text" name="address" placeholder="Enter address" class="form-control" style="color: grey; border: 1px solid black;"><br>
    <label style="color: black; font-weight: bold; font-size: 18px;">PRICE PER DAY: </label>
    <input type="number" name="price" placeholder="Enter price" class="form-control" style="color: grey; border: 1px solid black;"><br>
    <label style="color: black; font-weight: bold; font-size: 18px;">DISCOUNT: </label>
    <input type="number" name="discount" placeholder="Enter discount percentage % " class="form-control" style="color: grey; border: 1px solid black;"><br>
    <label style="color: black; font-weight: bold; font-size: 18px;">CONTACT NUMBER: </label>
    <input type="number" name="contactno" placeholder="Enter contact no. " class="form-control" style="color: grey; border: 1px solid black;"><br>
    <label style="color: black; font-weight: bold; font-size: 18px;">EMAIL ID: </label>
    <input type="EMAIL" name="email" placeholder="Enter valid email id" class="form-control" style="color: grey; border: 1px solid black;"><br><br>
    <label for="file" style="color: black; font-weight: bold; font-size: 18px;">UPLOAD IMAGE: </label>
    <input type="file" name="file" id="file" class="form-control" style="color: grey; border: 1px solid black;"><br><br>

    <label for="file" style="color: black; font-weight: bold; font-size: 18px;">SELECT MULTIPLE IMAGE: </label>
    <input type="file" name="images[]"  class="form-control" style="color: grey; border: 1px solid black;" multiple/><br><br>



    <label style="color: black; font-weight: bold; font-size: 18px;">ENTER DETAILS: </label>
    <textarea type="textarea" name="detail" class="form-control" style="color: grey; border: 1px solid black;"></textarea><br><br>
    <button class="btn" style="color:white; background-color: #5a2360; width: 500px; margin-left: 40px; border-radius: 10px;" type="submit" name="done">submit</button><br><br>
    <button style="color:white; background-color: #5a2360; width: 500px; margin-left: 40px; height: 35px; border-radius: 10px;" class="newbutton"><a href="resort.php" style="color:white">Back</a></button>
    <br>
    <br>

    
  </form>
  
</div>

<br>
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