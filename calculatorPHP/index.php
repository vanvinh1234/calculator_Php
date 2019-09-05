<?php
class Calculator
{
    public $firstOperand;
    public $secondOperand;
    public function setNumber($firstOperand, $secondOperand){
        $this->firstOperand = $firstOperand;
        $this->secondOperand = $secondOperand;
    }
    public function addCalculator()
    {
        return $this->firstOperand + $this->secondOperand;
    }
    public function minusCalculator()
    {
        return $this->firstOperand - $this->secondOperand;
    }
    public function multiCalculator()
    {
        return $this->firstOperand * $this->secondOperand;
    }
    public function divisionCalculator()
    {
       return $this->firstOperand/$this->secondOperand;
    }
}

function calculator()
{
    global $operator, $calculator;
    switch ($operator) {
        case 'add':
            return $calculator->addCalculator();
            break;
        case 'minus':
            return $calculator->minusCalculator();
            break;
        case 'multi':
            return $calculator->multiCalculator();
            break;
        case 'division':
            return $calculator->divisionCalculator();
            break;
    }
}

$calculator = new Calculator();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Simple Calculator</h2>
<form method = "post">
    First operand: <input type="number" name="firstOperand"/>
    Operator:<select name ="typeCalculator">
        <option value="add">Addition</option>
        <option value="minus">Subtraction</option>
        <option value="multi">Multiplication</option>
        <option value="division">division</option>
    </select>
    Second operand:<input type="number" name="secondOperand"/>
    <button type ="submit">Calculator</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstOperand = $_POST["firstOperand"];
    $secondOperand = $_POST["secondOperand"];
    $operator = $_POST["typeCalculator"];
    $calculator->setNumber($firstOperand, $secondOperand);
    echo '='.calculator();
}
?>
</body>
</html>