<?php
namespace Controller;
//use Model\Model;
//include 'Model\Model.php';
use Routing\Router;
class AppController 
{
	
    /**
     * @var \Routing\Router
     */
    protected $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
		
    }



    public function error404Action()
    {
        header("HTTP/1.0 404 Not Found");
        echo self::render('error404');
    }

//    protected function request($data)
//    {
//        echo $data;
//    }
	
//	public  function getModel($template){
//		$m = new Model;
//		return $date = $m->getData($template);
//		
//
//	}
	
    protected function render($template, $dates = array())
    {
	
	
		
        $root = __DIR__.'/../'.  DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR;

        $templatePath = $root . $template . '.php';

        if (!is_file($templatePath)) {
            throw new \InvalidArgumentException(sprintf('Template "%s" not found in "%s"', $template, $templatePath));
        }
    
//       extract($dates[0]);
//		var_dump($title);
	//var_dump($title);
        $router = $this->router;

        ob_start();
        ob_implicit_flush(0);

        try {
            require($templatePath);
        } catch (Exception $e) {
            ob_end_clean();
            throw $e;
        }

        return ob_get_clean();
    }
}