<?php

require_once 'init.php';

use Sessions\Session;

class OrderList {
    public function addOrder(string $itemName, float $basePrice, string $type, int $option, int $option2){
        $postPrice = 0;
        if($option == 3){
            $postPrice = $basePrice + 30;
        } else if ($option == 2){
            $postPrice = $basePrice + 15;
        } else {
            $postPrice = $basePrice;
        }

        if($type == '1'){
            $beverageItem = new Tea($itemName, $postPrice, $type, $option, $option2);
            if(!Session::has('orderList')){
                $_SESSION['orderList'][0] = $beverageItem;
            } else {
                $temp = Session::get('orderList');
                array_push($temp,$beverageItem);
                Session::add('orderList', $temp); 
            }
        } else if($type == '2'){
            $beverageItem = new Frappe($itemName, $postPrice, $type, $option, $option2);
            if(!Session::has('orderList')){
                $_SESSION['orderList'][0] = $beverageItem;
            } else {
                $temp = Session::get('orderList');
                array_push($temp,$beverageItem);
                Session::add('orderList', $temp); 
            }
        } else if($type == '3'){
            $beverageItem = new Coffee($itemName, $postPrice, $type, $option, $option2);
            if(!Session::has('orderList')){
                $_SESSION['orderList'][0] = $beverageItem;
            } else {
                $temp = Session::get('orderList');
                array_push($temp,$beverageItem);
                Session::add('orderList', $temp); 
            }
        } else if($type == '4'){
            $foodItem = new Salad($itemName, $postPrice, $type, $option, $option2);
            if(!Session::has('orderList')){
                $_SESSION['orderList'][0] = $foodItem;
            } else {
                $temp = Session::get('orderList');
                array_push($temp,$foodItem);
                Session::add('orderList', $temp); 
            }
        } else if($type == '5'){
            $foodItem = new Wrap($itemName, $postPrice, $type, $option, $option2);
            if(!Session::has('orderList')){
                $_SESSION['orderList'][0] = $foodItem;
            } else {
                $temp = Session::get('orderList');
                array_push($temp,$foodItem);
                Session::add('orderList', $temp); 
            }
        } else if($type == '6'){
            $foodItem = new Cake($itemName, $postPrice, $type, $option, $option2);
            if(!Session::has('orderList')){
                $_SESSION['orderList'][0] = $foodItem;
            } else {
                $temp = Session::get('orderList');
                array_push($temp,$foodItem);
                Session::add('orderList', $temp); 
            }
        }
    }

    public function removeOrder(int $position){
        Session::removeSpecificElement('orderList', $position);
    }

    

}