<?php

namespace ContainerXiLrMqS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReviseAlbumDatabaseService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Markocupic\GalleryCreatorBundle\Revise\ReviseAlbumDatabase' shared autowired service.
     *
     * @return \Markocupic\GalleryCreatorBundle\Revise\ReviseAlbumDatabase
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/markocupic/gallery-creator-bundle/src/Revise/ReviseAlbumDatabase.php';

        return $container->services['Markocupic\\GalleryCreatorBundle\\Revise\\ReviseAlbumDatabase'] = new \Markocupic\GalleryCreatorBundle\Revise\ReviseAlbumDatabase(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), \dirname(__DIR__, 4), 'files/gallery_creator_albums');
    }
}