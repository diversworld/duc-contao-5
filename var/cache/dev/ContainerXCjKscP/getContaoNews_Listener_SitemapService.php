<?php

namespace ContainerXCjKscP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContaoNews_Listener_SitemapService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'contao_news.listener.sitemap' shared service.
     *
     * @return \Contao\NewsBundle\EventListener\SitemapListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/news-bundle/src/EventListener/SitemapListener.php';

        $a = ($container->services['security.helper'] ?? self::getSecurity_HelperService($container));

        if (isset($container->privates['contao_news.listener.sitemap'])) {
            return $container->privates['contao_news.listener.sitemap'];
        }
        $b = ($container->services['contao.routing.content_url_generator'] ?? self::getContao_Routing_ContentUrlGeneratorService($container));

        if (isset($container->privates['contao_news.listener.sitemap'])) {
            return $container->privates['contao_news.listener.sitemap'];
        }

        return $container->privates['contao_news.listener.sitemap'] = new \Contao\NewsBundle\EventListener\SitemapListener(($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)), $a, $b);
    }
}