<?php

namespace ContainerXiLrMqS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Command_DebugFragmentsService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'contao.command.debug_fragments' shared service.
     *
     * @return \Contao\CoreBundle\Command\DebugFragmentsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Command/DebugFragmentsCommand.php';

        $container->privates['contao.command.debug_fragments'] = $instance = new \Contao\CoreBundle\Command\DebugFragmentsCommand(($container->services['contao.fragment.registry'] ?? self::getContao_Fragment_RegistryService($container)), $container);

        $instance->setName('debug:fragments');
        $instance->setDescription('Displays the fragment controller configuration.');

        return $instance;
    }
}