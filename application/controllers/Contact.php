<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Contact extends Application {

    public function index()
	{
		$this->data['pagebody'] = 'contact';
                
                //unset sign up error
                unset($_SESSION['signup_error']);
                //unset sign in error
                unset($_SESSION['login_error']);
                
                $this->render();
	}   

        
}