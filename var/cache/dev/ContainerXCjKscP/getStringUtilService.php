<?php

namespace ContainerXCjKscP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStringUtilService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'HeimrichHannot\UtilsBundle\Util\StringUtil' shared autowired service.
     *
     * @return \HeimrichHannot\UtilsBundle\Util\StringUtil
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/heimrichhannot/contao-utils-bundle/src/Util/StringUtil.php';

        return $container->privates['HeimrichHannot\\UtilsBundle\\Util\\StringUtil'] = new \HeimrichHannot\UtilsBundle\Util\StringUtil();
    }
}