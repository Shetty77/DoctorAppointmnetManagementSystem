<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="13contactus.css">

<style>

</style>
</head>
<body>

<img src="login.jpg">
 
<div class="bg-img">

<div class="container">
  <form action="#" method="POST"> 
    <h1 style="text-align:center;">Contact Us</h1>
    <p>Comment below if you have any questions..</p>
    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="name" placeholder="Full Name..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Email..">

    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone"  placeholder="Phone..">
     
    </select>

    <label for="request">Comments</label>
    <textarea id="request" name="comments" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" name="sbt">
  </form>
</div>
</div>
<?php  
if(isset($_POST["sbt"])){ 

    $phone=$_POST['phone']; 
    $name=$_POST['name'];
    $email=$_POST['email']; 
    $comments = $_POST['comments'];
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con,'doctor') or die("cannot select DB");  
  
    
   
    $sql="INSERT INTO contactus VALUES('$name','$email','$phone','$comments')";  
  
    $result=mysqli_query($con,$sql);  
        if($result){  

    header("Location: 4homepage.php");    

    } else {  
    echo "Failure!";  
    }
  
  
}
?>  
</body>
</html>
