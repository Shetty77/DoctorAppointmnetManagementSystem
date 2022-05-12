<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="10insert_service.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>

<body>

 <div class="bg-img">

   <div class="container">
   
    <div class="topnav-right">
   <a href="5admin.php"><i class="fa fa-fw fa-home"></i> Home</a> 
   <a href="1frontpage.php"><i class="fas fa-sign-out-alt"></i> Logout</a> 
   </div>
<a href="8insert.php"> Back</a>
 
<div style="margin-left:80px;">
  <h2>ADMIN</h2>
  <h4>INSERT SERVICES</h4>

<form class="myform" action="#" method="post"><br>


<input name="stype" type="text" class="inputvalues" placeholder="Department" required /><br>
<input name="sprice" type="text" class="inputvalues" placeholder="Consultancy Price" required /><br>

<input name="sub" type="submit"  value="Submit"/><br>
</form>
</div>
</body>
</html>
<?php

$con=mysqli_connect("localhost","root","")or die("Unable to connect to database");

mysqli_select_db($con,"doctor");

if(isset($_POST['sub'])) 
{
  $stype  = $_POST['stype'];
  $sprice = $_POST['sprice'];
  $query ="insert into services values('$stype','$sprice')";
  mysqli_query($con,$query);
	
}
?>

<table>

	<th>Service Type</th>
	<th>Service Price</th>
	
	
<?php

$con=mysqli_connect("localhost","root","")or die("Unable to connect to database");

mysqli_select_db($con,"doctor");

$query ="SELECT * FROM services;";

$query_run = mysqli_query($con,$query);

$num = mysqli_num_rows($query_run);

while ($row = mysqli_fetch_assoc($query_run)) 
{

mysqli_query($con,$query);

?>

<tr>
	<td> <?php echo $row['service_type']; ?></td>
	<td> <?php echo $row['service_price']; ?></td>
	
</tr>

<?php
}


?>
</table>
</div>


