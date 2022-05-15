<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIgn IN</title>
</head>
<body>
    <form action="sign.php" target="_parent" method="post">
        <label>
            <strong>Enter User ID :</strong>
        </label>
        <input type="text" name="user"><br>
        <label>
            <strong>Password      :</strong>
        </label>        
        <input type="text" name="password"><br>
        <select id="role" name="role">
            <option value="student">Studnet</option>
            <option value="mentor">Mentor</option>
        </select>
        <button type="submit" name="signin">Submit</button>
        </form>
        <button type="submit" name="signin">Submit</button>
</body>
</html>