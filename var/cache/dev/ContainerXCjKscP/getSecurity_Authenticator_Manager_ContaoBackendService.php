<?php

namespace ContainerXCjKscP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_Manager_ContaoBackendService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.manager.contao_backend' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticatorManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManager.php';

        $a = ($container->privates['Markocupic\\BackendPasswordRecoveryBundle\\Security\\Authenticator\\Authenticator'] ?? $container->load('getAuthenticatorService'));

        if (isset($container->privates['security.authenticator.manager.contao_backend'])) {
            return $container->privates['security.authenticator.manager.contao_backend'];
        }
        $b = ($container->privates['contao.security.login_authenticator.contao_backend'] ?? $container->load('getContao_Security_LoginAuthenticator_ContaoBackendService'));

        if (isset($container->privates['security.authenticator.manager.contao_backend'])) {
            return $container->privates['security.authenticator.manager.contao_backend'];
        }
        $c = ($container->privates['security.authenticator.login_link.contao_backend'] ?? $container->load('getSecurity_Authenticator_LoginLink_ContaoBackendService'));

        if (isset($container->privates['security.authenticator.manager.contao_backend'])) {
            return $container->privates['security.authenticator.manager.contao_backend'];
        }
        $d = ($container->privates['debug.security.event_dispatcher.contao_backend'] ?? self::getDebug_Security_EventDispatcher_ContaoBackendService($container));

        if (isset($container->privates['security.authenticator.manager.contao_backend'])) {
            return $container->privates['security.authenticator.manager.contao_backend'];
        }

        return $container->privates['security.authenticator.manager.contao_backend'] = new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([$a, $b, $c], ($container->services['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), $d, 'contao_backend', ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)), true, true, []);
    }
}