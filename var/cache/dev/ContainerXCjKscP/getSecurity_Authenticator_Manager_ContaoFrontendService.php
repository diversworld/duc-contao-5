<?php

namespace ContainerXCjKscP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_Manager_ContaoFrontendService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.manager.contao_frontend' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticatorManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManager.php';

        $a = ($container->privates['contao.security.login_authenticator.contao_frontend'] ?? $container->load('getContao_Security_LoginAuthenticator_ContaoFrontendService'));

        if (isset($container->privates['security.authenticator.manager.contao_frontend'])) {
            return $container->privates['security.authenticator.manager.contao_frontend'];
        }
        $b = ($container->privates['security.authenticator.remember_me.contao_frontend'] ?? $container->load('getSecurity_Authenticator_RememberMe_ContaoFrontendService'));

        if (isset($container->privates['security.authenticator.manager.contao_frontend'])) {
            return $container->privates['security.authenticator.manager.contao_frontend'];
        }
        $c = ($container->privates['debug.security.event_dispatcher.contao_frontend'] ?? self::getDebug_Security_EventDispatcher_ContaoFrontendService($container));

        if (isset($container->privates['security.authenticator.manager.contao_frontend'])) {
            return $container->privates['security.authenticator.manager.contao_frontend'];
        }

        return $container->privates['security.authenticator.manager.contao_frontend'] = new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([$a, $b], ($container->services['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), $c, 'contao_frontend', ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)), true, true, []);
    }
}