<?php

namespace ContainerXiLrMqS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUnfilteredHtmlControllerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Contao\CoreBundle\Controller\ContentElement\UnfilteredHtmlController' shared service.
     *
     * @return \Contao\CoreBundle\Controller\ContentElement\UnfilteredHtmlController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/AbstractContentElementController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/UnfilteredHtmlController.php';

        $container->services['Contao\\CoreBundle\\Controller\\ContentElement\\UnfilteredHtmlController'] = $instance = new \Contao\CoreBundle\Controller\ContentElement\UnfilteredHtmlController();

        $instance->setContainer(($container->privates['.service_locator.gSfX.Ym'] ?? $container->load('get_ServiceLocator_GSfX_YmService'))->withContext('Contao\\CoreBundle\\Controller\\ContentElement\\UnfilteredHtmlController', $container));

        return $instance;
    }
}