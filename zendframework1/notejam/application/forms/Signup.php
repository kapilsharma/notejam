<?php

class Application_Form_Signup extends Application_Form_NoteJamForm
{

    public function init()
    {
        $this->setName("login");
        $this->setMethod('post');
        $this->setAttribs(array('class' => 'offset-by-six sign-in'));

        $this->addElement('text', 'email', array(
            'filters' => array('StringTrim', 'StringToLower'),
            'validators' => array(
                array('StringLength', false, array(0, 50)),
            ),
            'required' => true,
            'label' => 'Email:',
        ));

        $this->addElement('password', 'password', array(
            'filters' => array('StringTrim'),
            'validators' => array(
                array('StringLength', false, array(0, 50)),
            ),
            'required' => true,
            'label' => 'Password:',
        ));

        $this->addElement('password', 'confirmpassword', array(
            'filters' => array('StringTrim'),
            'validators' => array(
                array('StringLength', false, array(0, 50)),
            ),
            'required' => true,
            'label' => 'Confirm Password:',
        ));

        $this->addElement('submit', 'Sign in', array(
            'required' => false,
            'ignore' => true,
            'label' => 'Sign in',
        ));

        // Remove label for Sign in(submit) button
        foreach($this->getElements() as $element)
        {
            if ($element instanceof Zend_Form_Element_Submit) {
                $element->removeDecorator('Label');
            }
        }
    }
}

