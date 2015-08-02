<?php
/**
 * Created by PhpStorm.
 * User: kapil
 * Date: 2/8/15
 * Time: 4:07 PM
 */

class Application_Form_NoteJamForm  extends Zend_Form
{
    /**
     * These will be applied to our text, password, select, checkbox and radio elements by default.
     *
     * @var array Decorators to use for standard form elements
     */
    public $elementDecorators = array(
        'ViewHelper',
        'Errors',
        array('Description', array('tag' => 'p', 'class' => 'description')),
        array('HtmlTag',     array('class' => 'form-div')),
        array('Label',       array('class' => 'form-label', 'requiredSuffix' => '*'))
    );

    /**
     * this array gets set up in the constructor
     * this can be used if you do not want an element wrapped in a div tag at all
     *
     * @var array Decorator to use for standard for elements except do not wrap in HtmlTag
     */
    public $elementDecoratorsNoTag = array();

    public function __construct()
    {
        // First set up the $elementDecoratorsNoTag decorator,
        // this is a copy of our regular element decorators, but do not get wrapped in a div tag
        foreach($this->elementDecorators as $decorator) {
            if (is_array($decorator) && $decorator[0] == 'HtmlTag') {
                continue; // skip copying this value to the decorator
            }
            $this->elementDecoratorsNoTag[] = $decorator;
        }

        // Set the decorator for the form itself,
        // this wraps the <form> elements in a div tag instead of a dl tag
        $this->setDecorators(array(
            'FormElements',
            array('HtmlTag', array()),//'tag' => 'div', 'class' => 'form')),
            'Form'));

        // set the default decorators to our element decorators, any elements added to the form
        // will use these decorators
        $this->setElementDecorators($this->elementDecorators);

        parent::__construct();
        // parent::__construct must be called last because it calls $form->init()
        // and anything after it is not executed
    }
}