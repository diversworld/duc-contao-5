<?php

namespace ContainerXiLrMqS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInsertTagsListenerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Codefog\HasteBundle\EventListener\InsertTagsListener' shared autowired service.
     *
     * @return \Codefog\HasteBundle\EventListener\InsertTagsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/codefog/contao-haste/src/EventListener/InsertTagsListener.php';

        return $container->services['Codefog\\HasteBundle\\EventListener\\InsertTagsListener'] = new \Codefog\HasteBundle\EventListener\InsertTagsListener(($container->services['Codefog\\HasteBundle\\Formatter'] ?? $container->load('getFormatterService')));
    }
}