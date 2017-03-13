<?php
namespace Controller;
//use Controller\AppController;
use Model\Model;

 

class New1Controller extends AppController {
	
	public function new1Action()
    {
        $m = new Model;
	    $date = $m->getData('new');
        echo parent::render('new1', $date);
		
		
		
    }
	
}