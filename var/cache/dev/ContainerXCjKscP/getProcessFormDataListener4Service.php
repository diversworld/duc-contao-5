<?php

namespace ContainerXCjKscP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProcessFormDataListener4Service extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'Terminal42\NotificationCenterBundle\EventListener\ProcessFormDataListener' shared service.
     *
     * @return \Terminal42\NotificationCenterBundle\EventListener\ProcessFormDataListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/terminal42/notification_center/src/EventListener/ProcessFormDataListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/codefog/contao-haste/src/FileUploadNormalizer.php';

        return $container->services['Terminal42\\NotificationCenterBundle\\EventListener\\ProcessFormDataListener'] = new \Terminal42\NotificationCenterBundle\EventListener\ProcessFormDataListener(($container->privates['Terminal42\\NotificationCenterBundle\\NotificationCenter'] ?? $container->load('getNotificationCenterService')), new \Codefog\HasteBundle\FileUploadNormalizer(\dirname(__DIR__, 4), ($container->privates['mime_types'] ?? $container->load('getMimeTypesService')), ($container->privates['contao.filesystem.virtual.files'] ?? $container->load('getContao_Filesystem_Virtual_FilesService'))), ($container->privates['Terminal42\\NotificationCenterBundle\\Config\\ConfigLoader'] ?? $container->load('getConfigLoaderService')));
    }
}