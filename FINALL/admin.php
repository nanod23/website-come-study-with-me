<!DOCTYPE html>
<html>
<title>Architect - Login Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="form.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="index.html" class="w3-bar-item w3-button"><b>NN</b> COME STUDY WITH ME</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="project.html" class="w3-bar-item w3-button">Projects</a>
      <a href="about.html" class="w3-bar-item w3-button">About</a>
      <a href="contact.html" class="w3-bar-item w3-button">Contact</a>
       <span class="w3-bar-item w3-button1">ADMIN</span>
    </div>
  </div>
</div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:600px">

    <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Login Page</h3>
    <p>ADMIN can view, edit and delete record</p>
   <form method="post">
 
  <div class="container" style="width:100%; float:left;background-color:#906">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" name = "submit">Login</button>
    <button type="reset" style="background-color:#909">Cancel</button>
  </div>
</form>
<?php
	
    if (isset($_POST['submit']))
        {     
   include("connection.php");
	$table_name = "admin";
  
    session_start();
    $username=$_POST['uname'];
    $password=$_POST['psw'];
    $_SESSION['login_user']=$username; 
    $query = mysqli_query($connection,"SELECT username FROM $table_name WHERE username='$username' and password='$password'");
	$num_row = mysqli_num_rows($query);
	$row=mysqli_fetch_array($query);
     if ( $num_row != 0)
    {
     echo "<script language='javascript' type='text/javascript'> location.href='viewdb.php' </script>";   
      }
      else
      {
    echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    }
    }
    ?>
  
  </div>
  </div>
<!-- End page content -->
</div>


</body>
</html>
