<?php

namespace Symfony\Config\CgoitCalendarExtended;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Exceptions'.\DIRECTORY_SEPARATOR.'MoveTimesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ExceptionsConfig 
{
    private $maxCount;
    private $moveDays;
    private $moveTimes;
    private $_usedProperties = [];

    /**
     * The maximum number of repeat exceptions for an event. Default: 250.
     * @default 250
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxCount($value): static
    {
        $this->_usedProperties['maxCount'] = true;
        $this->maxCount = $value;

        return $this;
    }

    /**
     * The range of days for the move date option. 14 means from -14 days to 14 days. Default: 7.
     * @default 7
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function moveDays($value): static
    {
        $this->_usedProperties['moveDays'] = true;
        $this->moveDays = $value;

        return $this;
    }

    /**
     * @default {"from":"00:00","to":"23:59","interval":15}
    */
    public function moveTimes(array $value = []): \Symfony\Config\CgoitCalendarExtended\Exceptions\MoveTimesConfig
    {
        if (null === $this->moveTimes) {
            $this->_usedProperties['moveTimes'] = true;
            $this->moveTimes = new \Symfony\Config\CgoitCalendarExtended\Exceptions\MoveTimesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "moveTimes()" has already been initialized. You cannot pass values the second time you call moveTimes().');
        }

        return $this->moveTimes;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('max_count', $value)) {
            $this->_usedProperties['maxCount'] = true;
            $this->maxCount = $value['max_count'];
            unset($value['max_count']);
        }

        if (array_key_exists('move_days', $value)) {
            $this->_usedProperties['moveDays'] = true;
            $this->moveDays = $value['move_days'];
            unset($value['move_days']);
        }

        if (array_key_exists('move_times', $value)) {
            $this->_usedProperties['moveTimes'] = true;
            $this->moveTimes = new \Symfony\Config\CgoitCalendarExtended\Exceptions\MoveTimesConfig($value['move_times']);
            unset($value['move_times']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['maxCount'])) {
            $output['max_count'] = $this->maxCount;
        }
        if (isset($this->_usedProperties['moveDays'])) {
            $output['move_days'] = $this->moveDays;
        }
        if (isset($this->_usedProperties['moveTimes'])) {
            $output['move_times'] = $this->moveTimes->toArray();
        }

        return $output;
    }

}
