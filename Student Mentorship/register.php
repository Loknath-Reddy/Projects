<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
</head>
<h1 align="center">Student Metorship</h1>
<body bgcolor="#2ee69c">
    <div><h2>Registration</h2></div>
    <form action="connect.php" method="post">
        <label for="uid">
        <strong>Enter User ID :</strong>
        </label>
        <input type="text" name="user" id = 'user'><br><br><br>
        <label for="password">
            <strong>Password :</strong>
        </label>       
        <input type="text" name="password"><br><br><br> 
        <label for="role"><strong>Enter your role   </strong></label>
        <select id="role" name="role">
            <option value="student">Student</option>
            <option value="mentor">Mentor</option>
        </select><br><br><br>
        <input type="submit" name="submit" id="submit"/>
        </form>
</body>
</html>