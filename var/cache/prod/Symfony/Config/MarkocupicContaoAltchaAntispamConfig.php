<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MarkocupicContaoAltchaAntispamConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $hmacKey;
    private $algorithm;
    private $rangeMin;
    private $rangeMax;
    private $challengeExpiry;
    private $_usedProperties = [];

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function hmacKey($value): static
    {
        $this->_usedProperties['hmacKey'] = true;
        $this->hmacKey = $value;

        return $this;
    }

    /**
     * @default 'SHA-256'
     * @param ParamConfigurator|'SHA-256'|'SHA-384'|'SHA-512' $value
     * @return $this
     */
    public function algorithm($value): static
    {
        $this->_usedProperties['algorithm'] = true;
        $this->algorithm = $value;

        return $this;
    }

    /**
     * @default 10000
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function rangeMin($value): static
    {
        $this->_usedProperties['rangeMin'] = true;
        $this->rangeMin = $value;

        return $this;
    }

    /**
     * @default 100000
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function rangeMax($value): static
    {
        $this->_usedProperties['rangeMax'] = true;
        $this->rangeMax = $value;

        return $this;
    }

    /**
     * @default 3600
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function challengeExpiry($value): static
    {
        $this->_usedProperties['challengeExpiry'] = true;
        $this->challengeExpiry = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'markocupic_contao_altcha_antispam';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('hmac_key', $value)) {
            $this->_usedProperties['hmacKey'] = true;
            $this->hmacKey = $value['hmac_key'];
            unset($value['hmac_key']);
        }

        if (array_key_exists('algorithm', $value)) {
            $this->_usedProperties['algorithm'] = true;
            $this->algorithm = $value['algorithm'];
            unset($value['algorithm']);
        }

        if (array_key_exists('range_min', $value)) {
            $this->_usedProperties['rangeMin'] = true;
            $this->rangeMin = $value['range_min'];
            unset($value['range_min']);
        }

        if (array_key_exists('range_max', $value)) {
            $this->_usedProperties['rangeMax'] = true;
            $this->rangeMax = $value['range_max'];
            unset($value['range_max']);
        }

        if (array_key_exists('challenge_expiry', $value)) {
            $this->_usedProperties['challengeExpiry'] = true;
            $this->challengeExpiry = $value['challenge_expiry'];
            unset($value['challenge_expiry']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['hmacKey'])) {
            $output['hmac_key'] = $this->hmacKey;
        }
        if (isset($this->_usedProperties['algorithm'])) {
            $output['algorithm'] = $this->algorithm;
        }
        if (isset($this->_usedProperties['rangeMin'])) {
            $output['range_min'] = $this->rangeMin;
        }
        if (isset($this->_usedProperties['rangeMax'])) {
            $output['range_max'] = $this->rangeMax;
        }
        if (isset($this->_usedProperties['challengeExpiry'])) {
            $output['challenge_expiry'] = $this->challengeExpiry;
        }

        return $output;
    }

}
