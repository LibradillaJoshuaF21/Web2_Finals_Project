<?php

require_once 'DBLibrary.php';

try {
    $dbSource = new PDO('mysql:host=localhost;dbname=starbucks', 'root', '');
} catch(PDOException $e) {
    echo $e->getMessage();
}

$db = new DBLibrary($dbSource);

if(isset($_GET['all'])){
    $result = $db->select()->from('consumables')->getAll();
    $jsonResult = json_encode($result);
    echo $jsonResult;
}

else if(isset($_GET['category']) && $_GET['category'] == 'Tea'){
    $result = $db->select()->from('productlist')->where('conID',1)->getAll();
    $jsonResult = json_encode($result);
    echo $jsonResult;
}

else if(isset($_GET['category']) && $_GET['category'] == 'Frappe'){
    $result = $db->select()->from('productlist')->where('conID',2)->getAll();
    $jsonResult = json_encode($result);
    echo $jsonResult;
}

else if(isset($_GET['category']) && $_GET['category'] == 'Coffee'){
    $result = $db->select()->from('productlist')->where('conID',3)->getAll();
    $jsonResult = json_encode($result);
    echo $jsonResult;
}

else if(isset($_GET['category']) && $_GET['category'] == 'Salad'){
    $result = $db->select()->from('productlist')->where('conID',4)->getAll();
    $jsonResult = json_encode($result);
    echo $jsonResult;
}

else if(isset($_GET['category']) && $_GET['category'] == 'Wrap'){
    $result = $db->select()->from('productlist')->where('conID',5)->getAll();
    $jsonResult = json_encode($result);
    echo $jsonResult;
}

else if(isset($_GET['category']) && $_GET['category'] == 'Cake'){
    $result = $db->select()->from('productlist')->where('conID',6)->getAll();
    $jsonResult = json_encode($result);
    echo $jsonResult;
}