<?php

namespace ContainerKM2vbAc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z9fkP2IService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Z9fkP2I' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Z9fkP2I'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'competenceRepository' => ['privates', 'App\\Repository\\CompetenceRepository', 'getCompetenceRepositoryService', true],
        ], [
            'competenceRepository' => 'App\\Repository\\CompetenceRepository',
        ]);
    }
}
