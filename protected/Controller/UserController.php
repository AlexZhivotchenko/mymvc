<?php

namespace Controller;
use Model\Model;

class UserController extends AppController{
	
	public function userAction()
    {
        $date = array();
        echo parent::render('user', $date);
		
    }
}
//, array('id' => $id)