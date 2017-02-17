<?php
/**
 * Created by PhpStorm.
 * User: Estelle
 * Date: 2017/2/17
 * Time: 11:31
 */

namespace Blog\Factory;



use Blog\Controller\ListController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ListControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceInterface = $serviceLocator->getServiceLocator();
        $postService = $realServiceInterface->get('Blog\Service\PostServiceInterface');

        return new ListController($postService);
    }

}