<?php

require_once 'init.php';

use Sessions\Session;

class OrderList {
    private $items = [];

    public function addOrder(string $itemName, float $basePrice, string $type, int $option){
        if($type == 'Tea' || $type == 'Frappe' || $type == 'Coffee'){
            $beverageItem = new Beverage($itemName, $basePrice, $type, $option);
            $this->items = $beverageItem;
            if(!Session::has('orderList')){
                $_SESSION['orderList'][0] = $beverageItem;
            } else {
                $temp = Session::get('orderList');
                array_push($temp,$beverageItem);
                Session::add('orderList', $temp); 
            }
        } else {
            $foodItem = new Food($itemName, $basePrice, $type, $option);
            $this->items = $foodItem;
            if(!Session::has('orderList')){
                $_SESSION['orderList'][0] = $foodItem;
            } else {
                $temp = Session::get('orderList');
                array_push($temp,$foodItem);
                Session::add('orderList', $temp); 
            }
        }
    }
}