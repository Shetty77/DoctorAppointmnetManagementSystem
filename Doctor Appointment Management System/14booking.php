<!doctype html>
<html>

<link href="https://fonts.googleapis.com/css?family=Unkempt" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="14booking.css">

<body>
<img src="login.jpg">
 

<div class="bg-img">

  <div class="container">

 <form method="POST">
<h1 style="text-align:center;">BOOK YOUR </h1>
<h1 style="text-align:center;"> APPPOINTMENT NOW!!</h1>

  <label for="full name">Full Name</label>
  <input type="text" name="name" placeholder="Fullname" required>

  <label for="phone_number">Phone </label>
  <input type="tel" name="phone" placeholder="Phone" required>

  <label for="email_address">Email </label>
  <input type="email" name="email" placeholder="Email" required>

<label for="gender">Gender</label>
  <select name="gender" id="gender">
    <option value="" selected="selected">Select One</option>
    <option value="male" >Male</option>
    <option value="female" >Female</option>
    <option value="others" >Others</option>
  </select>

  <label for="services">Department</label>
  <select name="services" id="services">
    <option value="" selected="selected">Select One</option>
    <option value="Oncology" >Oncology</option>
    <option value="General Medicine" >General Medicine</option>
    <option value="Dental" >Dental</option>
    <option value="ENT" >ENT</option>
    <option value="Cardiology" >Cardiology</option>
  </select>

   <label for="employees">Doctors</label>
  <select name="employees" id="employees">
    <option value="" selected="selected">Select One</option>
    <option value="Dr.Shreekanth" >Dr.Shreekanth</option>
    <option value="Dr.Badrinath" >Dr.Badrinath</option>
    <option value="Dr.Bharathi" >Dr.Bharathi</option>
    <option value="Dr.Vikram" >Dr.Vikram</option>
    <option value="Dr.Harish" >Dr.Harish</option>
  </select>

  <fieldset>
    <legend>Extras</legend>
    <label> <input type="checkbox" name="extras" id="extras_baby" value="baby"> Vehicle</label>
    <label> <input type="checkbox" name="extras" id="extras_wheel" value="wheelchair"> Wheelchair Access </label>
    <label> <input type="checkbox" name="extras" id="extras_bag" value="bag"> Baggage </label>
  </fieldset>

  <label for="appointment_time">Appointment Date/Time</label>
  <input type="datetime-local" name="time" id="appointment_time" required>


 
  <label for="comments">Special Instructions</label>
  <textarea name="comments" id="comments" maxlength="500"></textarea>

  <button type="submit" name="sbt">Submit Booking</button>

</form>
</div>
<div class="head-container">
</div>
</div>
</body>
<?php  
session_start();
if(isset($_POST["sbt"])){ 

    $phone=$_POST['phone']; 
    $name=$_POST['name'];
    $email=$_POST['email']; 
    $gender=$_POST['gender']; 
    $service=$_POST['services'];
    $employees=$_POST['employees'];
    $extras=$_POST['extras']; 
    $time = $_POST['time'];
    $comments = $_POST['comments'];
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con,'doctor') or die("cannot select DB");  
  
    
   
    $sql="INSERT INTO appointment VALUES('$name','$phone','$email','$gender','$service','$employees','$extras','$time','$comments')";  
  
    $result=mysqli_query($con,$sql);  
        if($result){  

    $_SESSION['name']=$name;
    header("Location: 15bookingsuccess.php");    

    } else {  
    echo "<script>alert('Failure!')</script>";  
    }
  
  
}
?>  
</html>