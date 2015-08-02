<?php

class AuthController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function loginAction()
    {
        $loginForm = new Application_Form_Login();

        $this->view->form = $loginForm;
    }

    public function signupAction()
    {
        $signUpForm = new Application_Form_Signup();

        $this->view->form = $signUpForm;
    }
}



