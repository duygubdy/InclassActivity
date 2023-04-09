<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Currency Calculator</title>
    <link rel="stylesheet" href="Activity5Style.css" />
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label>From:</label>
        <input type="text" name="from" id="from" value="<?php if(isset($_POST['from'])) echo htmlspecialchars($_POST['from']); else echo '0'; ?>">
        <label>Currency:</label>
        <select name="from-currency" id="from-currency">
            <option value="USD" <?php if(isset($_POST['from-currency']) && $_POST['from-currency'] == 'USD') echo 'selected'; ?>>US Dollar</option>
            <option value="CAD" <?php if(isset($_POST['from-currency']) && $_POST['from-currency'] == 'CAD') echo 'selected'; ?>>Canadian Dollar</option>
            <option value="EUR" <?php if(isset($_POST['from-currency']) && $_POST['from-currency'] == 'EUR') echo 'selected'; ?>>Euro</option>
        </select><br>

        <label>To:</label>
        <input type="text" name="to" id="to" value="<?php if(isset($_POST['submit'])) echo htmlspecialchars($_POST['to']); else echo '0'; ?>" disabled>
        <label class="to-currency-label">Currency:</label>
        <select name="to-currency" id="to-currency">
            <option value="USD" <?php if(isset($_POST['to-currency']) && $_POST['to-currency'] == 'USD') echo 'selected'; ?>>US Dollar</option>
            <option value="CAD" <?php if(isset($_POST['to-currency']) && $_POST['to-currency'] == 'CAD') echo 'selected'; ?>>Canadian Dollar</option>
            <option value="EUR" <?php if(isset($_POST['to-currency']) && $_POST['to-currency'] == 'EUR') echo 'selected'; ?>>Euro</option>
        </select><br>

        <input id="convert-button" name="submit" type="submit" value="convert">
    </form>
    <?php
$currency_array = array(
    "USD" => array("USD" => 1,"EUR" => 0.91, "CAD" => 1.35),
    "EUR" => array("EUR" => 1,"USD" => 1.09, "CAD" => 1.47),
    "CAD" => array("CAD" => 1,"USD" => 0.73, "EUR" => 0.67)
);

if(isset($_POST['submit'])) {
    $from_amount = $_POST['from'];
    $from_currency = $_POST['from-currency'];
    $to_currency = $_POST['to-currency'];

    $result = $from_amount * $currency_array[$from_currency][$to_currency];

    echo "<script>
            document.getElementById('to').value = $result;
            document.getElementById('from').value = $from_amount;
          </script>";
}
?>
</body>
</html>