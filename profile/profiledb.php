<html>
<head>
   <title>guesthouse</title>
</head>
<body>
<?php 
  session_start();

  $username=$_SESSION['username'];
  if(isset($_POST['submit'])){
  $reference=$_POST['reference'];
  $year=$_POST['year'];
  $reg=$_POST['reg'];
  $relation=$_POST['relation'];
  $namestudent=$_POST['namestudent'];
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
  echo 'Sucessful';
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
  echo 'Sucessful';
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
  $query="INSERT into other (name,email,phone,purpose,affiliated) values('$name','$email','$phone','$purpose','$affiliated')";
  $result=mysqli_query($dbc,$query);
  echo 'Sucessful';
  mysqli_close($dbc);
  $dbc= mysqli_connect('localhost','root','','guesthouse');
  $query="INSERT into admindata (name,email,phone,type,booking_date,approved) 
  values('$name','$email','$phone','$group',NOW(),'0')";
  $result=mysqli_query($dbc,$query);
  mysqli_close($dbc);
}
   ?>
 <br/><a href="profile.php">Main Page</a>

</body>
</html>
