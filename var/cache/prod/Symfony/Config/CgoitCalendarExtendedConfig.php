<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'CgoitCalendarExtended'.\DIRECTORY_SEPARATOR.'ExceptionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CgoitCalendarExtendedConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $maxRepeatCount;
    private $exceptions;
    private $filterFields;
    private $_usedProperties = [];

    /**
     * The maximum number an event is repeated. Default: 365.
     * @default 365
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxRepeatCount($value): static
    {
        $this->_usedProperties['maxRepeatCount'] = true;
        $this->maxRepeatCount = $value;

        return $this;
    }

    /**
     * @default {"max_count":250,"move_days":7,"move_times":{"from":"00:00","to":"23:59","interval":15}}
    */
    public function exceptions(array $value = []): \Symfony\Config\CgoitCalendarExtended\ExceptionsConfig
    {
        if (null === $this->exceptions) {
            $this->_usedProperties['exceptions'] = true;
            $this->exceptions = new \Symfony\Config\CgoitCalendarExtended\ExceptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "exceptions()" has already been initialized. You cannot pass values the second time you call exceptions().');
        }

        return $this->exceptions;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function filterFields(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['filterFields'] = true;
        $this->filterFields = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'cgoit_calendar_extended';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('max_repeat_count', $value)) {
            $this->_usedProperties['maxRepeatCount'] = true;
            $this->maxRepeatCount = $value['max_repeat_count'];
            unset($value['max_repeat_count']);
        }

        if (array_key_exists('exceptions', $value)) {
            $this->_usedProperties['exceptions'] = true;
            $this->exceptions = new \Symfony\Config\CgoitCalendarExtended\ExceptionsConfig($value['exceptions']);
            unset($value['exceptions']);
        }

        if (array_key_exists('filter_fields', $value)) {
            $this->_usedProperties['filterFields'] = true;
            $this->filterFields = $value['filter_fields'];
            unset($value['filter_fields']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['maxRepeatCount'])) {
            $output['max_repeat_count'] = $this->maxRepeatCount;
        }
        if (isset($this->_usedProperties['exceptions'])) {
            $output['exceptions'] = $this->exceptions->toArray();
        }
        if (isset($this->_usedProperties['filterFields'])) {
            $output['filter_fields'] = $this->filterFields;
        }

        return $output;
    }

}
