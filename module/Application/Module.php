<?php

namespace Application;

use Zend\Mvc\ModuleRouteListener;
use PixelDomain\Log\Logger;

class Module
{
    public function onBootstrap($e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);

        $eventManager->attach('dispatch.error', array($this, 'dispatchError'));

    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function dispatchError($event)
    {
        $logger = $event->getApplication()->getServiceManager()
                                          ->get('PixelDomain\Log\Logger');

        if ($event->getError() === 'error-exception') {
            $exception = $event->getParam('exception');
            $logger->emerg($exception);
        }
    }
}
