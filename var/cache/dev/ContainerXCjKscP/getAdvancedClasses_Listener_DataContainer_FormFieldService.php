<?php

namespace ContainerXCjKscP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdvancedClasses_Listener_DataContainer_FormFieldService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'advanced_classes.listener.data_container.form_field' shared service.
     *
     * @return \ContaoDD\AdvancedClassesBundle\EventListener\DataContainer\FormFieldListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao-dd/advanced-classes-bundle/src/EventListener/DataContainer/ListenerHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao-dd/advanced-classes-bundle/src/EventListener/DataContainer/FormFieldListener.php';

        return $container->services['advanced_classes.listener.data_container.form_field'] = new \ContaoDD\AdvancedClassesBundle\EventListener\DataContainer\FormFieldListener(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()));
    }
}