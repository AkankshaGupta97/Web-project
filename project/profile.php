<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	  <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="profile.css">
<style>
  .navbar
  {
   background: #3C3B3F;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #605C3C, #3C3B3F);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #605C3C, #3C3B3F); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
color:white;
  }
  
  body{
     background: #43C6AC;
background: -webkit-linear-gradient(to right, #F8FFAE, #43C6AC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #F8FFAE, #43C6AC); 
font-family: "Times New Roman", Times, serif;
}
 
.row{
  padding: 30px 30px 30px 180px;
  border-radius: 3px;
  background-color: #ffffe6;
      box-shadow: 5px 5px 5px #888888;
      margin-top: -1%;

}
  li
  {
    font-weight: 10px;
  }
  .menu
  {
    height:100px;
    width:100px;
    border:1px solid black;
    float:right;
  }
  .box {
  width: 400px;
  height: 400px;
  background: orange;
  margin: 0 auto;
  transition: all 2s ease-in-out;
}
.hide {
  height: 0;
}
.img
{
height: 160px;
width:180px;
float:left;
border-radius:3px; 
          box-shadow: 4px 4px 5px #888888;

}
table
{
  height: 100%;
  width: 80%;
  border: 3px solid #595959;
  font-weight: 3px;
      padding: 6px;
          box-shadow: 10px 10px 5px #888888;


}
td
{
  text-align: center;
  border: 1px solid #595959;
  font-weight: bold;
    padding: 6px;

}


.head
{
  margin-left: 26%;


}
#table1
{
margin-top: 3%;
}
.top
{
  height: 100%;
  width: 80%;
  background-color: #a3a375;
    border: 3px solid #595959;
margin-top: 3%;
font-weight: bold;
font-size: 25px;
text-align: center;
}
#table2
{
  font-size: 15px;
}
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background: #000000; 
     background: -webkit-linear-gradient(to right, #434343, #000000);  
     background: linear-gradient(to right, #434343, #000000); 

    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
h3
{
  color:white;
    padding: 8px 8px 8px 32px;
}

</style>
</head>
<body>
<nav class="navbar">
  <div class="container">
    <div class="navbar-header">
   <h3 style="margin-top: 5%;margin-left:-36%;"><img src="med.png" height="30px" width="40px">ContactDoctor</h3>
    </div>
    <div id="navbar" class="collapse navbar-collapse ">
      <ul class="nav navbar-nav" style="margin-left: 300px;margin-top: 10px;">
        <li><h4>Hello &nbsp &nbsp &nbsp &nbsp</h4></li>
        <li><h4>Akanksha</h4></li>
      </ul>
       <ul class="nav navbar-nav navbar-right">
        <li style="margin-top: 10px;"><span style="font-size:25px;cursor:pointer;" onclick="openNav()">&#9776</span></li>
        </ul>
    </div>
  </div>
 </nav>
 
 <div id="mySidenav" class="sidenav">
 <h3>Doctors Available</h3>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="doctor.php">Dr Jaby</a>
  <a href="doctor.php">Dr Achaara</a>
  <a href="doctor.php">Dr Kurt</a>
  <a href="home1.php">Log out</a>


</div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<div class="container" >
<div class="row">
<div class="col-lg-12">
<img src="m2.jpg" class="img"><div class="head"><h2><?php echo $_SESSION["name"]; ?></h2> <font size="4">Male:25 years old <br>Location:Shimla</font></div>
<div style=" margin-top: -10%;margin-right: 17%;"><img src="red.png" height="120px;" width="120px" style="float:right;"></div>
</div>
<div class="col-lg-12" id="table1">
<table border="2">
<tr>
<td>67.1<br>Weight</td>
<td>25<br>Age</td>
<td rowspan="2"><img src="Height.png" height="150px" width="150px" style="float:left; margin-left: 10%;"><br><b>180 <br>Height</b></td>
</tr>
<tr>
<td colspan="2"><br>BMI 20.9<img src="bmi.png" height="100px" width="100px" style="float:right;margin-right: 10%;">
</td>
</tr>
</table>
</div>
<div class="col-lg-12">
<div class="top">
Check Up details
</div>
<table border="2" id="table2">
<tr>
<td><u>Condition</u></td>
<td><u>Diagnosed</u></td>
<td><u>Medications</u></td>
</tr>
<tr>
<td>Arithritis</td>
<td>16/03/2009</td>
<td>Naproxen,Aspirin,Paracetaml</td>
</tr>
<tr>
<td>Arithritis</td>
<td>16/03/2009</td>
<td>Naproxen,Aspirin,Paracetaml</td>
</tr>
<tr>
<td>Arithritis</td>
<td>16/03/2009</td>
<td>Naproxen,Aspirin,Paracetaml</td>
</tr>
<tr>
<td>Arithritis</td>
<td>16/03/2009</td>
<td>Naproxen,Aspirin,Paracetaml</td>
</tr>
</table>
</div>
</div>
</div>
</body>
</html>