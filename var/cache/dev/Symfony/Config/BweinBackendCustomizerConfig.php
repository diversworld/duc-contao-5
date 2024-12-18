<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class BweinBackendCustomizerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $headerTitle;
    private $headerColor;
    private $headerInvert;
    private $envTitle;
    private $envColor;
    private $mainColor;
    private $_usedProperties = [];

    /**
     * Adds a title to the header next to the logo.
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function headerTitle($value): static
    {
        $this->_usedProperties['headerTitle'] = true;
        $this->headerTitle = $value;

        return $this;
    }

    /**
     * Configures the header color.
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function headerColor($value): static
    {
        $this->_usedProperties['headerColor'] = true;
        $this->headerColor = $value;

        return $this;
    }

    /**
     * Inverts the elements of the header.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function headerInvert($value): static
    {
        $this->_usedProperties['headerInvert'] = true;
        $this->headerInvert = $value;

        return $this;
    }

    /**
     * Specifies the title of the environment badge.
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function envTitle($value): static
    {
        $this->_usedProperties['envTitle'] = true;
        $this->envTitle = $value;

        return $this;
    }

    /**
     * Configures the color of the environment badge.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function envColor($value): static
    {
        $this->_usedProperties['envColor'] = true;
        $this->envColor = $value;

        return $this;
    }

    /**
     * Configures the background color of the main container.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mainColor($value): static
    {
        $this->_usedProperties['mainColor'] = true;
        $this->mainColor = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'bwein_backend_customizer';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('header_title', $value)) {
            $this->_usedProperties['headerTitle'] = true;
            $this->headerTitle = $value['header_title'];
            unset($value['header_title']);
        }

        if (array_key_exists('header_color', $value)) {
            $this->_usedProperties['headerColor'] = true;
            $this->headerColor = $value['header_color'];
            unset($value['header_color']);
        }

        if (array_key_exists('header_invert', $value)) {
            $this->_usedProperties['headerInvert'] = true;
            $this->headerInvert = $value['header_invert'];
            unset($value['header_invert']);
        }

        if (array_key_exists('env_title', $value)) {
            $this->_usedProperties['envTitle'] = true;
            $this->envTitle = $value['env_title'];
            unset($value['env_title']);
        }

        if (array_key_exists('env_color', $value)) {
            $this->_usedProperties['envColor'] = true;
            $this->envColor = $value['env_color'];
            unset($value['env_color']);
        }

        if (array_key_exists('main_color', $value)) {
            $this->_usedProperties['mainColor'] = true;
            $this->mainColor = $value['main_color'];
            unset($value['main_color']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['headerTitle'])) {
            $output['header_title'] = $this->headerTitle;
        }
        if (isset($this->_usedProperties['headerColor'])) {
            $output['header_color'] = $this->headerColor;
        }
        if (isset($this->_usedProperties['headerInvert'])) {
            $output['header_invert'] = $this->headerInvert;
        }
        if (isset($this->_usedProperties['envTitle'])) {
            $output['env_title'] = $this->envTitle;
        }
        if (isset($this->_usedProperties['envColor'])) {
            $output['env_color'] = $this->envColor;
        }
        if (isset($this->_usedProperties['mainColor'])) {
            $output['main_color'] = $this->mainColor;
        }

        return $output;
    }

}
