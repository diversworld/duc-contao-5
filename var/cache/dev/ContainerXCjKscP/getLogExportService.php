<?php

namespace ContainerXCjKscP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLogExportService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'Oveleon\ContaoCookiebar\Export\LogExport' shared autowired service.
     *
     * @return \Oveleon\ContaoCookiebar\Export\LogExport
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/oveleon/contao-cookiebar/src/Export/LogExport.php';

        return $container->services['Oveleon\\ContaoCookiebar\\Export\\LogExport'] = new \Oveleon\ContaoCookiebar\Export\LogExport();
    }
}