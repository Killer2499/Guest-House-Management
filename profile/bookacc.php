<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
 integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
 crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" 
integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
 <style>body{overflow-x:hidden;}
 body{
      background:url('../images/background.jpg');
      overflow:hidden;
    }
    #btn{
      border-radius:7px;
      background:#FDFEFE;
      border-bottom:5px solid #0462B6;
      color:#0462B6;
    }
  </style>
 <title>guesthouse</title>
 </head>
<body>
<div class="main">
<div class="data">
<div class="row">
<div class="col-md-6">
<center>
<div class="header" style="padding-bottom:0px;">
<h1 style="font-family: 'Raleway', sans-serif;padding:20px; color:white; font-weight:bold;">Guest House Booking </h1>
<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist" style="background:orange;
font-family:'Oswald',sans-serif;padding:10px;">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
    style="color:white;" aria-controls="pills-home" aria-selected="true">Faculty</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
    style="color:white;" aria-controls="pills-profile" aria-selected="false">Student Related</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" 
    style="color:white;" aria-controls="pills-contact" aria-selected="false">Other</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  <form method="POST" action="profiledb.php" style="font-size:150%;font-family:'Raleway',sans-serif;padding:50px;">
        <label for="reference"><i class="fas fa-id-badge" style="font-size:140%;"></i></label>
      <p> <input type="text" name="reference" required 
      style="border-radius:5px;" placeholder="Enter your reference number" size="35"></input></p>
       <input type="submit" name="submit1" value="Book" id="btn"></input>
      </form>
      <div>
      <h1 style="font-family: 'Raleway', sans-serif;">Cost Per room:</h1></div>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  <form method="POST" action="profiledb.php" style="font-size:130%;font-family:'Raleway',sans-serif;padding:30px; padding-top:0px;">
       <label for="namestudent"><i class="far fa-user"></i></label>
       <p><input type="text" name="namestudent" required 
       style="border-radius:5px;" placeholder="Enter the name of the student" size="35"></input></p>
       <label for="year"><i class="far fa-calendar-alt"></i></label>
       <p><input type="tel" name="year" required 
       style="border-radius:5px;" placeholder="Enter the student's year"  size="35"></input></p>
       <label for="reg"><i class="fas fa-registered"></i></label>
       <p><input type="tel" name="reg" required
       style="border-radius:5px;" placeholder="Enter the student's Registration number"  size="35"></input></p>
       <label for="relation"><i class="fas fa-link"></i></label>
       <p><input type="text" name="relation" required
       style="border-radius:5px;" placeholder="Enter your relation with the student" size="35"></input><p>
       <input type="submit" name="submit2" value="Book" id="btn"></input>
      </form>
      <div>
      <h1 style="font-family: 'Raleway', sans-serif;">Cost Per room:</h1></div>
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  <form method="POST" action="profiledb.php" style="font-size:135%;font-family:'Raleway',sans-serif;padding:50px;">
        <label for="purpose"><i class="fas fa-info-circle"></i></label>
      <p> <input type="text" name="purpose" required
       style="border-radius:5px;" placeholder="Enter your purpose to visit" size="45"></input></p>
       <label for="affiliated"><i class="fab fa-affiliatetheme"></i></label>
       <p><input type="text" name="affiliated" required
       style="border-radius:5px;" placeholder="Enter the college/company you are affiliated to" size="45"></input></p>
       <input type="submit" name="submit3" value="Book" id="btn"></input>
      </form>
      <div>
      <h1 style="font-family: 'Raleway', sans-serif;">Cost Per room:</h1></div>
  </div>
</div>
</div>
</center>
</div>
<div class="col-md-6" style="padding-left:0px;margin-left:-20px;">
<img src="../images/test.jpg" class="img-responsive">
</div>
</div>
</div>
</div>
<?php 
  session_start();
  $username=$_SESSION['username'];
  if(isset($_POST['submit'])){
  $reference=$_POST['reference'];
  $namestudent=$_POST['namestudent'];
  $year=$_POST['year'];
  $reg=$_POST['reg'];
  $relation=$_POST['relation'];
  $purpose=$_POST['purpose'];
  $affiliated=$_POST['affiliated'];

}
  $dbc= mysqli_connect('localhost','root','','login');
  $query="SELECT * FROM userdata where username='$username'";
    $result=mysqli_query($dbc,$query);

  while($row=mysqli_fetch_array($result)){
 $name=$row['username'];
 $phone=$row['phone'];
 $email=$row['email'];
}

if(!empty($reference)){
  $group='Faculty';
  $query="INSERT into faculty (name,email,phone,reference) values('$name','$email','$phone','$reference')";
  $result=mysqli_query($dbc,$query);
  mysqli_close();

}
if(!empty($namestudent)&&!empty($year)&&!empty($reg)&&!empty(relation)){
  $group='Student Related';
  $query="INSERT into studentrelated (name,email,phone,studentname,registration,studentyear,relation) values('$name','$email','$phone','$namestudent','$reg','$year','$relation')";
  $result=mysqli_query($dbc,$query);
  mysqli_close();

}
if(!empty($purpose)&&!empty($affiliated)){
  $group='Other';
  $query="INSERT into other (name,email,phone,purpose,affiliatedto) values('$name','$email','$phone','$purpose','$affiliated')";
  $result=mysqli_query($dbc,$query);
  mysqli_close();

}
   ?>
</body>
</html>
