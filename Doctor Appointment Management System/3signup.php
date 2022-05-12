<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="3signup.css">
</head>
<body>
  <img src="login.jpg">

  <div class="bg-img">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
  <form method='POST'>
      <label for="full name"><b>Full Name</b></label>
     <input type="text" name="name"placeholder="Full Name" required><br /> 

       <label for="user name"><b>User Name</b></label>
     <input type="text" name="user"placeholder="User Name" required><br />  
      
      <label for="email"><b>Email</b></label>
    <input type="text" name="email"placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter the proper email address! Ex: emaple@example.com"required><br />            

      <label for="psw"><b>Password</b></label>
    <input type="password"id="psw"  name="pass"placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br />  


      <label for="psw-confirm"><b>Confirm Password</b></label>
     <input type="password" name="cpass" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br />  
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:#1b43de">Terms & Privacy</a>.</p>

      <div class="clearfix">
        
        <button type="submit" name="submit" class="signupbtn">Sign Up</a></button>
      </div>
    </div>
  
</div>
</div>
</form>
<form method="post">
 <button type="submit" name="lg" type="button" class="cancelbtn">Cancel</button>
 </form>
 <script>
function myFunction() {
    var x = document.getElementById("myEmail").pattern;
    document.getElementById("demo").innerHTML = x;
}
</script>
<?php  
session_start();
if(isset($_POST["lg"])){

    header("location:3signup.php");
}

if(isset($_POST["submit"])){  
    $user=$_POST['user']; 
    $name=$_POST['name'];
    $email=$_POST['email']; 
    $pass=$_POST['pass']; 
    $cpass=$_POST['cpass']; 
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con,'doctor') or die("cannot select DB");  
  
    if($pass==$cpass)
    {


   
    $sql="CALL signup('$name','$user','$email','$pass')";  
  
    $result=mysqli_query($con,$sql);  
        
 if($result){ 

   $_SESSION['user']=$user;

    header("Location: 28signupsuccess.php");    

    } else {  
   
   
 echo "<script type='text/javascript'>alert('Account already exists');</script>"; 

    }
  }
  else
  {
    echo "<script type='text/javascript'>alert('Password Mismatch');</script>"; 

  }
  
}
?>  
<?php

  ?>
</body>
</html>
  