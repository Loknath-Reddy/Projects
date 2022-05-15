<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>student login</title>
  <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet"><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->

<section class='login' id='login'>
  
    &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <img alt="RGMCET Logo" src="https://www.rgmcet.edu.in/assets/img/logo/logo.jpg" width="95" height="85" align="center">
   <h1 align="center">RGMCET</h1>
  <br>
  <h1 class='company'>STUDENT MENTORSHIP</h1>
   <p class='msg'>Welcome back</p>
  <div class='form'>
    <form action="loginProcess.php" method="post">
  <input type="text" placeholder='STUDENT ID' class='text' name="user"><br>
  <input type="password" placeholder='PASSWORD' name ="password"><br>
  <label>Role : </label>
  <select id="role" name="role">
    <option value="student">Student</option>
    <option value="mentor">Mentor</option>
  </select>
  <button type="submit" name="login" class="btn-login">Login</button>
  
    </form>
  </div>
</section>
</body>
</html>
