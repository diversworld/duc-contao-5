<?php

namespace ContainerXiLrMqS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthenticatorService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the private 'Markocupic\BackendPasswordRecoveryBundle\Security\Authenticator\Authenticator' shared autowired service.
     *
     * @return \Markocupic\BackendPasswordRecoveryBundle\Security\Authenticator\Authenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/markocupic/backend-password-recovery-bundle/src/Security/Authenticator/Authenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/code4nix/uri-signer/src/UriSigner.php';

        $a = ($container->services['router'] ?? self::getRouterService($container));

        if (isset($container->privates['Markocupic\\BackendPasswordRecoveryBundle\\Security\\Authenticator\\Authenticator'])) {
            return $container->privates['Markocupic\\BackendPasswordRecoveryBundle\\Security\\Authenticator\\Authenticator'];
        }
        $b = ($container->services['security.helper'] ?? self::getSecurity_HelperService($container));

        if (isset($container->privates['Markocupic\\BackendPasswordRecoveryBundle\\Security\\Authenticator\\Authenticator'])) {
            return $container->privates['Markocupic\\BackendPasswordRecoveryBundle\\Security\\Authenticator\\Authenticator'];
        }
        $c = ($container->services['monolog.logger.contao.general'] ?? $container->load('getMonolog_Logger_Contao_GeneralService'));

        if (isset($container->privates['Markocupic\\BackendPasswordRecoveryBundle\\Security\\Authenticator\\Authenticator'])) {
            return $container->privates['Markocupic\\BackendPasswordRecoveryBundle\\Security\\Authenticator\\Authenticator'];
        }

        return $container->privates['Markocupic\\BackendPasswordRecoveryBundle\\Security\\Authenticator\\Authenticator'] = new \Markocupic\BackendPasswordRecoveryBundle\Security\Authenticator\Authenticator(($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)), $a, ($container->services['contao.routing.scope_matcher'] ?? self::getContao_Routing_ScopeMatcherService($container)), $b, ($container->services['translator'] ?? self::getTranslatorService($container)), ($container->services['code4nix_uri_signer.uri_signer'] ??= new \Code4Nix\UriSigner\UriSigner($container->getEnv('APP_SECRET'), '_hash', 3600)), $c);
    }
}