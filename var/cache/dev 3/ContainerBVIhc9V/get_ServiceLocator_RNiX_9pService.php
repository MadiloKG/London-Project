<?php

namespace ContainerBVIhc9V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RNiX_9pService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RNiX.9p' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RNiX.9p'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\EnseignantController::addMatiere' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\EnseignantController::delete' => ['privates', '.service_locator.Pm1LmEB', 'get_ServiceLocator_Pm1LmEBService', true],
            'App\\Controller\\EnseignantController::edit' => ['privates', '.service_locator.2VgkM90', 'get_ServiceLocator_2VgkM90Service', true],
            'App\\Controller\\EnseignantController::list' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\MatiereController::add' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\MatiereController::delete' => ['privates', '.service_locator.A_TT38j', 'get_ServiceLocator_ATT38jService', true],
            'App\\Controller\\MatiereController::edit' => ['privates', '.service_locator.A_TT38j', 'get_ServiceLocator_ATT38jService', true],
            'App\\Controller\\MatiereController::list' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.V6D1oJY', 'get_ServiceLocator_V6D1oJYService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\EnseignantController:addMatiere' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\EnseignantController:delete' => ['privates', '.service_locator.Pm1LmEB', 'get_ServiceLocator_Pm1LmEBService', true],
            'App\\Controller\\EnseignantController:edit' => ['privates', '.service_locator.2VgkM90', 'get_ServiceLocator_2VgkM90Service', true],
            'App\\Controller\\EnseignantController:list' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\MatiereController:add' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\MatiereController:delete' => ['privates', '.service_locator.A_TT38j', 'get_ServiceLocator_ATT38jService', true],
            'App\\Controller\\MatiereController:edit' => ['privates', '.service_locator.A_TT38j', 'get_ServiceLocator_ATT38jService', true],
            'App\\Controller\\MatiereController:list' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.V6D1oJY', 'get_ServiceLocator_V6D1oJYService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\EnseignantController::addMatiere' => '?',
            'App\\Controller\\EnseignantController::delete' => '?',
            'App\\Controller\\EnseignantController::edit' => '?',
            'App\\Controller\\EnseignantController::list' => '?',
            'App\\Controller\\MatiereController::add' => '?',
            'App\\Controller\\MatiereController::delete' => '?',
            'App\\Controller\\MatiereController::edit' => '?',
            'App\\Controller\\MatiereController::list' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\EnseignantController:addMatiere' => '?',
            'App\\Controller\\EnseignantController:delete' => '?',
            'App\\Controller\\EnseignantController:edit' => '?',
            'App\\Controller\\EnseignantController:list' => '?',
            'App\\Controller\\MatiereController:add' => '?',
            'App\\Controller\\MatiereController:delete' => '?',
            'App\\Controller\\MatiereController:edit' => '?',
            'App\\Controller\\MatiereController:list' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
