<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition Form</title>
</head>
<body>
    <h2>Addition Form</h2>
    <form method="post" action="">
        <label for="num1">Enter first number:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        <label for="num2">Enter second number:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>
        <input type="submit" name="submit" value="Calculate Sum">
    </form>

    <?php
    // Check if form is submitted
    if(isset($_POST['submit'])) {
        // Get values from form
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Calculate sum
        $sum = $num1 + $num2;

        // Display result
        echo "<p>The sum of $num1 and $num2 is: $sum</p>";
    }
    ?>
</body>
</html>
