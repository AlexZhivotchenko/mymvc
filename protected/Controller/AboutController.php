<?php

namespace Controller;
use Model\Model;

class AboutController extends AppController{
	
	public function aboutAction()
    {
        $m = new Model;
	    $date = $m->getData('about');
        echo parent::render('about', $date);
    }
}