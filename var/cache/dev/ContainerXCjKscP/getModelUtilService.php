<?php

namespace ContainerXCjKscP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getModelUtilService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'HeimrichHannot\UtilsBundle\Util\ModelUtil' shared autowired service.
     *
     * @return \HeimrichHannot\UtilsBundle\Util\ModelUtil
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/heimrichhannot/contao-utils-bundle/src/Util/ModelUtil.php';

        $a = ($container->services['contao.insert_tag.parser'] ?? $container->load('getContao_InsertTag_ParserService'));

        if (isset($container->privates['HeimrichHannot\\UtilsBundle\\Util\\ModelUtil'])) {
            return $container->privates['HeimrichHannot\\UtilsBundle\\Util\\ModelUtil'];
        }

        return $container->privates['HeimrichHannot\\UtilsBundle\\Util\\ModelUtil'] = new \HeimrichHannot\UtilsBundle\Util\ModelUtil(($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)), $a);
    }
}