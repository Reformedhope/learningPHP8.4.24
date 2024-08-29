<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DisplayBanking</title>       
</head>
<body>
    <?php

    require 'Account.php';

    $accountInfo = new Account();
    $accountInfo->accountNumber = "123456789";
    $accountInfo->accountHolder = "Stephanie Salzburg";
    $accountInfo->balance = 1000.00;


    echo "This is the start of the banking app";
    
    
    ?>
    <form action ="display-banking.php" method="POST">
    <input type ="number" id = "depositAmount" name ="depositAmount" required>
    <button type = "submit">Deposit</button>


    <?php
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $depositAmount = $_POST['depositAmount'];

    if (!empty($depositAmount)) {
        echo "Thank you for your deposit";
        $currentBalance = $accountInfo->deposit($depositAmount);
        echo "This is your new balance: " . $currentBalance;   
    }
}

    ?>
</form>
</body>
</html>