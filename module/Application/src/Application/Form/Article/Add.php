<?php

namespace Application\Form\Article;

use Application\Form\Article\Base;

class Add extends Base
{
    public function __construct($name = null)
    {
        parent::__construct();
        $this->remove('id');
    }
}