<?php

namespace ContainerXiLrMqS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDcaModuleListenerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Tastaturberuf\ContaoImageCopyrightBundle\EventListener\DcaModuleListener' shared autowired service.
     *
     * @return \Tastaturberuf\ContaoImageCopyrightBundle\EventListener\DcaModuleListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/tastaturberuf/contao-image-copyright-bundle/EventListener/DcaModuleListener.php';

        return $container->services['Tastaturberuf\\ContaoImageCopyrightBundle\\EventListener\\DcaModuleListener'] = new \Tastaturberuf\ContaoImageCopyrightBundle\EventListener\DcaModuleListener(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)));
    }
}