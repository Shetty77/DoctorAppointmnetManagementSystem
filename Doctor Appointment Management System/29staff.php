<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>


<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="swastik.png" alt="swas" style="width:100%">
      <div class="container">
        <h2>Swastik Shetty</h2>
        <p class="title">Service-Hair Cutting</p>
        <p>Available from 9am to 8pm</p>
        <p>Tuesday not available</p>
        <p>swastikshetty@gmail.com</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="rahisha.png" alt="rahi" style="width:100%">
      <div class="container">
        <h2>Rahisha Mendon</h2>
        <p class="title">Service-waxing</p>
        <p>Available from 10m to 8pm</p>
        <p>Sunday not available</p>
        <p>rahishamendon@gmail.com</p>
      
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="shreya.png" alt="shre" style="width:100%">
      <div class="container">
        <h2>Shreya Shetty</h2>
        <p class="title">Service-Hair Coloring</p>
        <p>Available from 10am to 8pm</p>
        <p>Saturday not available</p>
        <p>shreyashetty@gmail.com</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="salabha.png" alt="sala" style="width:100%">
      <div class="container">
        <h2>Salabha S</h2>
        <p class="title">Service-Massage</p>
        <p>Available from 9am to 8pm</p>
        <p>Friday not Available</p>
        <p>salabha@gmail.com</p>
       
      </div>
    </div>
  </div>
   
   <div class="column">
    <div class="card">
      <img src="athish.png" alt="athi" style="width:100%">
      <div class="container">
        <h2>Athish Rai</h2>
        <p class="title">Service-Shaving</p>
        <p>Available from 9am to 8pm</p>
        <p>Available all the 7 days</p>
        <p>athishrai@gmail.com</p>
        
      </div>
    </div>
  </div>
</div>
</div>

</body>
</html>




