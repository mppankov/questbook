<?php

namespace ContainerYGqb8xK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_RouteLoader_LogoutService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.route_loader.logout' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Routing\LogoutRouteLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Routing/LogoutRouteLoader.php';

        return $container->privates['security.route_loader.logout'] = new \Symfony\Bundle\SecurityBundle\Routing\LogoutRouteLoader([], 'security.logout_uris');
    }
}
