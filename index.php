<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basic Calculator</title>
</head>
<body>

    <h2>PHP Basic Calculator</h2>
    <form method="post" action="">
        <input type="number" name="num1" placeholder="Enter Number 1" required>
        <select name="operation">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" placeholder="Enter Number 2" required>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        function calculate($num1, $num2, $operation) {
            switch ($operation) {
                case 'add':
                    return $num1 + $num2;
                case 'subtract':
                    return $num1 - $num2;
                case 'multiply':
                    return $num1 * $num2;
                case 'divide':
                    if ($num2 == 0) {
                        return "Division by zero error!";
                    } else {
                        return $num1 / $num2;
                    }
                default:
                    return "Invalid operation";
            }
        }

        $result = calculate($num1, $num2, $operation);
        echo "<h3>Result: $result</h3>";
    }
    ?>
    
</body>
</html>
