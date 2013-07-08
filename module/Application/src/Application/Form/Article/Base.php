<?php

namespace Application\Form\Article;

use Zend\Form\Form;

class Base extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('article');
        $this->setAttribute('method', 'post');
        $this->add(
            array(
                'name' => 'id',
                'attributes' => array(
                    'type'  => 'hidden',
                ),
            )
        );
        $this->add(
            array(
                'name' => 'title',
                'attributes' => array(
                    'type'  => 'text',
                ),
                'options' => array(
                    'label' => 'Title',
                ),
            )
        );
        $this->add(
            array(
                'name' => 'content',
                'attributes' => array(
                    'type'  => 'text',
                ),
                'options' => array(
                    'label' => 'Content',
                ),
            )
        );
    }
}