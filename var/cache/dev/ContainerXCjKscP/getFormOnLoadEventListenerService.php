<?php

namespace ContainerXCjKscP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormOnLoadEventListenerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'Cgoit\FormFillPdfBundle\EventListener\DataContainer\FormOnLoadEventListener' shared autowired service.
     *
     * @return \Cgoit\FormFillPdfBundle\EventListener\DataContainer\FormOnLoadEventListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/cgoit/contao-form-fill-pdf-bundle/src/EventListener/DataContainer/FormOnLoadEventListener.php';

        return $container->services['Cgoit\\FormFillPdfBundle\\EventListener\\DataContainer\\FormOnLoadEventListener'] = new \Cgoit\FormFillPdfBundle\EventListener\DataContainer\FormOnLoadEventListener();
    }
}