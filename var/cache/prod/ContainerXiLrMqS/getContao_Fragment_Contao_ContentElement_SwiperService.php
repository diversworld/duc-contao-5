<?php

namespace ContainerXiLrMqS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Fragment_Contao_ContentElement_SwiperService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'contao.fragment._contao.content_element.swiper' shared service.
     *
     * @return \Contao\CoreBundle\Controller\ContentElement\SwiperController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/AbstractContentElementController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/ContentElement/SwiperController.php';

        $container->services['contao.fragment._contao.content_element.swiper'] = $instance = new \Contao\CoreBundle\Controller\ContentElement\SwiperController();

        $a = $container->load('get_ServiceLocator_GSfX_Ym_Contao_Fragment_Contao_ContentElement_SwiperService');

        $instance->setContainer($a);
        $instance->setFragmentOptions(['type' => 'swiper', 'category' => 'miscellaneous', 'template' => 'content_element/swiper', 'method' => NULL, 'renderer' => NULL, 'nestedFragments' => true, 'priority' => 0, 'debugController' => 'Contao\\CoreBundle\\Controller\\ContentElement\\SwiperController']);
        $instance->setContainer($a);

        return $instance;
    }
}