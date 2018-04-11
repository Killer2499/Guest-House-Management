<html>
<head>
   <title>guesthouse</title>
   <link href="https://fonts.googleapis.com/css?family=Dosis|Open+Sans+Condensed:300" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
 integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
   <style>
   body{
     overflow-x:hidden;
   }
   .success{
   text-align:center;
   padding-top:90px;
   padding-bottom:85px;
   background:#DDDAD8;
   }
   span{
     font-family:'Oswald',sans-serif;
   }
   .text{
     font-family:'Raleway',sans-serif;
     padding-bottom:10px;
   }
   a:link{
     text-decoration:none;
   }
   </style>
</head>
<body>
<?php

if(isset($_POST['name'])){$name=$_POST['name'];}
if(isset($_POST['email'])){$email=$_POST['email'];}
if(isset($_POST['phone'])){$phone=$_POST['phone'];}
if(isset($_POST['reference'])){$reference=$_POST['reference'];}
if(isset($_POST['namestudent'])){$namestudent=$_POST['namestudent'];}
if(isset($_POST['reg'])){$reg=$_POST['reg'];}
if(isset($_POST['year'])){$year=$_POST['year'];}
if(isset($_POST['relation'])){$relation=$_POST['relation'];}
if(isset($_POST['purpose'])){$purpose=$_POST['purpose'];}
if(isset($_POST['affiliated'])){$affiliated=$_POST['affiliated'];}

if(!empty($name) && !empty($email)&& !empty($phone)&& !empty($reference)){
$group='Faculty';
$dbc=mysqli_connect('localhost','root','','guesthouse');

$query="INSERT INTO faculty VALUES('$name','$email','$phone','$reference')";
$result=mysqli_query($dbc,$query);
echo '<div class="success">';
echo '<div class="row"><div class="col-md-12" style="text-align:center;">';
echo '<p><img src="images/tick.png" class="img-fluid" style="height:120px;width:100px;"></p>';
echo '<p><h1 class="text" style="font-size:300%;">Thanks for reaching out!</h1>';
echo '<span>Your message just showed up in our inbox.Please wait for your confirmation</span></p>';
echo '</div></div></div>';
echo '<div class="footer" style="background:#023668;padding:20px;">';
echo '<div class="row">
     <div class="col-md-12" style="text-align:center;">
     <img src="images/logo.gif" class="img-fluid" style="height:100px;width:100px;"> <br/>
     <h2 class="text" style="color:white;">Indian Institute of Information Technology</h2>
     <a href="index.php" style="background:orange;color:white;border-radius:10px;padding:10px;">Main Page</a>
     </div>
     </div>';
echo '</div>';
mysqli_close($dbc);

$to='sanathsingavarapu99@gmail.com';
$subject='Guest house Booking';
$msg='I am' .$name.'and I want to book a room.I work as guest faculty for the college.
      Hope!!This' .$reference.'reference number could be useful.I will be available on'.$phone."\n". 'Thanking you!!' ;
mail($to,$subject,$msg,'From:'.$email);


}
else if(!empty($name)&&!empty($email)&&!empty($phone)&&!empty($namestudent)&&!empty($reg)&&!empty($year)&&!empty($relation)){
  $group='Student Relative';
$dbc=mysqli_connect('localhost','root','','guesthouse');

$query="INSERT INTO studentrelated VALUES('$name','$email','$phone','$namestudent','$reg','$year','$relation')";
$result=mysqli_query($dbc,$query);
echo '<div class="success">';
echo '<div class="row"><div class="col-md-12" style="text-align:center;">';
echo '<p><img src="images/tick.png" class="img-fluid" style="height:120px;width:100px;"></p>';
echo '<p><h1 class="text" style="font-size:300%;">Thanks for reaching out!</h1>';
echo '<span>Your message just showed up in our inbox.Please wait for your confirmation</span></p>';
echo '</div></div></div>';
echo '<div class="footer" style="background:#023668;padding:20px;">';
echo '<div class="row">
     <div class="col-md-12" style="text-align:center;">
     <img src="images/logo.gif" class="img-fluid" style="height:100px;width:100px;"> <br/>
     <h2 class="text" style="color:white;">Indian Institute of Information Technology</h2>
     <a href="index.php" style="background:orange;color:white;border-radius:10px;padding:10px;">Main Page</a>
     </div>
     </div>';
echo '</div>';
mysqli_close($dbc);

$to='sanathsingavarapu99@gmail.com';
$subject='Guest house Booking';
$msg='I am'  .$name. 'and I want to book a room.I am' .$relation. 'of' .$namestudent. 'studying' .$year. 'year
      Hope!!This' .$reg. 'Registration number could be useful.I will be available on' .$phone."\n".'Thanking you!!' ;
mail($to,$subject,$msg,'From:'.$email);



}
else if(!empty($name)&&!empty($email)&&!empty($phone)&&!empty($purpose)&&!empty($affiliated)){
  $group='Other';
  $dbc=mysqli_connect('localhost','root','','guesthouse');

  $query="INSERT INTO other VALUES('$name','$email','$phone','$purpose','$affiliated')";
  $result=mysqli_query($dbc,$query);
  echo '<div class="success">';
  echo '<div class="row"><div class="col-md-12" style="text-align:center;">';
  echo '<p><img src="images/tick.png" class="img-fluid" style="height:120px;width:100px;"></p>';
  echo '<p><h1 class="text" style="font-size:300%;">Thanks for reaching out!</h1>';
  echo '<span>Your message just showed up in our inbox.Please wait for your confirmation</span></p>';
  echo '</div></div></div>';
  echo '<div class="footer" style="background:#023668;padding:20px;">';
  echo '<div class="row">
       <div class="col-md-12" style="text-align:center;">
       <img src="images/logo.gif" class="img-fluid" style="height:100px;width:100px;"> <br/>
       <h2 class="text" style="color:white;">Indian Institute of Information Technology</h2>
       <a href="index.php" style="background:orange;color:white;border-radius:10px;padding:10px;">Main Page</a>
       </div>
       </div>';
  echo '</div>';
  mysqli_close($dbc);

  $to='sanathsingavarapu99@gmail.com';
  $subject='Guest house Booking';
  $msg='I am' .$name. 'and I want to book a room and my purpose to visit is'.$purpose.'I am from'.$affiliated.
        'I will be available on'.$phone."\n".'Thanking you!!' ;
  mail($to,$subject,$msg,'From:'.$email);


}
else{
  echo 'Please enter all information!!!';
}


$dbc=mysqli_connect('localhost','root','','guesthouse');
$query="INSERT INTO admindata VALUES('$name','$email','$phone','$group',NOW(),0,0)";
$result=mysqli_query($dbc,$query);
mysqli_close($dbc);


 ?>
 

</body>
</html>
