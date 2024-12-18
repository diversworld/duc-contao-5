<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MarkocupicBackendPasswordRecoveryConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $tokenLifetime;
    private $showPasswordRecoveryLinkOnLoginFailureOnly;
    private $_usedProperties = [];

    /**
     * @default 600
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function tokenLifetime($value): static
    {
        $this->_usedProperties['tokenLifetime'] = true;
        $this->tokenLifetime = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function showPasswordRecoveryLinkOnLoginFailureOnly($value): static
    {
        $this->_usedProperties['showPasswordRecoveryLinkOnLoginFailureOnly'] = true;
        $this->showPasswordRecoveryLinkOnLoginFailureOnly = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'markocupic_backend_password_recovery';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('token_lifetime', $value)) {
            $this->_usedProperties['tokenLifetime'] = true;
            $this->tokenLifetime = $value['token_lifetime'];
            unset($value['token_lifetime']);
        }

        if (array_key_exists('show_password_recovery_link_on_login_failure_only', $value)) {
            $this->_usedProperties['showPasswordRecoveryLinkOnLoginFailureOnly'] = true;
            $this->showPasswordRecoveryLinkOnLoginFailureOnly = $value['show_password_recovery_link_on_login_failure_only'];
            unset($value['show_password_recovery_link_on_login_failure_only']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['tokenLifetime'])) {
            $output['token_lifetime'] = $this->tokenLifetime;
        }
        if (isset($this->_usedProperties['showPasswordRecoveryLinkOnLoginFailureOnly'])) {
            $output['show_password_recovery_link_on_login_failure_only'] = $this->showPasswordRecoveryLinkOnLoginFailureOnly;
        }

        return $output;
    }

}
