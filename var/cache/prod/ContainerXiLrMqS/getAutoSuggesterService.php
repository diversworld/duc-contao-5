<?php

namespace ContainerXiLrMqS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAutoSuggesterService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'Terminal42\NotificationCenterBundle\Backend\AutoSuggester' shared service.
     *
     * @return \Terminal42\NotificationCenterBundle\Backend\AutoSuggester
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/terminal42/notification_center/src/Backend/AutoSuggester.php';

        return $container->privates['Terminal42\\NotificationCenterBundle\\Backend\\AutoSuggester'] = new \Terminal42\NotificationCenterBundle\Backend\AutoSuggester(($container->services['assets.packages'] ?? self::getAssets_PackagesService($container)), ($container->privates['Terminal42\\NotificationCenterBundle\\NotificationCenter'] ?? $container->load('getNotificationCenterService')), ($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}