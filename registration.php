<!DOCTYPE html>
<html lang=en>
    <head>
        <meta chartset="UTF-8">
        <title>Registration</title>
    </head>
<body>
    <h1>Welcome to php</h1>
    <nav>
    <ul>
        <li><a href="Index.php">Home</a>
        <li><a href="calculation.php">calculation</a>
        <li><a href="registration.php">registration</a>
    </ul>
    </nav>
<form action="welcome.php" method="post">
<lable for="fullname">Full Name:</lable>
<input type="text" name="fullname" id="fullname" required><br>
<lable for="age">Age:</lable>
<input type="number" name="age" id="age" required><br>
<lable for="email">Email:</lable>
<input type="text" name="email" id="email" required><br>
<lable for="phone">Phone:</lable>
<input type="tel" name="phone" id="phone" required><br>
<input type="submit" value="Register"> <br>
</form>

</body>
</html>