<?php

namespace ContainerXiLrMqS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFileUtilService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Markocupic\GalleryCreatorBundle\Util\FileUtil' shared autowired service.
     *
     * @return \Markocupic\GalleryCreatorBundle\Util\FileUtil
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/markocupic/gallery-creator-bundle/src/Util/FileUtil.php';

        return $container->services['Markocupic\\GalleryCreatorBundle\\Util\\FileUtil'] = new \Markocupic\GalleryCreatorBundle\Util\FileUtil(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), ($container->services['translator'] ?? self::getTranslatorService($container)), \dirname(__DIR__, 4), true, $container->parameters['markocupic_gallery_creator.valid_extensions'], ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)));
    }
}