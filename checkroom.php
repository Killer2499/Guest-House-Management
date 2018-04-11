<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="check.css">
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
   integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
   crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" 
  integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
	<script>
   
   $(document).ready(function(){
        $("#submit").click(function(){
          $("#container").addClass("scoot");
        });

   }); 
  </script>
  <style>
  .logo{
      text-align:center;
      padding-top:100px;
    }
    .header{
      float:right;
      font-family:'Oswald',sans-serif;      
    }
    .head{
      border-radius:10px;
      background-color:#015AAB;
      color:;
      margin:10px;
      border:none;
    }
    .head:hover{
      background:#F3D472;
    }
    a:hover {
    color: #F3D472;
   }
   a{
  color:white;
   }
   a:link{
     text-decoration:none;
   }
   a:visited{
     text-decoration:none;
   }
   
  </style>

</head>
<body>


 <div class="header">
    <ul class="nav">
    <li class="nav-item">
      <button class="head"><a class="nav-link" href="#" style="color:white;">Home</a></button>
    </li>
    <li class="nav-item">
      <button class="head"><a class="nav-link" href="check.php" style="color:white;">Guest</a></button>
    </li>
    <li class="nav-item">
      <button class="head"><a class="nav-link" href="admin/adminpanel.php" style="color:white;">Admin Panel</a></button>
    </li>
  </ul>
    </div>
    
<div>
    <div class="logo" style="font-family:'Oswald',sans-serif;color:white;font-size:150%;">
        <img src="images/logo.gif" style="height:130px;">
        <br/>Indian Institute of Information Technology Kalyani</div>
<div id="container">
 
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST"> 
    <label for="fname">CHECK IN DATE</label>
    <input type="date" id="idate" name="date" placeholder="xxx">

    <input type="submit"  id="isubmit" name="submit" value="Submit">


  </form></div>
</div></div>
 </body>
 </html>
 <?php
if(isset($_POST['submit'])){
$date=$_POST['date'];

$dbc=mysqli_connect('localhost','root','','guesthouse');
$newdate = date("Y-m-d", strtotime($date));
$query="SELECT * FROM admindata where booking_date='$newdate' and approved=1";
$result=mysqli_query($dbc,$query);
$row=mysqli_num_rows($result);
if (mysqli_num_rows($result) == 6){
    echo '<script>alert("Rooms Booked")</script>';
}
else{
  echo '<script type="text/javascript">
  location.replace("book.php");
  </script>';
}
}
?>