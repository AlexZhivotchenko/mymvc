<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL);

spl_autoload_register(function ($class) {

	
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
	
	
	
//foreach ($paths as $path){
    if (is_file($path)) {
		
		require $path;
		return; 
    }
//}
//	var_dump($path);
		
    throw new \LogicException(sprintf('Class "%s" not found in "%s"', $class, $path));
});


require __DIR__ . '/func.php';
//require __DIR__ . '/Controller/AppController.php';
//require __DIR__ . '/Model/Model.php';
//require __DIR__ . '/Controller/MainController.php';
//require __DIR__ . '/controllers/AboutController.php';
//require __DIR__ . '/controllers/ContactsController.php';
//require __DIR__ . '/controllers/UserController.php'; 
?>