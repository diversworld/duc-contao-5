<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'CodefogTags'.\DIRECTORY_SEPARATOR.'ManagersConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CodefogTagsConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $managers;
    private $_usedProperties = [];

    public function managers(string $name, array $value = []): \Symfony\Config\CodefogTags\ManagersConfig
    {
        if (!isset($this->managers[$name])) {
            $this->_usedProperties['managers'] = true;
            $this->managers[$name] = new \Symfony\Config\CodefogTags\ManagersConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "managers()" has already been initialized. You cannot pass values the second time you call managers().');
        }

        return $this->managers[$name];
    }

    public function getExtensionAlias(): string
    {
        return 'codefog_tags';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('managers', $value)) {
            $this->_usedProperties['managers'] = true;
            $this->managers = array_map(fn ($v) => new \Symfony\Config\CodefogTags\ManagersConfig($v), $value['managers']);
            unset($value['managers']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['managers'])) {
            $output['managers'] = array_map(fn ($v) => $v->toArray(), $this->managers);
        }

        return $output;
    }

}
