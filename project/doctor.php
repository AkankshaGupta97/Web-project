
<!DOCTYPE html>
<html>
<head>
	<title>doctor</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="doctor.css">
</head>
<body>
<nav class="navbar">
  <div class="container">
    <div class="navbar-header">
   <h3 style="margin-top: 5%;margin-left:-36%;"><img src="med.png" height="30px" width="40px">ContactDoctor</h3>
    </div>
    <div id="navbar" class="collapse navbar-collapse ">
      <ul class="nav navbar-nav" style="margin-left: 300px;margin-top: 10px;">
        <li><h4>Welcome</h4></li>
      </ul>
       <ul class="nav navbar-nav navbar-right">
        <li style="margin-top: 10px;"><span style="font-size:25px;cursor:pointer;" onclick="openNav()">&#9776</span></li>
        </ul>
    </div>
  </div>
 </nav>
 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="profile.html">Back</a>
      <a href="home1.html">Log out</a>


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
<img src="m2.jpg" class="img"><div class="head"><h2>Dr Achara Krik</h2> <font size="4">Female:30 years old <br>Location:Shimla</font>
</div>
<button type="button" class="btn btn-primary" style="float:right; margin-top: -8%;"> <a  href="#sign_up" class="sign_up">Contact Me</a></button>
</div>
<div class="col-lg-12">
<p style="font-size: 17px;
	font-weight: italic;
	color:black;margin-top: 3%;"> I am Dr Achara krik. I am currently workin in this hospital at the post of this. Some of my details are below.I am Dr Achara krik. I am currently workin in this hospital at the post of this. Some of my details are below.I am Dr Achara krik. I am currently workin in this hospital at the post of this. Some of my details are below.I am Dr Achara krik. I am currently workin in this hospital at the post of this. Some of my details are below.I am Dr Achara krik. I am currently workin in this hospital at the post of this. Some of my details are below.I am Dr Achara krik. I am currently workin in this hospital at the post of this. Some of my details are below.I am Dr Achara krik. I am currently workin in this hospital at the post of this. Some of my details are below.</p>
</div>
<div class="col-lg-12">
<h3 style="color: black;">My Detalis</h3>
<ul>
<li>Qualification - ABC ,sdnjdks,dscbsdj</li>
<li>Working IN - ABVCHD,NCNJD</li>
<li>Specialist-nscnjsdbc</li>
<li>Working IN - ABVCHD,NCNJD</li>
<li>Specialist-nscnjsdbc</li>
</ul>
</div>
<div style=" margin-top:10%;margin-right: 4%;"><img src="red.png" height="120px;" width="120px" style="float:right; margin-top:-20%;"></div>

</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content" style="color: black;">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Message The Doctor</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="POST" action="contact.php">
            <div class="form-group">
              <label for="condition"><i class="fa fa-key" aria-hidden="true"></i>Condition</label>
              <input type="text" class="form-control" name="condition" required>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <input type="textarea" style="height: 150px;" class="form-control" name="message" placeholder="type your message" required>
            </div>
           
              <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span>Send Message</button>
          </form>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div> 
<script>
$(document).ready(function(){
    $(".sign_up").click(function(){
        $("#myModal").modal();
    });
});
</script>


</body>
</html>