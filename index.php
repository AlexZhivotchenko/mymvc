<?php
require __DIR__ . '/protected/bootstrap.php';
use Routing\Router;
use Routing\MatchedRoute;



try {

    $router = new Router(GET_HTTP_HOST());
    $router->add('main', '/', 'Controller\MainController:mainAction');
    $router->add('about', '/about', 'Controller\AboutController:aboutAction');
    $router->add('contacts', '/contacts', 'Controller\ContactsController:contactsAction');
    $router->add('user', '/user/(id:num)', 'Controller\UserController:userAction');
	 $router->add('new1', '/new1', 'Controller\New1Controller:new1Action');
	$router->add('new2', '/new2', 'Controller\New2Controller:new2Action');
	$router->add('new3', '/new3', 'Controller\New3Controller:new3Action');

    $route = $router->match(GET_METHOD(), GET_PATH_INFO());

    if (null == $route) {
        $route = new MatchedRoute('Controller\AppController:error404Action');
    }

    list($class, $action) = explode(':', $route->getController(), 2);

    call_user_func_array(array(new $class($router), $action), $route->getParameters());

} catch (Exception $e) {

    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);

    echo $e->getMessage();
    echo $e->getTraceAsString();
    exit;
}