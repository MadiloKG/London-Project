<?php

namespace ContainerTRJe3DD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMatiereControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MatiereController' shared autowired service.
     *
     * @return \App\Controller\MatiereController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/MatiereController.php';

        $container->services['App\\Controller\\MatiereController'] = $instance = new \App\Controller\MatiereController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\MatiereController', $container));

        return $instance;
    }
}
