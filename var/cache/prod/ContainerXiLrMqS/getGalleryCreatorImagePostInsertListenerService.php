<?php

namespace ContainerXiLrMqS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGalleryCreatorImagePostInsertListenerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Markocupic\GalleryCreatorBundle\EventListener\ContaoHook\GalleryCreatorImagePostInsertListener' shared autowired service.
     *
     * @return \Markocupic\GalleryCreatorBundle\EventListener\ContaoHook\GalleryCreatorImagePostInsertListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/markocupic/gallery-creator-bundle/src/EventListener/ContaoHook/GalleryCreatorImagePostInsertListener.php';

        return $container->services['Markocupic\\GalleryCreatorBundle\\EventListener\\ContaoHook\\GalleryCreatorImagePostInsertListener'] = new \Markocupic\GalleryCreatorBundle\EventListener\ContaoHook\GalleryCreatorImagePostInsertListener(($container->services['security.helper'] ?? self::getSecurity_HelperService($container)));
    }
}