<?php

require_once "init.php";

use Sessions\Session;
Session::start();

$customerName = $_SESSION['customerName'];

$CustomerOrderList = new OrderList;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbutts</title>
    <script src="axios.js" type="text/javascript"></script>
</head>
<body>
    <?php
        echo '<h1> Hi '.$customerName.', what would you like to have today?';
    ?>
    <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post" id="itemForm">
        <h2>Food & Beverages</h2>
        <select name="selection" id="selection">
            <option value="placeholder" selected>-- Select a Food or Beverage --</option>
        </select>
        <hr>
        <h2>Menu</h2>
        <div id="menu">
        </div>
        <button type="submit" form="itemForm" name="addOrder">Add To Your Order</button>
        <hr>
        <h2>Your Orders</h2>
        <div id="orders">
        </div>
    </form>
</body>
<script>
    window.addEventListener("load",getConsumables());
    document.getElementById("selection").addEventListener("change", getMenu);


    function getConsumables(){  
        axios
            .get("DBQuery.php", {
                params: {
                    all: true,
                },
            })
            .then((response) => showAll(response))
            .catch((error) => {
                console.error(error);
            });
    }

    function showAll(response){
        var result = response;
        for(i in result.data){
            var option = document.createElement("option");
            option.value = result.data[i].conName;
            option.text = result.data[i].conName;
            var select = document.getElementById("selection");
            select.appendChild(option);
        }
    }

    function getMenu(){
        var menuID = document.getElementById("selection").value;
        axios
            .get("DBQuery.php", {
                params: {
                    category: menuID,
                },
            })
            .then((response) => showMenu(response))
            .catch((error) => {
                console.error(error);
            });
    }

    function showMenu(response){
        var result = response;
        var menu = document.getElementById("menu");
        layout = ``;
        for(i in result.data){
            layout += `
            <input type="radio" id="${result.data[i].prodID}" name="menuItem" value="${result.data[i].prodName}.${result.data[i].prodBasePrice}.${result.data[i].conID}">
            `;
            
            layout +=
            "<label for=" + 
            result.data[i].prodID +
            "> " +
            result.data[i].prodName +
            " </label><br>";
        }

        if(result.data[0].conID >= 4){
            layout += `
                <br>
                <div id="menuOptions">
                    <select name="option" id="option" >
                        <option value=1>One Portion</option>
                        <option value=2>Two Portion</option>
                        <option value=3>Three Portion</option>
                    </select>
                </div>
                <br>

            `
        } else {
            layout += `
                <br>
                    <div id="menuOptions">
                    <select name="option" id="option">
                        <option value=1>Tall</option>
                        <option value=2>Grande</option>
                        <option value=3>Venti</option>
                    </select>
                </div>
                <br>
            `
        }
        menu.innerHTML = layout;
    }

</script>
</html>

<?php

    if($_REQUEST){
        if(isset($_REQUEST['addOrder'])){
            if(isset($_REQUEST['menuItem'])){
                $itemData = explode(".", $_REQUEST['menuItem']);
                $OrderList->addOrder($itemData[0],floatval($itemData[1]),$itemData[2],$_REQUEST['option']);
                echo $_SESSION['orderList'];
            }
        }
    }


?>