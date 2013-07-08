<?php

namespace Application\Controller;

use PixelDomain\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {
        $exampleService = $this->getServiceLocator()->get('Application\Service\Example');
        $exampleService->helloWorld();

        return new ViewModel(
            array('version' => \Zend\Version\Version::VERSION)
        );
    }

}
