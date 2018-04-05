<html>
<head>
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
body{
  font-family: 'Dosis', sans-serif;
}
table, th, td {
    border: 1px solid black;
}
tr:hover {background-color: #f5f5f5;}th {background-color: #4CAF50;color: white;}
.no{
  background:green;color:white;padding:5px;
}
.yes{
  background:red;color:white;padding:5px;
}
a:link{
  color:white;font-size:120%;
  text-decoration:none;
}
a:visited{
  color:white;font-size:120%;
  text-decoration:none;
}
.database{
  margin:0px auto;
  padding:40px;
  padding-top:10px;

}
.header{
  font-size:200%;
  text-align:center;
  font-family: 'Oswald', sans-serif;  
}
</style>
</head>
<body>
<div class="header">
<h1 style="font-size:200%;">Admin Panel</h1>
</div>
<div class="sortby">
<nav class="navbar navbar-expand-lg navbar-light bg-dark" style="padding-left:40px;padding-right:40px;">
  <a class="navbar-brand" href="#"style="color:white">Sort By:</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="adminpanel.php" name="sort" value="date"style="color:white">Date <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="approved.php" name="sort" value="approved"style="color:white">Approved</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="faculty.php" name="sort" value="faculty"style="color:white">Faculty</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="studentrelate.php" name="sort" value="related"style="color:white">Student Related</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="other.php" name="sort" value="group" style="color:white">Other</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST" action="search.php">
      <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Search</button>
    </form>
  </div>
</nav>
</div>
<div class="database">
<?php 
$dbc=mysqli_connect('localhost','root','','guesthouse');

$query="SELECT * FROM admindata where approved=1";
$result=mysqli_query($dbc,$query);
echo '<table style="font-size:150%;">';
echo '<tr><th style="width:150;">Name</th><th  style="width:300;">Email Id</th><th style="width:150;">Phone Number</th>
<th style="width:150;">Group</th><th style="width:150;">Booking Date</th><th style="width:300;">Confirm Booking</th></tr>';
echo'</table>';
echo '<table>';
while($row=mysqli_fetch_array($result)){
  
  echo '<tr><td style="width:150;">'.$row['name'].'</td>';
  echo '<td style="width:300;">'.$row['email'].'</td>';
  echo '<td style="width:150;">'.$row['phone'].'</td>';
  echo '<td style="width:150;">'.$row['type'].'</td>';
  echo '<td style="width:150;">'.$row['booking_date'].'</td>';
  #echo '<td style="width:150;"><div class="yes"><a href="../cancel.php?name='.$row['name'].'&amp;email='.$row['email'].'&amp;phone='.$row['phone'].
  #'&amp;group='.$row['type'].'&amp;booking_date='.$row['booking_date'].'">Remove</a></div></td>';
  echo '<td style="width:300;"><div class="no"><a href="../approve.php?name='.$row['name'].'&amp;email='.$row['email'].'&amp;phone='.$row['phone'].
  '&amp;group='.$row['type'].'&amp;booking_date='.$row['booking_date'].'">Approved</a></div></td></tr>';
}

echo '</table>';

mysqli_close($dbc);
?>
</div>
</body>
</html>