<?php 
namespace app\models;

class Product extends Model{
    public $params;
    public function __construct($params)
    {
        parent::__construct();
        $this->params = $params;
    }
    public function rowCount(){
        $stmt = $this->pdo->prepare("SELECT COUNT(*) as cnt FROM goods");
        
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function getData()
    {
        # code...
        $page = isset($this->params['page']) ? abs((int)$this->params['page'] - 1)  : 0; 
        $order = isset($_GET['sorting']) ? $_GET['sorting'] : 'name';
        $stmt = $this->pdo->prepare("SELECT * FROM goods ORDER BY on_stock DESC, ".$order." asc LIMIT 10 OFFSET ".($page * 10));
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        # code...
        if((int)$id > 0){
            $stmt = $this->pdo->prepare("SELECT * FROM goods WHERE id = ?");
            $stmt->execute([(int)$id]);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
        return false;

    }
    
}