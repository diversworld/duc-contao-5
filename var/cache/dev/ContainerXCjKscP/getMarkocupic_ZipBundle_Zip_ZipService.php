<?php

namespace ContainerXCjKscP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMarkocupic_ZipBundle_Zip_ZipService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'markocupic.zip_bundle.zip.zip' shared service.
     *
     * @return \Markocupic\ZipBundle\Zip\Zip
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/markocupic/zip-bundle/src/Zip/Zip.php';

        return $container->services['markocupic.zip_bundle.zip.zip'] = new \Markocupic\ZipBundle\Zip\Zip();
    }
}