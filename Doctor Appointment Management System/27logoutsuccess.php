

<?php   
session_start(); 
session_destroy(); 
echo"<script type='text/javascript'>alert('Logged out successfully');
window.location='1frontpage.php';
</script>";

exit();
?>