<!DOCTYPE html>
<html lang=en>
    <head>
        <meta chartset="UTF-8">
        <title>calulation</title>
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
<form method="post">
    <lable for="num1">Number 1:</lable><br>
    <input type="number" name="num1" id="num1" required> <br> 
    <lable for="num2">Number 2:</lable><br>
    <input type="number" name="num2" id="num2" required> <br> 
    <lable for="result">result:</lable><br>
    <input type="text" name="result" id="result" readonly> <br> 
    <button type="submit" name="operation" value="add" >+</button>
    <button type="submit" name="operation" value="subtract">-</button>
    <button type="submit" name="operation" value="multiply" >*</button>
    <button type="submit" name="operation" value="divide" >/</button>
    <button type="submit" name="operation" value="modulus" >%</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] =="POST"){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = '';
    switch ($_POST['operation']){
        case 'add':
            $result = $num1 + $num2;
            break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                    case 'divide':
                        $result = $num1 / $num2;
                        break;
                        case 'modulus':
                            $result = $num1 % $num2;
                         break;
    }
    echo "<script>document.getElementById('result').value ='$result';</script>";
}
?>
</body>
</html>