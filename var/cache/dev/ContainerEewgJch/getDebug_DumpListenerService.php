<?php

namespace ContainerEewgJch;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_DumpListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.dump_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/DumpListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/ContextualizedDumper.php';

        $a = ($container->privates['var_dumper.contextualized_cli_dumper.inner'] ?? $container->load('getVarDumper_ContextualizedCliDumper_InnerService'));

        if (isset($container->privates['debug.dump_listener'])) {
            return $container->privates['debug.dump_listener'];
        }
        $b = ($container->privates['debug.file_link_formatter'] ?? self::getDebug_FileLinkFormatterService($container));

        if (isset($container->privates['debug.dump_listener'])) {
            return $container->privates['debug.dump_listener'];
        }

        return $container->privates['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener(($container->services['var_dumper.cloner'] ?? self::getVarDumper_ClonerService($container)), new \Symfony\Component\VarDumper\Dumper\ContextualizedDumper($a, ['source' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider('UTF-8', \dirname(__DIR__, 4), $b)]), ($container->privates['var_dumper.server_connection'] ?? self::getVarDumper_ServerConnectionService($container)));
    }
}