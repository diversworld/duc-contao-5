<?php

namespace ContainerXCjKscP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Fragment_Contao_FrontendModule_LostPasswordNotificationCenterService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.fragment._contao.frontend_module.lostPasswordNotificationCenter' shared service.
     *
     * @return \Terminal42\NotificationCenterBundle\Controller\FrontendModule\LostPasswordController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/contao/classes/Frontend.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/contao/modules/Module.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/contao/modules/ModuleLostPassword.php';
        include_once \dirname(__DIR__, 4).'/vendor/terminal42/notification_center/src/Legacy/LostPasswordModule.php';
        include_once \dirname(__DIR__, 4).'/vendor/terminal42/notification_center/src/Controller/FrontendModule/LostPasswordController.php';

        return $container->services['contao.fragment._contao.frontend_module.lostPasswordNotificationCenter'] = new \Terminal42\NotificationCenterBundle\Controller\FrontendModule\LostPasswordController(($container->privates['Terminal42\\NotificationCenterBundle\\NotificationCenter'] ?? $container->load('getNotificationCenterService')), ($container->services['Codefog\\HasteBundle\\Formatter'] ?? $container->load('getFormatterService')));
    }
}