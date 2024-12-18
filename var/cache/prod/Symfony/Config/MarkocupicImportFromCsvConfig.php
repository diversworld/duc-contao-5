<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MarkocupicImportFromCsvConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $maxInsertsPerRequest;
    private $_usedProperties = [];

    /**
     * @default 25
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxInsertsPerRequest($value): static
    {
        $this->_usedProperties['maxInsertsPerRequest'] = true;
        $this->maxInsertsPerRequest = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'markocupic_import_from_csv';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('max_inserts_per_request', $value)) {
            $this->_usedProperties['maxInsertsPerRequest'] = true;
            $this->maxInsertsPerRequest = $value['max_inserts_per_request'];
            unset($value['max_inserts_per_request']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['maxInsertsPerRequest'])) {
            $output['max_inserts_per_request'] = $this->maxInsertsPerRequest;
        }

        return $output;
    }

}
