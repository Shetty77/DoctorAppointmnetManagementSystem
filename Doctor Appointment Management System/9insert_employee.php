<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="9insert_employee.css">
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
  <h2>ADMIN</h2><h4>INSERT EMPLOYEES</h4>
<form class="myform" action="#" method="post"><br>


<input name="ename" type="text" class="inputvalues" placeholder="Name" required /><br>
<input name="etype" type="text" class="inputvalues" placeholder="Service" required /><br>
<input name="eservice" type="text" class="inputvalues" placeholder="Email" required /><br>
<input name="ephone" type="text" class="inputvalues" placeholder="Phone" required /><br>

<input name="sub" type="submit"  value="Submit"/><br>
<input name="up" type="submit"  value="Update"/><br>


</form>
</div>
</body>
</html>
<?php

$con=mysqli_connect("localhost","root","")or die("Unable to connect to database");

mysqli_select_db($con,"doctor");

if(isset($_POST['sub'])) 
{
  $ename  = $_POST['ename'];
  $etype = $_POST['etype'];
  $eservice =$_POST['eservice'];
  $ephone =$_POST['ephone'];
  $query ="insert into employee values('$ename','$etype','$eservice','$ephone')";
  mysqli_query($con,$query);

  header('location:9insert_employee.php');
	
}

if(isset($_POST['up'])) //If submit button is clicked
{
  $ename  = $_POST['ename'];
  $etype = $_POST['etype'];
  $eservice =$_POST['eservice'];
  $ephone =$_POST['ephone'];
  $query ="update employee set service_type='$etype' where email='$eservice'";
  mysqli_query($con,$query);

  header('location:9insert_employee.php');
	
}
?>
<table>

	<th>Employee Name</th>
	<th>Service Type</th>
	<th>Email</th>
	<th>Phone</th>
	
	
<?php

$con=mysqli_connect("localhost","root","")or die("Unable to connect to database");

mysqli_select_db($con,"doctor");

$query ="SELECT * FROM employee;";

$query_run = mysqli_query($con,$query);

$num = mysqli_num_rows($query_run);

while ($row = mysqli_fetch_assoc($query_run)) 
{

mysqli_query($con,$query);

?>

<tr>
	<td> <?php echo $row['employee_name']; ?></td>
	<td> <?php echo $row['service_type']; ?></td>
	<td> <?php echo $row['email']; ?></td>
	<td> <?php echo $row['phone_no']; ?></td>
	
</tr>

<?php
}


?>
</table>
