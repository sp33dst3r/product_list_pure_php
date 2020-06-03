<?php 
namespace app\models;

class Cart extends Model{
    public $params;
  
    public static function getInstance()
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static;
        }

        return self::$instances[$cls];
    }
    public static function is_in_cart($id){
        if($_SESSION['cart'] && array_search($id, $_SESSION['cart']) !== false){
            return true;
        }else{
           return false;
        }
    }
    public function toggle($id)
    {
       
        if(self::is_in_cart($id)){
          
            unset($_SESSION['cart'][array_search($id, $_SESSION['cart'])]);
          
            return 'deleted';
        }else{
          
            if(!$_SESSION['cart']) $_SESSION['cart'] = [];
            array_push($_SESSION['cart'], $id);
           
            return 'added';
        }
        
    }

    private static $instances = [];

   
    protected function __construct() { }

    
    protected function __clone() { }

   
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }
    
    
}