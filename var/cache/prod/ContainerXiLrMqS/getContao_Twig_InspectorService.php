<?php

namespace ContainerXiLrMqS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Twig_InspectorService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.twig.inspector' shared service.
     *
     * @return \Contao\CoreBundle\Twig\Inspector\Inspector
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Twig/Inspector/Inspector.php';

        return $container->services['contao.twig.inspector'] = new \Contao\CoreBundle\Twig\Inspector\Inspector(($container->services['twig'] ?? self::getTwigService($container)));
    }
}