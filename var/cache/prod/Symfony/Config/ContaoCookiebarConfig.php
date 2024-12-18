<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ContaoCookiebarConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $considerDnt;
    private $anonymizeIp;
    private $consentLog;
    private $lifetime;
    private $storageKey;
    private $pageTemplates;
    private $iframeTypes;
    private $disableFocustrap;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function considerDnt($value): static
    {
        $this->_usedProperties['considerDnt'] = true;
        $this->considerDnt = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function anonymizeIp($value): static
    {
        $this->_usedProperties['anonymizeIp'] = true;
        $this->anonymizeIp = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function consentLog($value): static
    {
        $this->_usedProperties['consentLog'] = true;
        $this->consentLog = $value;

        return $this;
    }

    /**
     * Lifetime in seconds (default = 2 years = 63072000)
     * @default 63072000
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function lifetime($value): static
    {
        $this->_usedProperties['lifetime'] = true;
        $this->lifetime = $value;

        return $this;
    }

    /**
     * localStorage key
     * @default 'ccb_contao_token'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function storageKey($value): static
    {
        $this->_usedProperties['storageKey'] = true;
        $this->storageKey = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function pageTemplates(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['pageTemplates'] = true;
        $this->pageTemplates = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|array> $value
     *
     * @return $this
     */
    public function iframeTypes(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['iframeTypes'] = true;
        $this->iframeTypes = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function disableFocustrap($value): static
    {
        $this->_usedProperties['disableFocustrap'] = true;
        $this->disableFocustrap = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'contao_cookiebar';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('consider_dnt', $value)) {
            $this->_usedProperties['considerDnt'] = true;
            $this->considerDnt = $value['consider_dnt'];
            unset($value['consider_dnt']);
        }

        if (array_key_exists('anonymize_ip', $value)) {
            $this->_usedProperties['anonymizeIp'] = true;
            $this->anonymizeIp = $value['anonymize_ip'];
            unset($value['anonymize_ip']);
        }

        if (array_key_exists('consent_log', $value)) {
            $this->_usedProperties['consentLog'] = true;
            $this->consentLog = $value['consent_log'];
            unset($value['consent_log']);
        }

        if (array_key_exists('lifetime', $value)) {
            $this->_usedProperties['lifetime'] = true;
            $this->lifetime = $value['lifetime'];
            unset($value['lifetime']);
        }

        if (array_key_exists('storage_key', $value)) {
            $this->_usedProperties['storageKey'] = true;
            $this->storageKey = $value['storage_key'];
            unset($value['storage_key']);
        }

        if (array_key_exists('page_templates', $value)) {
            $this->_usedProperties['pageTemplates'] = true;
            $this->pageTemplates = $value['page_templates'];
            unset($value['page_templates']);
        }

        if (array_key_exists('iframe_types', $value)) {
            $this->_usedProperties['iframeTypes'] = true;
            $this->iframeTypes = $value['iframe_types'];
            unset($value['iframe_types']);
        }

        if (array_key_exists('disable_focustrap', $value)) {
            $this->_usedProperties['disableFocustrap'] = true;
            $this->disableFocustrap = $value['disable_focustrap'];
            unset($value['disable_focustrap']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['considerDnt'])) {
            $output['consider_dnt'] = $this->considerDnt;
        }
        if (isset($this->_usedProperties['anonymizeIp'])) {
            $output['anonymize_ip'] = $this->anonymizeIp;
        }
        if (isset($this->_usedProperties['consentLog'])) {
            $output['consent_log'] = $this->consentLog;
        }
        if (isset($this->_usedProperties['lifetime'])) {
            $output['lifetime'] = $this->lifetime;
        }
        if (isset($this->_usedProperties['storageKey'])) {
            $output['storage_key'] = $this->storageKey;
        }
        if (isset($this->_usedProperties['pageTemplates'])) {
            $output['page_templates'] = $this->pageTemplates;
        }
        if (isset($this->_usedProperties['iframeTypes'])) {
            $output['iframe_types'] = $this->iframeTypes;
        }
        if (isset($this->_usedProperties['disableFocustrap'])) {
            $output['disable_focustrap'] = $this->disableFocustrap;
        }

        return $output;
    }

}
