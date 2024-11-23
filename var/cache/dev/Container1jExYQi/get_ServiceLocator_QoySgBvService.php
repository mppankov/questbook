<?php

namespace Container1jExYQi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QoySgBvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qoySgBv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qoySgBv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'commentRepository' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService', true],
            'conference' => ['privates', '.errored..service_locator.qoySgBv.App\\Entity\\Conference', NULL, 'Cannot autowire service ".service_locator.qoySgBv": it needs an instance of "App\\Entity\\Conference" but this type has been excluded in "config/services.yaml".'],
            'conferenceRepository' => ['privates', 'App\\Repository\\ConferenceRepository', 'getConferenceRepositoryService', false],
        ], [
            'commentRepository' => 'App\\Repository\\CommentRepository',
            'conference' => 'App\\Entity\\Conference',
            'conferenceRepository' => 'App\\Repository\\ConferenceRepository',
        ]);
    }
}