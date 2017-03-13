<?php

namespace Controller;
use Model\Model;

class ContactsController extends AppController{
	
	public function contactsAction()
    {
         $m = new Model;
	    $date = $m->getData('contacts');
        echo parent::render('contacts', $date);
		
    }
}