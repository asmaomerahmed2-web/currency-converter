<?php
$title = "Smart Currency Converter";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h1>Currency Converter</h1>
        <p>Convert your money easily</p>

        <form method="POST">

            <label>Amount</label>
            <input type="number" name="amount"
                   placeholder="Enter amount" required>

            <label>From Currency</label>
            <select name="from">
                <option value="USD">USD - Dollar</option>
                <option value="EUR">EUR - Euro</option>
                <option value="SDG">SDG - Sudanese Pound</option>
            </select>

            <label>To Currency</label>
            <select name="to">
                <option value="SDG">SDG - Sudanese Pound</option>
                <option value="USD">USD - Dollar</option>
                <option value="EUR">EUR - Euro</option>
            </select>

            <button type="submit">Convert</button>

        </form>

    </div>

</body>
</html>