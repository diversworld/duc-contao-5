<?php

namespace ContainerXiLrMqS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClassUtilService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'HeimrichHannot\UtilsBundle\Util\ClassUtil' shared autowired service.
     *
     * @return \HeimrichHannot\UtilsBundle\Util\ClassUtil
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/heimrichhannot/contao-utils-bundle/src/Util/ClassUtil.php';

        return $container->privates['HeimrichHannot\\UtilsBundle\\Util\\ClassUtil'] = new \HeimrichHannot\UtilsBundle\Util\ClassUtil();
    }
}