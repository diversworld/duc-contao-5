<?php

namespace ContainerXiLrMqS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNewsletterActivateNotificationTypeService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'Terminal42\NotificationCenterBundle\NotificationType\Newsletter\NewsletterActivateNotificationType' shared service.
     *
     * @return \Terminal42\NotificationCenterBundle\NotificationType\Newsletter\NewsletterActivateNotificationType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/terminal42/notification_center/src/NotificationType/NotificationTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/terminal42/notification_center/src/NotificationType/Newsletter/NewsletterActivateNotificationType.php';

        return $container->privates['Terminal42\\NotificationCenterBundle\\NotificationType\\Newsletter\\NewsletterActivateNotificationType'] = new \Terminal42\NotificationCenterBundle\NotificationType\Newsletter\NewsletterActivateNotificationType(($container->privates['Terminal42\\NotificationCenterBundle\\Token\\Definition\\Factory\\ChainTokenDefinitionFactory'] ?? $container->load('getChainTokenDefinitionFactoryService')));
    }
}