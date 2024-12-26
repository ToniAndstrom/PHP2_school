<?php

class Calculator
{
    public $number1;
    public $number2;
    public $operation;

    public function __construct($number1, $number2, $operation)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
        $this->operation = $operation;
    }

    public function count()
    {
        return match ($this->operation) {
            "add" => $this->number1 + $this->number2,
            "subtract" => $this->number1 - $this->number2,
            "multiply" => $this->number1 * $this->number2,
            "divide" => $this->number2 == 0 ? "ERROR" : $this->number1 / $this->number2,
            default => "invalid operation"
        };
    }
}
$result = "";

if (isset($_POST["submit"])) {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $operation = $_POST["operation"];

    $calculation = new Calculator($number1, $number2, $operation);
    $result = $calculation->count();
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calculator.css">
    <title>Document</title>
</head>

<body>
    <div class="calculator">
         
        <h1> PHP CALCULATOR</h1><br>
        <form action="calculator.php" method="post">
            Number 1:<label for="number1"></label>
            <input type="number" name="number1" required>
            <label for="operation">Operation: </label>
            <select name="operation" id="operation">
                <option value="add">ADD</option>
                <option value="subtract">SUBTRACT</option>
                <option value="multiply">MULTIPLY</option>
                <option value="divide">DIVIDE</option>
            </select>
            Number 2:<label for="number2"></label>
            <input type="number" name="number2" required><br>
            <button name="submit">COUNT</button><br>
            <label for="result">Result</label>
            <input type="reset" name="result" value=<?= $result ?>>
    </div>

<footer>&copy;Toni Andström</footer>
</body>

</html>