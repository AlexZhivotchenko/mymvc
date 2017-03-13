<?php
namespace Controller;
//use Controller\AppController;
use Model\Model;

 

class MainController extends AppController {
	
	public function mainAction()
    {
        $m = new Model;
	    $dates = $m->getData('main');
        echo parent::render('main', $dates);
		
		
		
    }
	
}