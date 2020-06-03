<?php
namespace app\controllers;

use app\models\Cart;

class CartController {
    public $params;
    private $cart;
    function __construct ($actions){
        $this->params = $actions;
        $this->cart = Cart::getInstance();
        if(count($actions)){
            $method = key($actions);
            $this->$method($actions[$method]); //получаем action контроллера - остальное в параметры.
        }
        
    }
    public function toggle($id){
        echo $this->cart->toggle($id);
    }
    
}