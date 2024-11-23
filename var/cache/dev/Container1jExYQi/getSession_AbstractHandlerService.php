<?php

namespace Container1jExYQi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSession_AbstractHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'session.abstract_handler' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\AbstractSessionHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/Handler/AbstractSessionHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/Handler/SessionHandlerFactory.php';

        return $container->privates['session.abstract_handler'] = \Symfony\Component\HttpFoundation\Session\Storage\Handler\SessionHandlerFactory::createHandler($container->getEnv('resolve:DATABASE_URL'), []);
    }
}
