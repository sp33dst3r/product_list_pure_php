<?php
namespace app\controllers;

use app\models\Product;
use Exception;



class ProductsController {
    public $params;
    public $product;
    function __construct ($actions){
        $this->params = $actions;
        $this->product = new Product($actions);
        
        if(array_key_exists('view', $this->params)){
            echo $this->render("product.php");
        }else{
            echo $this->render("products.php");
        }
       
        
    }
    public function render($file) {
        if($file == 'products.php'){
            $page = $this->params['page'] ?? 1;
            $goods = $this->product->getData();
            $count = $this->product->rowCount()[0]['cnt'];
        }else{
            $prod = $this->product->getById($this->params["view"]);
            try{
                if($prod === false  || count($prod) == 0){
                    throw new Exception();
                }
            } catch (Exception $e){
                echo "Что-то случилось)!";
                return;
            }
            
        }
        
       
        ob_start();
        include('app/views/'.$file);
        return ob_get_clean();
      }
}