<?php

namespace ContainerXCjKscP;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-trusted-device/Security/TwoFactor/Trusted/TrustedDeviceTokenStorage.php';

class TrustedDeviceTokenStorageGhostE7836e7 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenStorage implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'cookieName' => [parent::class, 'cookieName', parent::class],
        "\0".parent::class."\0".'requestStack' => [parent::class, 'requestStack', parent::class],
        "\0".parent::class."\0".'tokenGenerator' => [parent::class, 'tokenGenerator', parent::class],
        "\0".parent::class."\0".'trustedTokenList' => [parent::class, 'trustedTokenList', null],
        "\0".parent::class."\0".'updateCookie' => [parent::class, 'updateCookie', null],
        'cookieName' => [parent::class, 'cookieName', parent::class],
        'requestStack' => [parent::class, 'requestStack', parent::class],
        'tokenGenerator' => [parent::class, 'tokenGenerator', parent::class],
        'trustedTokenList' => [parent::class, 'trustedTokenList', null],
        'updateCookie' => [parent::class, 'updateCookie', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('TrustedDeviceTokenStorageGhostE7836e7', false)) {
    \class_alias(__NAMESPACE__.'\\TrustedDeviceTokenStorageGhostE7836e7', 'TrustedDeviceTokenStorageGhostE7836e7', false);
}
