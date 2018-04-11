<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Dosis|Open+Sans+Condensed:300" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
 integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<title>Confirm Cancellation</title>
<style>
body{
    background:#eee;overflow-x:hidden;
}
.cancel{
border:1px solid black;background:white;
font-family: 'Open Sans Condensed', sans-serif;font-size:150%;
margin:0px auto;padding:50px;
padding-left:200px;padding-right:200px;}
.head{
    text-align:center;font-family: 'Dosis', sans-serif;font-size:300%;
}
#admin{
    background:orange;
    color:white;
    padding:10px;
    margin:0px auto;
}
#yes{
    background:green;
    color:white;
    padding:10px;

}
#no{
    background:red;
    color:white;
    padding:10px;
    margin:0px auto;
}
.done{
    text-align:center;
    position:absolute;
    top:100px;
    left:40%;
}
</style>
</head>
<body>
<?php

$dbc=mysqli_connect('localhost','root','','guesthouse');
if(isset($_GET['name'])&&isset($_GET['email'])&&isset($_GET['phone'])&&
isset($_GET['group'])&&isset($_GET['booking_date'])){

$name=$_GET['name'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$group=$_GET['group'];
$booking_date=$_GET['booking_date'];

}
else if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['phone'])&&
isset($_POST['group'])&&isset($_POST['booking_date'])){
 $name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$group=$_POST['group'];
$booking_date=$_POST['booking_date'];

}
else{
    echo 'Sorry no high score was specified for removal';
}
if(isset($_POST['confirm'])){
    if($_POST['confirm']=='Yes,Go Ahead'){
        $dbc=mysqli_connect('localhost','root','','guesthouse');
        $query="DELETE  FROM admindata where email='$email' LIMIT 1 ";
        $query1="DELETE  FROM faculty where email='$email' LIMIT 1 ";
        $query2="DELETE  FROM studentrelated where email='$email' LIMIT 1 ";
        $query3="DELETE  FROM other where email='$email' LIMIT 1 ";
        mysqli_query($dbc,$query);
        mysqli_query($dbc,$query1);
        mysqli_query($dbc,$query2);
        mysqli_query($dbc,$query3);
        mysqli_close($dbc);
        echo '<div class="done">';
        echo '<p><img src="images/delete.png" style="height:300px;width:300px;" class="img-fluid"></p>';
        echo '<p class="text">Booking is sucessfuly Removed!</p>';
        echo '<p ><a style="background:orange;padding:10px;border-radius:10px;color:white;"href="admin/adminpanel.php">Back to Admin Panel</a></p>';
        echo '</div>';
    }
    else{
        echo 'Not Removed';
    }
}
else if(isset($name)&&isset($email)&&isset($phone)&&
isset($group)&&isset($booking_date)){
    echo '<div class="head"> Confirm Cancellation</div>';
    echo '<div class="row"><div class="cancel">';
    echo 'Are u sure want to cancel this booking<br/>';
    echo '<form method="post" action="cancel.php">';
    echo 'Name:'.$name.'</br>';
    echo 'Email:'.$email.'</br>';
    echo 'Phone:'.$phone.'</br>';
    echo 'Group:'.$group.'</br>';
    echo 'Booking Date:'.$booking_date.'</br>';

    echo '<input type="submit" name="confirm" value="Yes,Go Ahead" id="yes"/>';
    echo '<input type="submit" name="confirm" value="No,I Changed my mind" id="no"/><br/>';
   
    
    echo '<input type="hidden" name="name" value="'.$name.'"/>';
    echo '<input type="hidden" name="phone" value="'.$phone.'"/>';
    echo '<input type="hidden" name="email" value="'.$email.'"/>';
    echo '<input type="hidden" name="group" value="'.$group.'"/>';
    echo '<input type="hidden" name="booking_date" value="'.$booking_date.'"/>';
    echo '</form>';
    echo '</div></div>';
}?>
</body>
</html>