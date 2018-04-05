<!DOCTYPE html>
<html>
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
    .picup{
      display:none;
    }
    .profile{
      font-family:'Oswald',sans-serif;
      font-size:130%;
      padding-top:30px;
    }
    .comb{
     background:#72BEF3;
     border-radius:10px;
     padding-top:30px;
     padding-bottom:30px;
    }
    .img{
      padding-left:150px;
    }
    .details{
      color:white;
    }
    h1{
      font-size:250%;
    }
    .data{
      padding-left:60px;
      padding-right:30px;
    }
    table{
      border:none;
    }
    .borderless td, .borderless th,tr {
    border: none;
}</style>
    </head>
<body>
<?php session_start();?>

<div class="header">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
  <a class="navbar-brand" href="#">
  <img src="../images/logo.gif" class="img-fluid" style="height:50px;">
  Indian Institute of Information Technology</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="#">Welcome Mr.<?php echo $_SESSION['username']; ?><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Edit Profile<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../checkroom.php">Book a Room</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">LogOut</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

</div>
<?php

define ('GW_UPLOADPATH','images');
$dbc=mysqli_connect('localhost','root','','login');

$username=$_SESSION['username'];
$query="SELECT * FROM userdata where username='$username'";
  $result=mysqli_query($dbc,$query);
  while($row=mysqli_fetch_array($result)){
         
    if($row['profile_pic']==1){
      
       echo '<div class="profile">
             <div class="container"><div class="container comb">
             <div class="row">
             <div class="col-md-6">
             <div class="img">';
       echo '<img src="profilepic/profile'.$row['username'].'.'.'jpg" style="height:200px;width:200px;
       border-radius:20px;"/>';
       echo '</div></div>';
       echo '<div class="col-md-6">';
       echo '<div class="details">';
       echo '<h1>'.$row['username'].'</h1>';
       echo '<p>'.$row['email'].'</p>';
       echo '<p>'.$row['phone'].'</p>';
       echo '</div></div></div>';
       echo '</div></div></div>';


       
    }
    else{
       echo  '<img src="profilepic/default.png" style="height:50px;width:50px;border-radius:50%;"/>';
    }

    $email=$row['email'];
    $password=$row['userpassword'];
    $phone=$row['phone'];

  }
?>
<form method="POST" action="profilepicupload.php" form attribute enctype="multipart/form-data" class="picup">
   
        <input type="file" name="profilepic" id="profilepic" style=""/>
        <input type="submit" name="submit" value="Upload" style="border-radius:5px;background:#D52E40;"></input>
        
</form>
<!--<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
  <input type="text" name="upname" placeholder="<?php echo $username ?>"></input><br/>
  <input type="text" name="upemail" placeholder="<?php echo $email ?>"></input><br/>
<input type="text" name="uppassword" placeholder="<?php echo $password ?>"></input><br/>
  <input type="text" name="upcnfpassword" placeholder="<?php echo $password ?>"></input><br/>
  <input type="submit" name="update" value="Update"></input>-->

</form>
  <?php
  if(isset($_POST['update'])){
    $upname=$_POST['upname'];
    $upemail=$_POST['upemail'];
    $uppassword=$_POST['uppassword'];
    $upcnfpassword=$_POST['upcnfpassword'];

    $dbc=mysqli_connect('localhost','root','','login');

    $query="UPDATE userdata  SET 
    username= '$upname', email='$upemail', userpassword='$upcnfpassword' where username ='$username'";

    $result=mysqli_query($dbc,$query);
    mysqli_close($dbc);

  }
  
?>
<?php
$dbc=mysqli_connect('localhost','root','','guesthouse');


$query="SELECT * FROM admindata where approved=1 and name='$username'";
$result=mysqli_query($dbc,$query);
mysqli_close($dbc); 
 echo '<div class="data">';
echo '<table class="table  borderless" style="margin-top:30px;">';
echo '
<thead class="thead-dark">
  <tr>
    <th scope="col">#</th>
    <th scope="col" style="">Room No</th>
    <th scope="col">Booking Status</th>
    <th scope="col">Amount</th>
    <th scope="col">Booking Date</th>
  </tr>
</thead>';
if($result){
 $no=1;
  while($row=mysqli_fetch_array($result)){
  
  
  echo '<tbody><tr>';
  echo '<td>'.$no.'</td>';
  
  echo '<td>Later</td>';
  echo '<td>Confirmed</td>';
  echo '<td>Cost</td>';
  echo '<td>'.$row['booking_date'].'<td/>';
  echo '</tr></tbody>';
  $no =$no + 1;
}

}
else{
 echo 'No Booking';
}

echo '</table></div>';



?>
</body>