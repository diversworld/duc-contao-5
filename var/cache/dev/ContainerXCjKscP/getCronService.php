<?php

namespace ContainerXCjKscP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCronService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'Markocupic\ImportFromCsvBundle\Cron\Cron' shared autowired service.
     *
     * @return \Markocupic\ImportFromCsvBundle\Cron\Cron
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/markocupic/import-from-csv-bundle/src/Cron/Cron.php';

        $a = ($container->services['Markocupic\\ImportFromCsvBundle\\Import\\ImportFromCsvHelper'] ?? $container->load('getImportFromCsvHelperService'));

        if (isset($container->services['Markocupic\\ImportFromCsvBundle\\Cron\\Cron'])) {
            return $container->services['Markocupic\\ImportFromCsvBundle\\Cron\\Cron'];
        }

        return $container->services['Markocupic\\ImportFromCsvBundle\\Cron\\Cron'] = new \Markocupic\ImportFromCsvBundle\Cron\Cron(($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)), $a, ($container->services['monolog.logger.contao.cron'] ?? $container->load('getMonolog_Logger_Contao_CronService')));
    }
}