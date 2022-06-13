<?php

require_once "init.php";
use Sessions\Session;
Session::start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbutts</title>
</head>
<body>
    <center>
        <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
            <h2>Here is your receipt <?php echo $_SESSION['customerName']?>! Have a nice day!</h2>
            <?php
                foreach($_SESSION['orderList'] as $key=>$order){
                    echo '<label>'.$order->getName().'   ₱'.$order->getPrice().'</label><br>';
                }
            ?>
            <hr>
            <h3>Total Amount: <?php 
                $totalAmount = 0;
                foreach($_SESSION['orderList'] as $key=>$order){
                    $totalAmount += $order->getPrice();
                }
                echo $totalAmount;
            ?></h3>

            <button type="submit" name="orderAgain">Order Again</button>
            <?php
                if($_REQUEST){
                    if(isset($_REQUEST['orderAgain'])){
                        header('Location: launcher.php');
                    }
                }
            ?>
        </form>
    </center>
</body>
</html>