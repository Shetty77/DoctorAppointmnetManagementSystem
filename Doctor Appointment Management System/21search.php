<?php
  require '4homepage.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="21search.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
button {
    float: right;
    padding: 4px 10px;
    margin-top: -128px;
    margin-right: 98px;
    background: #ddd;
    font-size: 17px;
    border: none;
    cursor: pointer;
}

 button:hover {
  background: #ccc;
}
</style>
<body>
     
	<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
    <button type="submit"><i class="fa fa-search"></i></button>
	<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("mySearch");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myMenu");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>

</body>

</html>