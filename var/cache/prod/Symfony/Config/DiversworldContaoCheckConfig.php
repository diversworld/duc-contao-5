<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'DiversworldContaoCheck'.\DIRECTORY_SEPARATOR.'FooConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DiversworldContaoCheckConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $foo;
    private $_usedProperties = [];

    /**
     * @default {"bar":"***"}
    */
    public function foo(array $value = []): \Symfony\Config\DiversworldContaoCheck\FooConfig
    {
        if (null === $this->foo) {
            $this->_usedProperties['foo'] = true;
            $this->foo = new \Symfony\Config\DiversworldContaoCheck\FooConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "foo()" has already been initialized. You cannot pass values the second time you call foo().');
        }

        return $this->foo;
    }

    public function getExtensionAlias(): string
    {
        return 'diversworld_contao_check';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('foo', $value)) {
            $this->_usedProperties['foo'] = true;
            $this->foo = new \Symfony\Config\DiversworldContaoCheck\FooConfig($value['foo']);
            unset($value['foo']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['foo'])) {
            $output['foo'] = $this->foo->toArray();
        }

        return $output;
    }

}
