<?php

class Heat
{
    public $celsius;
    public $operation;

    public function __construct($celsius, $operation)
    {
        $this->celsius = $celsius;
        $this->operation = $operation;
    }
    public function heat_convert()
    {
        return match ($this->operation) {
            "fahrenheit" => $this->celsius * (9 / 5) + 32,
            "kelvin" => $this->celsius * 274.15,
            default => "Invalid operation"
        };
    }
};

class Speed
{
    public $kilometer;
    public $operation;

    public function __construct($kilometer, $operation)
    {
        $this->kilometer = $kilometer;
        $this->operation = $operation;
    }
    public function speed_convert()
    {
        return match ($this->operation) {
            "m/sec" => $this->kilometer * 0.2777777778,
            "knots" => $this->kilometer * 0.539956803,
            default => "Invalid operation"
        };
    }
};
class Mass
{
    public $weight;
    public $operation;

    public function __construct($weight, $operation)
    {
        $this->weight = $weight;
        $this->operation = $operation;
    }
    public function mass_convert()
    {
        return match ($this->operation) {
            "kg_to_g" => $this->weight * 1000,
            "g_to_kg" => $this->weight * 0.001,
            default => "Invalid operation"
        };
    }
};

$heat_result = "";
$speed_result = "";
$mass_result = "";

if (isset($_POST["heat_submit"])) {
    $celsius = $_POST["celsius"];
    $heat_convertor = $_POST["heat_convertor"];

    $heat_conversion = new Heat($celsius, $heat_convertor);
    $heat_result = $heat_conversion->heat_convert();
}

if (isset($_POST["speed_submit"])) {
    $kilometer = $_POST["kilometer"];
    $speed_convertor = $_POST["speed_convertor"];

    $speed_conversion = new Speed($kilometer, $speed_convertor);
    $speed_result = $speed_conversion->speed_convert();
}

if (isset($_POST["mass_submit"])) {
    $weight = $_POST["weight"];
    $mass_convertor = $_POST["mass_convertor"];

    $mass_conversion = new Mass($weight, $mass_convertor);
    $mass_result = $mass_conversion->mass_convert();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <h1 class="title">MEASUREMENT CONVERTOR</h1>
    <div id="container">
        <div>
            <form action="measurement.php" method="post" id="heat">
                <h1>HEAT</h1>
                <label for="celsius">Celsius</label>
                <input type="number" name="celsius" required><br>
                <select name="heat_convertor" id="heat_convertor">
                    <option value="fahrenheit">TO FAHRENHEIT</option>
                    <option value="kelvin">TO KELVIN</option>
                </select><br>
                <input type="submit" name="heat_submit" id="submit"><br>
                <label for="heat_result">Result</label>
                <input type="text" name="heat_result" value=<?= $heat_result ?>>
            </form>
        </div>
        <br>
        <div>
            <form action="measurement.php" method="post" id="speed">
                <h1>SPEED</h1>
                <label for="kilometer">Km/H</label>
                <input type="number" name="kilometer" required><br>
                <select name="speed_convertor" id="speed_convertor">
                    <option value="m/sec">TO METERS PER SECOND</option>
                    <option value="knots">TO KNOTS</option>
                </select><br>
                <input type="submit" name="speed_submit" id="submit"><br>
                <label for="speed_result">Result</label>
                <input type="text" name="speed_result" value=<?= $speed_result ?>>
            </form>
        </div>
        <br>
        <div>
            <form action="measurement.php" method="post" id="mass">
                <h1>MASS</h1>
                <label for="weight">Weight</label>
                <input type="number" name="weight" required><br>
                <select name="mass_convertor" id="mass_convertor">
                    <option value="kg_to_g">KILOGRAMS TO GRAMS</option>
                    <option value="g_to_kg">GRAMS TO KILOGRAMS</option>
                </select><br>
                <input type="submit" name="mass_submit" id="submit"><br>
                <label for="mass_result">Result</label>
                <input type="text" name="mass_result" value=<?= $mass_result ?>>
            </form>
        </div>

    </div>

    <footer> &copy;Toni Andström</footer>
</body>

</html>