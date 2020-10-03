<?php

namespace Container7IDRPvU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSensioFrameworkExtra_Routing_Loader_AnnotClassService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sensio_framework_extra.routing.loader.annot_class' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader
     *
     * @deprecated The "sensio_framework_extra.routing.loader.annot_class" service is deprecated since version 5.2
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('', '', 'The "sensio_framework_extra.routing.loader.annot_class" service is deprecated since version 5.2');

        return $container->privates['sensio_framework_extra.routing.loader.annot_class'] = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()));
    }
}
