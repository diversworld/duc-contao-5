<?php

namespace ContainerXCjKscP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Fragment_Contao_ContentElement_CookiebarOpenerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.fragment._contao.content_element.cookiebar_opener' shared autowired service.
     *
     * @return \Oveleon\ContaoCookiebar\Controller\ContentElement\CookiebarOpenerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/AbstractContentElementController.php';
        include_once \dirname(__DIR__, 4).'/vendor/oveleon/contao-cookiebar/src/Controller/ContentElement/CookiebarOpenerController.php';

        $container->services['contao.fragment._contao.content_element.cookiebar_opener'] = $instance = new \Oveleon\ContaoCookiebar\Controller\ContentElement\CookiebarOpenerController(($container->services['translator'] ?? self::getTranslatorService($container)));

        $instance->setFragmentOptions(['type' => 'cookiebar_opener', 'category' => 'links', 'template' => 'ccb_opener_default', 'method' => NULL, 'renderer' => NULL, 'nestedFragments' => false, 'priority' => 0, 'debugController' => 'Oveleon\\ContaoCookiebar\\Controller\\ContentElement\\CookiebarOpenerController']);
        $instance->setContainer(($container->privates['.service_locator.nqgdEu8'] ?? $container->load('get_ServiceLocator_NqgdEu8Service'))->withContext('contao.fragment._contao.content_element.cookiebar_opener', $container));

        return $instance;
    }
}