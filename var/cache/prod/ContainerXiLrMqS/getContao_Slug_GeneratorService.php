<?php

namespace ContainerXiLrMqS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Slug_GeneratorService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.slug.generator' shared service.
     *
     * @return \Ausi\SlugGenerator\SlugGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/ausi/slug-generator/src/SlugGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/ausi/slug-generator/src/SlugGenerator.php';

        return $container->services['contao.slug.generator'] = new \Ausi\SlugGenerator\SlugGenerator(['validChars' => '0-9a-z']);
    }
}