<html>
<head>
   <title>guesthouse</title>
   <link href="https://fonts.googleapis.com/css?family=Dosis|Open+Sans+Condensed:300|Oswald" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
 integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <style>
   .success{
   text-align:center;
   padding-top:90px;
   padding-bottom:85px;
   background:#DDDAD8;
   }
   body{
     overflow-x:hidden;
   }
   </style>
</head>
<body>
<?php 
  session_start();

  $username=$_SESSION['username'];
  if(isset($_POST['submit1'])){
  $reference=$_POST['reference'];}
  if(isset($_POST['submit2'])){
  $year=$_POST['year'];
  $reg=$_POST['reg'];
  $relation=$_POST['relation'];
  $namestudent=$_POST['namestudent'];}
  if(isset($_POST['submit3'])){
  $purpose=$_POST['purpose'];
  $affiliated=$_POST['affiliated'];

}
  $dbc= mysqli_connect('localhost','root','','login');
  $query="SELECT * FROM userdata where username='$username'";
  $result=mysqli_query($dbc,$query);
  mysqli_close($dbc);
  while($row=mysqli_fetch_array($result)){
 $name=$row['username'];
 $phone=$row['phone'];
 $email=$row['email'];
}

if(!empty($reference)){
  $group='Faculty';
  $dbc= mysqli_connect('localhost','root','','guesthouse');
  $query="INSERT into faculty (name,email,phone,reference) values('$name','$email','$phone','$reference')";
  $result=mysqli_query($dbc,$query);
  
  mysqli_close($dbc);
  $dbc= mysqli_connect('localhost','root','','guesthouse');
  $query="INSERT into admindata (name,email,phone,type,booking_date,approved) 
  values('$name','$email','$phone','$group',NOW(),'0')";
  $result=mysqli_query($dbc,$query);
  mysqli_close($dbc);
}
if(!empty($reg) && !empty($relation)&& !empty($year)){
  $group='Student Related';
  $dbc= mysqli_connect('localhost','root','','guesthouse');
  $query="INSERT into studentrelated (name,email,phone,studentname,registration,studentyear,relation) values('$name','$email','$phone','$namestudent','$reg','$year','$relation')";
  $result=mysqli_query($dbc,$query);
  
  mysqli_close($dbc);
  $dbc= mysqli_connect('localhost','root','','guesthouse');
  $query="INSERT into admindata (name,email,phone,type,booking_date,approved) 
  values('$name','$email','$phone','$group',NOW(),'0')";
  $result=mysqli_query($dbc,$query);
  mysqli_close($dbc);
}
if(!empty($purpose)&&!empty($affiliated)){
  $group='Other';
  $dbc= mysqli_connect('localhost','root','','guesthouse');
  $query="INSERT into other (name,email,phone,purpose,affiliatedto) values('$name','$email','$phone','$purpose','$affiliated')";
  $result=mysqli_query($dbc,$query);
  
  mysqli_close($dbc);
  $dbc= mysqli_connect('localhost','root','','guesthouse');
  $query="INSERT into admindata (name,email,phone,type,booking_date,approved) 
  values('$name','$email','$phone','$group',NOW(),'0')";
  $result=mysqli_query($dbc,$query);
  mysqli_close($dbc);
}
   ?>
 <?php echo '<div class="success">';
echo '<div class="row"><div class="col-md-12" style="text-align:center;">';
echo '<p><img src="../images/tick.png" class="img-fluid" style="height:120px;width:100px;"></p>';
echo '<p><h1 class="text" style="font-size:300%;">Thanks for reaching out!</h1>';
echo '<span>Your message just showed up in our inbox.Please wait for your confirmation</span></p>';
echo '</div></div></div>';
echo '<div class="footer" style="background:#023668;padding:20px;">';
echo '<div class="row">
     <div class="col-md-12" style="text-align:center;">
     <img src="../images/logo.gif" class="img-fluid" style="height:100px;width:100px;"> <br/>
     <h2 class="text" style="color:white;">Indian Institute of Information Technology</h2>
     <a href="profile.php" style="background:orange;color:white;border-radius:10px;padding:10px;">Main Page</a>
     </div>
     </div>';
echo '</div>'; ?>
<style>

</style>

</body>
</html>
