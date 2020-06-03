<?php 
session_start();
#дебажные функции
function pre($var){
    echo "<pre>", print_r($var), "</pre>";
}
function pred($var){
    echo "<pre>", print_r($var), "</pre>";
    die();
}



//Настройки




/* try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}
 */


spl_autoload_register( function ($className) {
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    #pred($fileName);
    
        if (file_exists($fileName)) {
            require $fileName;
        }else{
            throw new Exception();
        }
        
    
});





    try{
       #$res = preg_replace( '/\?.+/', '', $_SERVER["REQUEST_URI"];
        #pred($res);
        $controller_name_exploded = explode('/', preg_replace( '/\?.+/', '', $_SERVER["REQUEST_URI"]));
        // Получаем контроллер из урла
        $class_name =  '\\app\\controllers\\'.ucfirst($controller_name_exploded[1])."Controller";
        array_splice($controller_name_exploded, 0, 2); //Оставляем только actions
        $keys = $values = [];
        for($i=0;  $i < count($controller_name_exploded); $i++){
            if(!$controller_name_exploded[$i]) continue;
          if($i % 2 == 0){
            //Чётное = ключ (параметр)
            $keys[] = $controller_name_exploded[$i];
          }else{
            //Значение параметра;
            $values[] = $controller_name_exploded[$i];
          }
        }
        $params = array_combine($keys, $values);
        #pred($params);
        $controller = new $class_name($params); // инициализируем контроллер
    }catch(Exception $ex){
        echo "введите правильный url";
    }


   