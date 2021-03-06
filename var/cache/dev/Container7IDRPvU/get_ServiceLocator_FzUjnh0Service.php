<?php

namespace Container7IDRPvU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FzUjnh0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fzUjnh0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fzUjnh0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::dashbord' => ['privates', '.service_locator.n.axm49', 'get_ServiceLocator_N_Axm49Service', true],
            'App\\Controller\\AdminController::deleteCommande' => ['privates', '.service_locator.qTAx.ha', 'get_ServiceLocator_QTAx_HaService', true],
            'App\\Controller\\AdminController::deletePanier' => ['privates', '.service_locator.IRXhcBX', 'get_ServiceLocator_IRXhcBXService', true],
            'App\\Controller\\AdminController::deleteProducteur' => ['privates', '.service_locator.Tpcd01Z', 'get_ServiceLocator_Tpcd01ZService', true],
            'App\\Controller\\AdminController::deleteProduits' => ['privates', '.service_locator.HLlm193', 'get_ServiceLocator_HLlm193Service', true],
            'App\\Controller\\AdminController::deleteUser' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\AdminController::paniers_add' => ['privates', '.service_locator.PvZ_NPV', 'get_ServiceLocator_PvZNPVService', true],
            'App\\Controller\\AdminController::product_add' => ['privates', '.service_locator.KE9.MAu', 'get_ServiceLocator_KE9_MAuService', true],
            'App\\Controller\\CommandeController::add' => ['privates', '.service_locator.bJL9Ndo', 'get_ServiceLocator_BJL9NdoService', true],
            'App\\Controller\\CommandeController::delete' => ['privates', '.service_locator.bJL9Ndo', 'get_ServiceLocator_BJL9NdoService', true],
            'App\\Controller\\CommandeController::index' => ['privates', '.service_locator.bJL9Ndo', 'get_ServiceLocator_BJL9NdoService', true],
            'App\\Controller\\ContactController::contact' => ['privates', '.service_locator.TcUodWI', 'get_ServiceLocator_TcUodWIService', true],
            'App\\Controller\\IndexController::index' => ['privates', '.service_locator.FXD6KYr', 'get_ServiceLocator_FXD6KYrService', true],
            'App\\Controller\\NewsletterController::newsletter' => ['privates', '.service_locator.TcUodWI', 'get_ServiceLocator_TcUodWIService', true],
            'App\\Controller\\NewsletterController::unsubscribeNewsletter' => ['privates', '.service_locator.GN5J0qk', 'get_ServiceLocator_GN5J0qkService', true],
            'App\\Controller\\PaiementController::index' => ['privates', '.service_locator.bJL9Ndo', 'get_ServiceLocator_BJL9NdoService', true],
            'App\\Controller\\PaiementController::success' => ['privates', '.service_locator.EMI6ndw', 'get_ServiceLocator_EMI6ndwService', true],
            'App\\Controller\\PaniersController::index' => ['privates', '.service_locator.qTb19Jv', 'get_ServiceLocator_QTb19JvService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.uxleHkz', 'get_ServiceLocator_UxleHkzService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.FXD6KYr', 'get_ServiceLocator_FXD6KYrService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\AdminController:dashbord' => ['privates', '.service_locator.n.axm49', 'get_ServiceLocator_N_Axm49Service', true],
            'App\\Controller\\AdminController:deleteCommande' => ['privates', '.service_locator.qTAx.ha', 'get_ServiceLocator_QTAx_HaService', true],
            'App\\Controller\\AdminController:deletePanier' => ['privates', '.service_locator.IRXhcBX', 'get_ServiceLocator_IRXhcBXService', true],
            'App\\Controller\\AdminController:deleteProducteur' => ['privates', '.service_locator.Tpcd01Z', 'get_ServiceLocator_Tpcd01ZService', true],
            'App\\Controller\\AdminController:deleteProduits' => ['privates', '.service_locator.HLlm193', 'get_ServiceLocator_HLlm193Service', true],
            'App\\Controller\\AdminController:deleteUser' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\AdminController:paniers_add' => ['privates', '.service_locator.PvZ_NPV', 'get_ServiceLocator_PvZNPVService', true],
            'App\\Controller\\AdminController:product_add' => ['privates', '.service_locator.KE9.MAu', 'get_ServiceLocator_KE9_MAuService', true],
            'App\\Controller\\CommandeController:add' => ['privates', '.service_locator.bJL9Ndo', 'get_ServiceLocator_BJL9NdoService', true],
            'App\\Controller\\CommandeController:delete' => ['privates', '.service_locator.bJL9Ndo', 'get_ServiceLocator_BJL9NdoService', true],
            'App\\Controller\\CommandeController:index' => ['privates', '.service_locator.bJL9Ndo', 'get_ServiceLocator_BJL9NdoService', true],
            'App\\Controller\\ContactController:contact' => ['privates', '.service_locator.TcUodWI', 'get_ServiceLocator_TcUodWIService', true],
            'App\\Controller\\IndexController:index' => ['privates', '.service_locator.FXD6KYr', 'get_ServiceLocator_FXD6KYrService', true],
            'App\\Controller\\NewsletterController:newsletter' => ['privates', '.service_locator.TcUodWI', 'get_ServiceLocator_TcUodWIService', true],
            'App\\Controller\\NewsletterController:unsubscribeNewsletter' => ['privates', '.service_locator.GN5J0qk', 'get_ServiceLocator_GN5J0qkService', true],
            'App\\Controller\\PaiementController:index' => ['privates', '.service_locator.bJL9Ndo', 'get_ServiceLocator_BJL9NdoService', true],
            'App\\Controller\\PaiementController:success' => ['privates', '.service_locator.EMI6ndw', 'get_ServiceLocator_EMI6ndwService', true],
            'App\\Controller\\PaniersController:index' => ['privates', '.service_locator.qTb19Jv', 'get_ServiceLocator_QTb19JvService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.uxleHkz', 'get_ServiceLocator_UxleHkzService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.FXD6KYr', 'get_ServiceLocator_FXD6KYrService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\AdminController::dashbord' => '?',
            'App\\Controller\\AdminController::deleteCommande' => '?',
            'App\\Controller\\AdminController::deletePanier' => '?',
            'App\\Controller\\AdminController::deleteProducteur' => '?',
            'App\\Controller\\AdminController::deleteProduits' => '?',
            'App\\Controller\\AdminController::deleteUser' => '?',
            'App\\Controller\\AdminController::paniers_add' => '?',
            'App\\Controller\\AdminController::product_add' => '?',
            'App\\Controller\\CommandeController::add' => '?',
            'App\\Controller\\CommandeController::delete' => '?',
            'App\\Controller\\CommandeController::index' => '?',
            'App\\Controller\\ContactController::contact' => '?',
            'App\\Controller\\IndexController::index' => '?',
            'App\\Controller\\NewsletterController::newsletter' => '?',
            'App\\Controller\\NewsletterController::unsubscribeNewsletter' => '?',
            'App\\Controller\\PaiementController::index' => '?',
            'App\\Controller\\PaiementController::success' => '?',
            'App\\Controller\\PaniersController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminController:dashbord' => '?',
            'App\\Controller\\AdminController:deleteCommande' => '?',
            'App\\Controller\\AdminController:deletePanier' => '?',
            'App\\Controller\\AdminController:deleteProducteur' => '?',
            'App\\Controller\\AdminController:deleteProduits' => '?',
            'App\\Controller\\AdminController:deleteUser' => '?',
            'App\\Controller\\AdminController:paniers_add' => '?',
            'App\\Controller\\AdminController:product_add' => '?',
            'App\\Controller\\CommandeController:add' => '?',
            'App\\Controller\\CommandeController:delete' => '?',
            'App\\Controller\\CommandeController:index' => '?',
            'App\\Controller\\ContactController:contact' => '?',
            'App\\Controller\\IndexController:index' => '?',
            'App\\Controller\\NewsletterController:newsletter' => '?',
            'App\\Controller\\NewsletterController:unsubscribeNewsletter' => '?',
            'App\\Controller\\PaiementController:index' => '?',
            'App\\Controller\\PaiementController:success' => '?',
            'App\\Controller\\PaniersController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
