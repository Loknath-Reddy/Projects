<?php
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
		// code...
		$conn = mysqli_connect("localhost", "root", "", "student") or die("Connection Failed: ".mysqli_connect_error());
		$uid = $_POST['user'];
		$password = $_POST['password'];
		$role = $_POST['role'];


		if ($role == "student") {
			// code...
			$sql = "INSERT INTO studentlogin (uid, password) VALUES ('$uid', '$password')";
			$query = mysqli_query($conn, $sql);
			if ($query) {
				header('location:home.php');
			}
			else {
				echo "You already Registered go back to the login page";
			}
		}
		if ($role == "mentor") {
			$sql = "INSERT INTO mentorlogin (uid, password) VALUES ('$uid', '$password')";
			$query = mysqli_query($conn, $sql);
			if ($query) {
				header('location:mentorhome.php');
			}
			else {
				echo "You already Registered go back to the login page";
			}
		}

	}
?>