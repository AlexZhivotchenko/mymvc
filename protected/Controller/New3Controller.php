<?php
namespace Controller;
//use Controller\AppController;
use Model\Model;

 

class New3Controller extends AppController {
	
	public function new3Action()
    {
        $m = new Model;
	    $date = $m->getData('new3');
        echo parent::render('new3', $date);
		
		
		
    }
	
}