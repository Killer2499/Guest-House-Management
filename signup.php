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
    .signup{
      text-align:center;
      
    padding-top:20px;
    font-family: 'Oswald', sans-serif;
    font-size:130%;
    }
    .logo{
      text-align:center;
      padding-top:70px;
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
    #btn{
      border-radius:7px;
      width:300px;
      background:#FDFEFE;
      border-bottom:5px solid #0462B6;
      color:#0462B6;
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
    <button class="head"><a class="nav-link" href="index.php" style="color:white;">Log In</a></button>
  </li>
  <li class="nav-item">
    <button class="head"><a class="nav-link" href="book.php" style="color:white;">Guest</a></button>
  </li>
  <li class="nav-item">
    <button class="head"><a class="nav-link" href="#" style="color:white;">Admin Panel</a></button>
  </li>
</ul>
  </div>
  <div class="logo" style="font-family:'Oswald',sans-serif;color:white;font-size:150%;">
  <img src="images/logo.gif" style="height:130px;">
  <br/>Indian Institute of Information Technology Kalyani</div>
    <div class="signup" style="color:white;">
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">

      <p>
      <label for="name"><i class="far  fa-user" style=""></i></label>
      <input type="text" name="username" value="" required autofocus placeholder="Enter your name" size="30" ></input><br/>
    </p>

      <p>
      <label for="name"><i class="fas fa-at"></i></label>
      <input type="text" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
        placeholder="Enter your email address" size="30" value=""></input><br/>
      </p>


    <p>
      <label for="password"><i class="fas  fa-key"></i></label>
      <input type="password" name="pass" required placeholder="Enter Password" size="30"></input><br/>
    </p>

        <p>
      <label for="cnfpassword"><i class="fas  fa-key"></i></label>
      <input type="password" name="cnfpass" required placeholder="Enter Password"size="30"></input>
    </p>

    <p>
   <label for="name"><i class="fas fa-phone"></i></i></label>
  <input type="tel" name="phone" required maxlength="10" placeholder="Enter your mobile number" size="30"
  value=""></input><br/>
   </p>
     <p>
     <input type="submit" name="register" value="Register" id="btn"></input>
   </p>
    </form>
    </div>
</body>

</html>

<?php

if(isset($_POST['register'])){

    $username=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $cnfpass=$_POST['cnfpass'];
    $phone=$_POST['phone'];
  
    if($pass==$cnfpass){
  
    $password=$pass;
    }
    else{
      $password=0;
      echo '<script language="javascript">';
      echo 'alert("Password Matching Failed")';
      echo '</script>';
    }
  
    if(!empty($username)&&!empty($email)&&!empty($password)&&!empty($phone)){
  
    $dbc=mysqli_connect('127.0.0.1','root','','login');//Connect to server,Change ur details to connect,login is ur database name
    $query="INSERT INTO userdata VALUES('$username','$email','$password','$phone')";//Insert values into table,userdata is table name
    $result=mysqli_query($dbc,$query)
            or die('Error querying database');//Query
    mysqli_close($dbc);
    echo '<script language="javascript">';
    echo 'alert("Registration Sucessful!!!")';
    echo '</script>';
  
    }
    else{
      echo '<script language="javascript">';
      echo 'alert("Please enter all the information")';
      echo '</script>';
  
    }
  
  }
?>