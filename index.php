<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First page</title>
</head>
<form action="">
    <label>
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
    </label>
    <label for="">
        <select name="operator" id="">
            <option value="None">None</option>
            <option value="Add">Add</option>
            <option value="Subtraction">Substraction</option>○○○
            <option value="Multiplication">Multiplication</option>
            <option value="Device">Devide</option>
        </select>
    </label>
    <br/>
    <button name="submit" type="submit" value="submit">Calculate</button><p>The answer is : </p>
<br/>
<body>
<?php
    if (isset($_GET['submit'])){
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator){
            case "None":
                echo "You have to select a operator.";
                break;
            case "Add":
                echo $result1 + $result2;
                break;
            case "Subtraction":
                echo $result1 - $result2;
                break;
            case "Multiplication":
                echo $result1 * $result2;
                break;
            case "Device":
                echo $result1 / $result2;
                break;
        }
    }
?>
</body>
</html>
