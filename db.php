<html>
<head>
   <title>guesthouse</title>
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
echo 'Sucessful!!!';
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
echo 'Sucessful!!!';
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
echo 'Sucessful!!!';
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
$query="INSERT INTO admindata VALUES('$name','$email','$phone','$group',NOW(),0)";
$result=mysqli_query($dbc,$query);
mysqli_close($dbc);


 ?>
 <br/><a href="index.php">Main Page</a>

</body>
</html>
