<?php

namespace Container7IDRPvU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QTb19JvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qTb19Jv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qTb19Jv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paniersRepository' => ['privates', 'App\\Repository\\PaniersRepository', 'getPaniersRepositoryService', true],
        ], [
            'paniersRepository' => 'App\\Repository\\PaniersRepository',
        ]);
    }
}
