<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class Code4nixUriSignerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $parameter;
    private $expiration;
    private $_usedProperties = [];

    /**
     * @default '_hash'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function parameter($value): static
    {
        $this->_usedProperties['parameter'] = true;
        $this->parameter = $value;

        return $this;
    }

    /**
     * Expiration time in seconds
     * @default 3600
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function expiration($value): static
    {
        $this->_usedProperties['expiration'] = true;
        $this->expiration = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'code4nix_uri_signer';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('parameter', $value)) {
            $this->_usedProperties['parameter'] = true;
            $this->parameter = $value['parameter'];
            unset($value['parameter']);
        }

        if (array_key_exists('expiration', $value)) {
            $this->_usedProperties['expiration'] = true;
            $this->expiration = $value['expiration'];
            unset($value['expiration']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['parameter'])) {
            $output['parameter'] = $this->parameter;
        }
        if (isset($this->_usedProperties['expiration'])) {
            $output['expiration'] = $this->expiration;
        }

        return $output;
    }

}
