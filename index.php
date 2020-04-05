<!DOCTYPE html>
<html>
  <?php session_start(); ?>
  <head>
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
    <style>
    body{
      background:url('images/background.jpg');
      overflow:hidden;
    }
    .loginform{
      text-align:center;
      position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    padding-top:20px;
    font-family: 'Oswald', sans-serif;
    font-size:170%;
    }
    .logo{
      text-align:center;
      padding-top:100px;
    }
    #btn{
      border-radius:7px;
      width:200px;
      background:#FDFEFE;
      border-bottom:5px solid #0462B6;
      color:#0462B6;
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
    <button class="head"><a class="nav-link" href="checkroom.php" style="color:white;">Guest</a></button>
  </li>
  <li class="nav-item">
    <button class="head"><a class="nav-link" href="admin/adminlogin.php" style="color:white;">Admin Panel</a></button>
  </li>
</ul>
  </div>
  <div class="logo" style="font-family:'Oswald',sans-serif;color:white;font-size:150%;">
  <img src="images/logo.gif" style="height:130px;">
  <br/>Indian Institute of Information Technology 
  <br/>Kalyani</div>
       
  <div class="loginform">
      <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
      <p>
      <label style="color:white;font-size:120%;"><i class="far  fa-user" style=""></i></label>
      <input type="text" name="user" required value="" placeholder="Username" style="border-radius:7px;"></input>
    </p>
    <p>
      <label style="color:white;font-size:120%;"><i class="fas  fa-key"></i></label>
      <input type="password" name="password" required placeholder="Password" style="border-radius:7px;"></input>
    </p>
    <input type="submit" value="Login" name="submit" id="btn" align="right" style=""></input>
    </form>
    <div class="pop" style="font-size:60%;color:white;padding-top:5px;">
    <a href="signup.php" style="color:;" class="sign">Don't have an account? Then Sign Up</a>
    </div>
    <div class="rules" style="padding:50px;font-size:70%;">
  <div class="row">
  <div class="col-md-12">
  <a href="#" style="padding:10px;border-right:1px solid white;">Terms and Conditions</a> <a href="#" style="">Privacy Policy</a>
 <span style="padding:10px;">
  </div>
  <div>
  </div>
  <div class="row" style="margin:0px auto;padding:10px;">
  <div class="col-md-12" style="color:white;font-size:80%;">
  &copy;All Rights Reserved:IIIT-Kalyani</span>
  </div>
  </div>
  
  </div>
  
 

<?php

if(isset($_POST['submit'])){
  
$username=$_POST['user'];
$password=$_POST['password'];
$errors=array();

$username=stripcslashes($username);// Removes back slashes
$password=stripcslashes($password);



$dbc=mysqli_connect('127.0.0.1','root','','login')
     or die("Unable to connect to database");

 $username=mysqli_real_escape_string($dbc,$username);//Removes special characters
 $password=mysqli_real_escape_string($dbc,$password);

$query="SELECT * FROM userdata where username='$username' and userpassword='$password'";

$result=mysqli_query($dbc,$query)
        or die("Unable to query".mysqli_error($dbc));

$row=mysqli_fetch_array($result);//get the data from the database in an array


if($row['username']==$username && $row['userpassword']==$password){
  $_SESSION['username']=$username;
  $_SESSION['success']='You are now logged in';
  echo '<script type="text/javascript">
				location.replace("profile/profile.php");
			  </script>';


}
else{
  echo '<script language="javascript">';
  echo 'alert("Incorrect Details")';
  echo '</script>';

}
mysqli_close($dbc);
}

?>
</body>
</html>
