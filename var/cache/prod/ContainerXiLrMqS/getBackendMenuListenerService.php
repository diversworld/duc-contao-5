<?php

namespace ContainerXiLrMqS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBackendMenuListenerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Pdir\ContaoWebtoolsBundle\EventListener\BackendMenuListener' shared autowired service.
     *
     * @return \Pdir\ContaoWebtoolsBundle\EventListener\BackendMenuListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pdir/contao-webtools/src/EventListener/BackendMenuListener.php';

        return $container->services['Pdir\\ContaoWebtoolsBundle\\EventListener\\BackendMenuListener'] = new \Pdir\ContaoWebtoolsBundle\EventListener\BackendMenuListener(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)));
    }
}