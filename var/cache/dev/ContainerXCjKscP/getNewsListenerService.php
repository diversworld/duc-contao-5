<?php

namespace ContainerXCjKscP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNewsListenerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'Codefog\NewsCategoriesBundle\EventListener\NewsListener' shared autowired service.
     *
     * @return \Codefog\NewsCategoriesBundle\EventListener\NewsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/codefog/contao-news_categories/src/EventListener/NewsListener.php';

        return $container->services['Codefog\\NewsCategoriesBundle\\EventListener\\NewsListener'] = new \Codefog\NewsCategoriesBundle\EventListener\NewsListener(($container->services['Codefog\\NewsCategoriesBundle\\Criteria\\NewsCriteriaBuilder'] ?? $container->load('getNewsCriteriaBuilderService')));
    }
}