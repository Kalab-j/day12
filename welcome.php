<!DOCTYPE html>
<html lang=en>
    <head>
        <meta chartset="UTF-8">
        <title>Home</title>
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
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    echo "<p>FULL NAME: $fullname</p>";
     echo "<p>Age: $age</p>";
      echo "<p>Email: $email</p>";
       echo "<p>Phone: $phone</p>";
       if ($age < 15) {
        echo "<p>Message: You are young! keep learning </p>";
} elseif ($age >= 15 && $age < 25) {
    echo "<p>Message: you are at great age</p>";
}else {
    echo "<p>message:yujery"
}
}
?>
</body>
</html>