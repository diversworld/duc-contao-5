<?php

namespace Symfony\Config\CgoitCalendarExtended\Exceptions;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MoveTimesConfig 
{
    private $from;
    private $to;
    private $interval;
    private $_usedProperties = [];

    /**
     * The start time for the move time option. Default: 00:00.
     * @default '00:00'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function from($value): static
    {
        $this->_usedProperties['from'] = true;
        $this->from = $value;

        return $this;
    }

    /**
     * The end time for the move time option. Default: 23:59.
     * @default '23:59'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function to($value): static
    {
        $this->_usedProperties['to'] = true;
        $this->to = $value;

        return $this;
    }

    /**
     * The interval in minutes for the move time option. Default: 15.
     * @default 15
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function interval($value): static
    {
        $this->_usedProperties['interval'] = true;
        $this->interval = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('from', $value)) {
            $this->_usedProperties['from'] = true;
            $this->from = $value['from'];
            unset($value['from']);
        }

        if (array_key_exists('to', $value)) {
            $this->_usedProperties['to'] = true;
            $this->to = $value['to'];
            unset($value['to']);
        }

        if (array_key_exists('interval', $value)) {
            $this->_usedProperties['interval'] = true;
            $this->interval = $value['interval'];
            unset($value['interval']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['from'])) {
            $output['from'] = $this->from;
        }
        if (isset($this->_usedProperties['to'])) {
            $output['to'] = $this->to;
        }
        if (isset($this->_usedProperties['interval'])) {
            $output['interval'] = $this->interval;
        }

        return $output;
    }

}
