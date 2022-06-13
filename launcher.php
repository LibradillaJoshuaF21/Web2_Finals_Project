<?php

require_once "init.php";
use Sessions\Session;
Session::start();

Session::remove('orderList');
Session::remove('customerName');
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
        <h1>Welcome to Starbutts</h1>
        <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post" id="nameForm">
            <label>Enter you name and submit</label><br><br>
            <input type="text" name="customerName" id="name"><br><br>
            <button type="submit" form="nameForm" name="submit">Submit</button>
            <?php
                if($_REQUEST){
                    if(isset($_REQUEST['submit'])){
                        if(isset($_REQUEST['customerName']) && !empty($_REQUEST['customerName'])){
                            $_SESSION['customerName'] = $_REQUEST['customerName'];
                            header('Location: selection.php');
                        }
                        else{
                            echo '<br><h3>Please fucking input your name betch</h3>';
                        }
                    }
                }
            ?>
        </form>
    </center>
</body>
</html>