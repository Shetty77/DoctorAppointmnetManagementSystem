<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<title> DOCTOR APPOINTMENT MANAGEMENT SYSTEM </title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="4homepage.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
</script>
</head>


<body> 
<div class="top-nav-bar">
<div class="search-box">
	<i class="fa fa-bars" aria-hidden="true" id="menu-btn" onclick="openmenu()"></i>
	<i class="fa fa-times" aria-hidden="true" id="close-btn" onclick="closemenu()"></i>


<img src="SMlogo.png" class="logo">
<input type="text" class="form-control">
<span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i>
</span>
</div>
<div class="menu-bar">
<ul>
<li><a href="4homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
<li><a href="11aboutus.php"><i class="fa fa-info-circle" aria-hidden="true"></i> About Us</a></li>
<li><a href="27logoutsuccess.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a></li>
</ul>
</div>
</div>


<section class="header">
<div class="side-menu" id="side-menu">
  <img src="SMlogo.png" class="logo">
  <a href=""></a>
  <a href="11aboutus.php"><i class="fa fa-info-circle" aria-hidden="true"></i> About Us</a>
  <button class="dropdown-btn"><i class="fa fa-medkit" aria-hidden="true"></i> Departments
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="23Generalmedicine.php">General Medicine</a>
    <a href="26Cardiology.php">Cardiology</a>
    <a href="25ENT.php">ENT</a>
    <a href="24Dental.php">Dental</a>
    <a href="22Oncology.php">Oncology</a>
  </div>
  
  <a href="14booking.php"><i class="fa fa-file-text" aria-hidden="true"></i> Appointments</a>
  <a href="29staff.php"><i class="fa fa-user-md" aria-hidden="true"></i> Doctors</a>
  <a href="13contactus.php"><i class="fa fa-paper-plane" aria-hidden="true"></i> Contact Us</a>
  <a href=""></a>
  <a href=""></a>
  
</div>


<div class="slider">
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="home2.jpg" class="d-block w-100" alt="...">
<div class="slidertext">
  <h1>Making Health<br>Care Better Together</h1>
                    <p>Get unlimited doctor consultaion and much more with MedCare.<br>Reasonable wait time<br>Fixed consultaion fee<br>Consultaion with preffered doctor
                    </p>
                    <a href="14booking.php" class="main_btn">Make an Appointment</a>
                    <a href="" class="main_btn_light">View Department</a>

                  </div>
    </div>
    <div class="carousel-item">
      <img src="home1.jpg" class="d-block w-100" alt="...">
      <div class="slidertext1">
  <h1>Connect with<br>a doctor instantly</h1>
                    <p>Get unlimited doctor consultaion and much more with MedCare.<br>Reasonable wait time<br>Fixed consultaion fee<br>Consultaion with preffered doctor
                    </p>
                    <a href="14booking.php" class="main_btn">Make an Appointment</a>
                    <a href="" class="main_btn_light">View Department</a>

                  </div>
    </div>
    <div class="carousel-item">
      <img src="home.jpg" class="d-block w-100" alt="...">
      <div class="slidertext2">
  <h1>Get Every<br>Medicine on time</h1>
                    <p>Get unlimited doctor consultaion and much more with MedCare.<br>Reasonable wait time<br>Fixed consultaion fee<br>Consultaion with preffered doctor
                    </p>
                    <a href="14booking.php" class="main_btn">Make an Appointment</a>
                    <a href="" class="main_btn_light">View Department</a>

                  </div>
    </div>
    <div class="carousel-item">
      <img src="home3.jpg" class="d-block w-100" alt="...">
      <div class="slidertext3">
  <h1><strong>Upgrade Your</strong><br><b>Healh Care Experience</b></h1>
                    <p>Get unlimited doctor consultaion and much more with MedCare.<br>Reasonable wait time<br>Fixed consultaion fee<br>Consultaion with preffered doctor
                    </p>
                    <a href="14booking.php" class="main_btn">Make an Appointment</a>
                    <a href="" class="main_btn_light">View Department</a>

                  </div>
    </div>
  </div>
  <ol class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1"></li>
    <li data-target="#slider" data-slide-to="2"></li>
    <li data-target="#slider" data-slide-to="3"></li>
  </ol>
  
                
                   
               
            
</div>

	</div>
</section>

<section class="featured-categories">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<a href="14booking.php"><img src="a.jpg"></a>
        <div class="content">
    <h1>Online Appointment</h1>
  </div>
			</div>
			<div class="col-md-4">
				<img src="p.jpg">
         <div class="content1">
    <h1>Primary Care</h1>
  </div>
			</div>
			<div class="col-md-4">
				<img src="e.jpg">
         <div class="content2">
    <h1>Emergency Cases</h1>
  </div>
			</div>
		</div>
	</div>
</section>



<section class="footer">
  <div class="container tex-center">
    <div class="row">
      <div class="col-md-3">
        <h1>Useful Links</h1>
        <p>Privacy Policy</p>
        <p>Terms of Use</p>
        <p>Return policy</p>
        <p>Discount Coupons</p>
      </div>
      <div class="col-md-3">
        <h1>Company</h1>
        <p>About Us</p>
        <p>Contact Us</p>
        <p>Career</p>
        <p>Affliate</p>
      </div>
      <div class="col-md-3">
        <h1>Follow us</h1>
        <p><i class="fa fa-facebook-official"></i>Facebook</p>
        <p><i class="fa fa-youtube-play"></i>Youtube</p>
        <p><i class="fa fa-linkedin"></i>Linkedin</p>
        <p><i class="fa fa-twitter"></i>Twitter</p>
      </div>
      <div class="col-md-3 footer-image">
        <h1>Download App</h1>
        <img src="app.jpg">
      </div>
    </div>
    <hr>
    <p class="copyright">Made with <i class="fa fa-heart-o"></i> by Book Mart</p>
  </div>
</section>



<script>
   function openmenu()
   {
   	document.getElementById("side-menu").style.display="block";
   	document.getElementById("menu-btn").style.display="none";
   	document.getElementById("close-btn").style.display="block";
   }

    function closemenu()
   {
   	document.getElementById("side-menu").style.display="none";
   	document.getElementById("menu-btn").style.display="block";
   	document.getElementById("close-btn").style.display="none";
   }
   </script>
<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>


</body>
</html>

