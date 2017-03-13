<?php
namespace Controller;
//use Controller\AppController;
use Model\Model;

 

class New2Controller extends AppController {
	
	public function new2Action()
    {
        $m = new Model;
	    $date = $m->getData('new1');
        echo parent::render('new2', $date);
		
		
		
    }
	
}