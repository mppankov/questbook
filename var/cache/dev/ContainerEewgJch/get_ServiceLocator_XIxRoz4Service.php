<?php

namespace ContainerEewgJch;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XIxRoz4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xIxRoz4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xIxRoz4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'conferenceRepository' => ['privates', 'App\\Repository\\ConferenceRepository', 'getConferenceRepositoryService', true],
            'twig' => ['privates', 'twig', 'getTwigService', false],
        ], [
            'conferenceRepository' => 'App\\Repository\\ConferenceRepository',
            'twig' => '?',
        ]);
    }
}
