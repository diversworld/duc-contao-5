<?php

namespace ContainerXCjKscP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_LoginLinkHandler_ContaoBackendService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.login_link_handler.contao_backend' shared service.
     *
     * @return \Symfony\Component\Security\Http\LoginLink\LoginLinkHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/LoginLink/LoginLinkHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/LoginLink/LoginLinkHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Signature/SignatureHasher.php';

        $a = ($container->services['router'] ?? self::getRouterService($container));

        if (isset($container->privates['security.authenticator.login_link_handler.contao_backend'])) {
            return $container->privates['security.authenticator.login_link_handler.contao_backend'];
        }

        return $container->privates['security.authenticator.login_link_handler.contao_backend'] = new \Symfony\Component\Security\Http\LoginLink\LoginLinkHandler($a, ($container->privates['contao.security.backend_user_provider'] ?? $container->load('getContao_Security_BackendUserProviderService')), new \Symfony\Component\Security\Core\Signature\SignatureHasher(($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')), ['username', 'lastLogin'], $container->getEnv('APP_SECRET'), NULL, NULL), ['route_name' => 'contao_backend_login_link', 'lifetime' => 600]);
    }
}