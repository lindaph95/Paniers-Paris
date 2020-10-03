<?php

namespace ContainerQpTRCQG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiceCommandeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\ServiceCommande' shared autowired service.
     *
     * @return \App\Service\ServiceCommande
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\src\\Service\\ServiceCommande.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\security-core\\Security.php';

        return $container->privates['App\\Service\\ServiceCommande'] = new \App\Service\ServiceCommande(($container->services['session'] ?? $container->load('getSessionService')), ($container->privates['App\\Repository\\PaniersRepository'] ?? $container->load('getPaniersRepositoryService')), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), new \Symfony\Component\Security\Core\Security(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
        ], [
            'security.authorization_checker' => '?',
            'security.token_storage' => '?',
        ])));
    }
}
