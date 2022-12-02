<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: right;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 10px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}

@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }
  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}

* {
  box-sizing: border-box;
}

.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}

</style>
</head>
<body>

<header class="w3-container w3-teal">
  <img src="logo.jpg" alt="Logo job seeker">
</header>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Contact')">Contact</button>
  <button class="tablinks" onclick="openCity(event, 'Documents')">Documents</button>
  <button class="tablinks" onclick="openCity(event, 'Blog')">Blog</button>
  <button class="tablinks" onclick="openCity(event, 'About')">About</button>
  <button class="tablinks" onclick="openCity(event, 'Home')"><b>Home</b></button>
</div>

<div id="Contact" class="tabcontent">
  <h3>Contact Us</h3>
  <p>London is the capital city of England.</p>
  <form action="https://wa.me/+237678131798?text=*VERIFY Account*" method = "post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
<h2 class="w3-center">WhatsApp Us</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="first" type="text" placeholder="Name">
    </div>
</div>


<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="message" type="textarea" placeholder="Message">
    </div>
</div>

<p class="w3-center">
<button class="w3-button w3-section w3-blue w3-ripple"> Send </button>
</p>
</form>
</div>

<div id="About" class="tabcontent">
  <h3>About</h3>
  <div class="w3-container">
  <h2>Card Example</h2>
  <h2 style="text-align:center">Responsive Pricing Tables</h2>
<p style="text-align:center">Resize the browser window to see the effect.</p>

<div class="columns">
  <ul class="price">
    <li class="header">Basic</li>
    <li class="grey">$ 9.99 / year</li>
    <li>10GB Storage</li>
    <li>10 Emails</li>
    <li>10 Domains</li>
    <li>1GB Bandwidth</li>
    <li class="grey"><a href="#" class="button">Sign Up</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#4CAF50">Pro</li>
    <li class="grey">$ 24.99 / year</li>
    <li>25GB Storage</li>
    <li>25 Emails</li>
    <li>25 Domains</li>
    <li>2GB Bandwidth</li>
    <li class="grey"><a href="#" class="button">Sign Up</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Premium</li>
    <li class="grey">$ 49.99 / year</li>
    <li>50GB Storage</li>
    <li>50 Emails</li>
    <li>50 Domains</li>
    <li>5GB Bandwidth</li>
    <li class="grey"><a href="#" class="button">Sign Up</a></li>
  </ul>
</div>

</div>
</div>

<div id="Blog" class="tabcontent">
  <h3>Blog</h3>
  <h2>Responsive Inline Form</h2>
<p>We have created an inline form that will stay horizontal until the screen width of the browser window is less than 850 pixels: then the form is displayed vertically instead of horizontally.</p>
<p>Resize the browser window to see the effect.</p>

<form class="form-inline" action="https://www.w3schools.com/action_page.php">
  <label for="email">Email:</label>
  <input type="email" id="email" placeholder="Enter email" name="email">
  <label for="pwd">Password:</label>
  <input type="password" id="pwd" placeholder="Enter password" name="pswd">
  <label>
    <input type="checkbox" name="remember"> Remember me
  </label>
  <button type="submit">Submit</button>
</form>
</div>

<div id="Documents" class="tabcontent">
  <h3>Documents</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div id="Home" class="tabcontent">
  <h3>Home</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_js_tabs by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 02:32:20 GMT -->
</html> 
