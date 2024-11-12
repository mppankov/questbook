<?php

namespace ContainerDHxhoDF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MailerTestService extends App_KernelDevContainer
{
    /*
     * Gets the private 'console.command.mailer_test' shared service.
     *
     * @return \Symfony\Component\Mailer\Command\MailerTestCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.mailer_test'] = $instance = new \Symfony\Component\Mailer\Command\MailerTestCommand(($container->privates['mailer.transports'] ?? $container->load('getMailer_TransportsService')));

        $instance->setName('mailer:test');
        $instance->setDescription('Test Mailer transports by sending an email');

        return $instance;
    }
}
