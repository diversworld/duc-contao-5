<?php

namespace ContainerXCjKscP;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-trusted-device/Security/TwoFactor/Trusted/TrustedCookieResponseListener.php';

class TrustedCookieResponseListenerGhost2528a3a extends \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedCookieResponseListener implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'cookieDomain' => [parent::class, 'cookieDomain', parent::class],
        "\0".parent::class."\0".'cookieName' => [parent::class, 'cookieName', parent::class],
        "\0".parent::class."\0".'cookiePath' => [parent::class, 'cookiePath', parent::class],
        "\0".parent::class."\0".'cookieSameSite' => [parent::class, 'cookieSameSite', parent::class],
        "\0".parent::class."\0".'cookieSecure' => [parent::class, 'cookieSecure', parent::class],
        "\0".parent::class."\0".'trustedTokenLifetime' => [parent::class, 'trustedTokenLifetime', parent::class],
        "\0".parent::class."\0".'trustedTokenStorage' => [parent::class, 'trustedTokenStorage', parent::class],
        'cookieDomain' => [parent::class, 'cookieDomain', parent::class],
        'cookieName' => [parent::class, 'cookieName', parent::class],
        'cookiePath' => [parent::class, 'cookiePath', parent::class],
        'cookieSameSite' => [parent::class, 'cookieSameSite', parent::class],
        'cookieSecure' => [parent::class, 'cookieSecure', parent::class],
        'trustedTokenLifetime' => [parent::class, 'trustedTokenLifetime', parent::class],
        'trustedTokenStorage' => [parent::class, 'trustedTokenStorage', parent::class],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('TrustedCookieResponseListenerGhost2528a3a', false)) {
    \class_alias(__NAMESPACE__.'\\TrustedCookieResponseListenerGhost2528a3a', 'TrustedCookieResponseListenerGhost2528a3a', false);
}
