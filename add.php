<!DOCTYPE html>
<html>
<head>
    <title>Addition in PHP</title>
</head>
<body>
    <h2>Addition Form</h2>
    <form method="post" action="">
        <label for="num1">Number 1:</label><br>
        <input type="number" id="num1" name="num1" required><br><br>
        <label for="num2">Number 2:</label><br>
        <input type="number" id="num2" name="num2" required><br><br>
        <input type="submit" value="Add">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['n1'];
        $num2 = $_POST['num2'];
        $sum = $num2=$num1

        echo "<h2>Result</h2>";
        echo "The sum of " . htmlspecialchars($num1) . " and " . htmlspecialchars($num2) . " is " . htmlspecialchars($sum) . ".";
    }
    ?>
</body
