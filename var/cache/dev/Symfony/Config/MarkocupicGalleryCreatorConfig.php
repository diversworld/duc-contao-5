<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MarkocupicGalleryCreatorConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $uploadPath;
    private $copyImagesOnImport;
    private $readExifMetaData;
    private $validExtensions;
    private $_usedProperties = [];

    /**
     * @default 'files/gallery_creator_albums'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function uploadPath($value): static
    {
        $this->_usedProperties['uploadPath'] = true;
        $this->uploadPath = $value;

        return $this;
    }

    /**
     * Make a copy of the original when importing images from an foreign directory. Default to true.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function copyImagesOnImport($value): static
    {
        $this->_usedProperties['copyImagesOnImport'] = true;
        $this->copyImagesOnImport = $value;

        return $this;
    }

    /**
     * Read exif meta data from file. Default to false.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function readExifMetaData($value): static
    {
        $this->_usedProperties['readExifMetaData'] = true;
        $this->readExifMetaData = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function validExtensions(string $name, mixed $value): static
    {
        $this->_usedProperties['validExtensions'] = true;
        $this->validExtensions[$name] = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'markocupic_gallery_creator';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('upload_path', $value)) {
            $this->_usedProperties['uploadPath'] = true;
            $this->uploadPath = $value['upload_path'];
            unset($value['upload_path']);
        }

        if (array_key_exists('copy_images_on_import', $value)) {
            $this->_usedProperties['copyImagesOnImport'] = true;
            $this->copyImagesOnImport = $value['copy_images_on_import'];
            unset($value['copy_images_on_import']);
        }

        if (array_key_exists('read_exif_meta_data', $value)) {
            $this->_usedProperties['readExifMetaData'] = true;
            $this->readExifMetaData = $value['read_exif_meta_data'];
            unset($value['read_exif_meta_data']);
        }

        if (array_key_exists('valid_extensions', $value)) {
            $this->_usedProperties['validExtensions'] = true;
            $this->validExtensions = $value['valid_extensions'];
            unset($value['valid_extensions']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['uploadPath'])) {
            $output['upload_path'] = $this->uploadPath;
        }
        if (isset($this->_usedProperties['copyImagesOnImport'])) {
            $output['copy_images_on_import'] = $this->copyImagesOnImport;
        }
        if (isset($this->_usedProperties['readExifMetaData'])) {
            $output['read_exif_meta_data'] = $this->readExifMetaData;
        }
        if (isset($this->_usedProperties['validExtensions'])) {
            $output['valid_extensions'] = $this->validExtensions;
        }

        return $output;
    }

}
