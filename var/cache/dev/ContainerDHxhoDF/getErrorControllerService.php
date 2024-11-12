<?php

namespace ContainerDHxhoDF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getErrorControllerService extends App_KernelDevContainer
{
    /*
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack());

        return $container->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($container->services['http_kernel'] ?? self::getHttpKernelService($container)), 'error_controller', new \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer(($container->privates['debug.serializer'] ?? self::getDebug_SerializerService($container)), \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer::getPreferredFormat($a), new \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer(($container->privates['twig'] ?? self::getTwigService($container)), ($container->privates['error_handler.error_renderer.html'] ?? $container->load('getErrorHandler_ErrorRenderer_HtmlService')), \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer::isDebug($a, false)), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, false)));
    }
}
