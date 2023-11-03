<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>
</head>
<body>
    <h2>Electricity Bill Calculator</h2>
    <form method="post" action="">
        <label for="units">Enter Units Consumed:</label>
        <input type="text" name="units" required><br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $units = $_POST['units'];

        if (is_numeric($units)) {
            $bill = 0;

            if ($units < 0) {
                echo "Units consumed cannot be negative.";
            } elseif ($units <= 50) {
                $bill = $units * 3.50;
            } elseif ($units <= 100) {
                $bill = 50 * 3.50 + ($units - 50) * 4.00;
            } elseif ($units <= 200) {
                $bill = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
            } else {
                $bill = 50 * 3.50 + 50 * 4.00 + 100 * 5.20 + ($units - 200) * 6.50;
            }

            echo "Electricity Bill for $units units is Taka. " . number_format($bill, 2);
        } else {
            echo "Please enter a valid numeric value for units.";
        }
    }
    ?>
</body>
</html>