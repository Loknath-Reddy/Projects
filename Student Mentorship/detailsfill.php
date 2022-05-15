<?php
	session_start();

	if (isset($_POST['submit'])) {
		$uid = $_SESSION['username'];
		$name = $_POST['name'];
		$fname = $_POST['fname'];
		$mname =$_POST['mname'];
		$dob = $_POST['dob'];
		$category = $_POST['category'];
		$
		$conn = mysqli_connect("localhost", "root", "", "student");
		$sql1 = "INSERT INTO studentlogin (uid, password) VALUES ('$uid', '$password')";

		
	}