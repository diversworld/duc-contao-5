<?php

namespace Symfony\Config\DiversworldContaoCheck;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FooConfig 
{
    private $bar;
    private $_usedProperties = [];

    /**
     * @default '***'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function bar($value): static
    {
        $this->_usedProperties['bar'] = true;
        $this->bar = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('bar', $value)) {
            $this->_usedProperties['bar'] = true;
            $this->bar = $value['bar'];
            unset($value['bar']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['bar'])) {
            $output['bar'] = $this->bar;
        }

        return $output;
    }

}
