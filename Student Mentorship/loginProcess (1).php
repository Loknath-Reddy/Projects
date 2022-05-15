<?php 
  session_start();
  require('connect.php');
  if (isset($_POST['login'])) {
    $_SESSION['username'] = $_POST['user'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['role'] = $_POST['role'];
    $conn = mysqli_connect("localhost", "root", "", "student");
    $uid = $_POST['user'];
    $password =$_POST['password'];
    $sql1 = "SELECT * from studentlogin WHERE uid = '$uid' AND password = '$password'";
    $result1 = mysqli_query($conn, $sql1);
    $sql2 = "SELECT * from mentorlogin WHERE uid = '$uid' AND password = '$password'";
    $result2 = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($result1)>0 && $_SESSION['role'] == "student") {
      header("location:home.php");
    }
    elseif(mysqli_num_rows($result2)>0 && $_SESSION['role'] == "mentor") {
      header("location:mentorhome.php");
    } else {
      header("location:register.php");
    }
  }
?>