<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php
    // require 'CheckingAccount.php';
    // require 'PremiumCheckingAccount.php';
    require 'ChildSavor.php';
    

    
    // $checking = new CheckingAccount();
    // $premiumChecking = new PremiumCheckingAccount();
    $childSavor = new ChildSavor();
    echo 'number of transfer a moonth'. $childSavor->xferPerMonth . '</br>';
    //echo 'Minimum balance to hold' . $premiumChecking->minimumBalance . '</br>';
//method calls on an instance of the PremiumCheckingAccount class.
    $childSavor->deposit(20);
    $childSavor->withdraw(10);
    //$childSavor->transfer(5);


 
    ?>
    
</body>
</html>