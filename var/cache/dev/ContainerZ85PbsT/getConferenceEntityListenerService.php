<?php

namespace ContainerZ85PbsT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConferenceEntityListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EntityListener\ConferenceEntityListener' shared autowired service.
     *
     * @return \App\EntityListener\ConferenceEntityListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EntityListener/ConferenceEntityListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/string/Slugger/SluggerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/string/Slugger/AsciiSlugger.php';

        return $container->privates['App\\EntityListener\\ConferenceEntityListener'] = new \App\EntityListener\ConferenceEntityListener(($container->privates['slugger'] ??= new \Symfony\Component\String\Slugger\AsciiSlugger('en')));
    }
}
