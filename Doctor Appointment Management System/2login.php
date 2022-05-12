<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="2login.css">
</head>
<body>
<img src="login.jpg">
 
<div class="bg-img">
<div class="container">

  <form action="" method="POST">
    <div class="row">
      <h2 style="text-align:center;">Login Manually</h2>
      
        
      </div>

      

        <input type="text" name="user" placeholder="Username" required>
        <input type="password"id="psw" name="pass" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
<input type="checkbox" onclick="myFunction()"><b>Show Password</b>
        <br>
        <input id="myInput" type="submit" value="Login" value="Login" type="submit" value="Login" name="sub"id="myBtn"onclick="javascript"> 

 

      </div>
      
    </div>
  </form>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="3signup.php" style="color:white" class="btn">Sign up</a>
    </div>
    <div class="col">
      <a href="#" style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div>
</div>

 

<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>


<?php  
session_start();
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con,"doctor") or die("cannot select DB");  


if(isset($_POST['sub']))
{  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
    
    $query="select * from signup where username='$user' AND password='$pass'";

   $true= mysqli_query($con,$query);  
  
if(mysqli_num_rows($true)>0)
    {  

    $_SESSION['user']=$user;
    echo "<script type='text/javascript'>alert('Success');</script>";

    header('location:4homepage.php');
    
}  
if($user=='admin' && $pass=='Admin123')
    {
      header('location:5admin.php');
    }
else{
   
 echo "<script type='text/javascript'>alert('Username and password doesnt exist Signup First');</script>";

}

}
?>

<script>
var input = document.getElementById("myInput");
input.addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode === 13) {
        document.getElementById("myBtn").click();
    }
});
</script>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");


myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}


myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}


myInput.onkeyup = function() {

  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
 
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  

  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

<script>
function myFunction() {
    var x = document.getElementById("psw");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>


</body>
</html>
