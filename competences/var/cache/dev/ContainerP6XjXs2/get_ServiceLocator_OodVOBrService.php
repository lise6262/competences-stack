<?php

namespace ContainerP6XjXs2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OodVOBrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oodVOBr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oodVOBr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'competence' => ['privates', '.errored..service_locator.oodVOBr.App\\Entity\\Competence', NULL, 'Cannot autowire service ".service_locator.oodVOBr": it references class "App\\Entity\\Competence" but no such service exists.'],
        ], [
            'competence' => 'App\\Entity\\Competence',
        ]);
    }
}