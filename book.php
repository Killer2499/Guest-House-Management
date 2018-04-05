<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
 integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
 crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <style>body{overflow-x:hidden;}</style>
 <title>guesthouse</title>
 </head>
<body>
  <div class="row" style="padding-top:20px;margin:0px auto;">
    <div class="col-md-12" style="text-align:center">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" >
    <li class="nav-item" >
      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" >Faculty</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Related to Student</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Other</a>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <form method="POST" action="db.php">
        <label for="name">Name:</label>
        <input type="text" name="name" value="" required placeholder="Enter your name" size="30"></input><br/>
        <label for="name">Email:</label>
        <input type="text" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
        placeholder="Enter your email address" size="30"></input><br/>
        <label for="name">Phone:</label>
        <input type="tel" name="phone" required maxlength="10" placeholder="Enter your mobile number" size="30"></input><br/>
       <label for="reference">Reference Id:</label>
       <input type="text" name="reference" required placeholder="Enter your reference number" size="30"></input>
       <input type="submit" name="submit" value="Book"></input>
      </form>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      <form method="POST" action="db.php">
        <label for="name">Name:</label>
        <input type="text" name="name" value="" required autofocus placeholder="Enter your name" size="30"></input><br/>
        <label for="name">Email:</label>
        <input type="text" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
          placeholder="Enter your email address" size="30"></input><br/>
        <label for="name">Phone:</label>
        <input type="tel" name="phone" required maxlength="10" placeholder="Enter your mobile number" size="30"></input><br/>
       <label for="namestudent">Name of the Student:</label>
       <input type="text" name="namestudent" required placeholder="Enter the name of the student" size="30"></input><br/>
       <label for="year">Year</label>
       <input type="tel" name="year" required placeholder="Enter the student's year"  size="30"></input><br/>
       <label for="reg">Registration Number:</label>
       <input type="tel" name="reg" required placeholder="Enter the student's Registration number"  size="30"></input><br/>
       <label for="relation">Relation:</label>
       <input type="text" name="relation" required placeholder="Enter your relation with the student" size="30"></input><br/>
       <input type="submit" name="submit" value="Book"></input>
      </form>
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
      <form method="POST" action="db.php">
        <label for="name">Name:</label>
        <input type="text" name="name" value="" required autofocus placeholder="Enter your name" size="30"></input><br/>
        <label for="name">Email:</label>
        <input type="text" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
        placeholder="Enter your email address" size="30"></input><br/>
        <label for="name">Phone:</label>
        <input type="tel" name="phone" required maxlength="10" placeholder="Enter your mobile number" size="30"></input><br/>
       <label for="purpose">Purpose of Visit:</label>
       <input type="text" name="purpose" required placeholder="Enter your purpose to visit" size="30"></input><br/>
       <label for="affiliated">In Affiliation to college/company:</label>
       <input type="text" name="affiliated" required placeholder="Enter the college/company you are affiliated to" size="30"></input><br/>
       <input type="submit" name="submit" value="Book"></input>
      </form>
    </div>
  </div>
  </div>
  <?php  ?>
</body>
</html>
