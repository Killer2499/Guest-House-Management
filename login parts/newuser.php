<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <body>
<?php


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

$dbc=mysqli_connect('localhost','root','','login');
$query="INSERT INTO userdata VALUES('$username','$email','$password','$phone')";
$result=mysqli_query($dbc,$query);
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

?>

  </body>
</html>
