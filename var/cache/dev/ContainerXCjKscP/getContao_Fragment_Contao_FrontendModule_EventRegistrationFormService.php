<?php

namespace ContainerXCjKscP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContao_Fragment_Contao_FrontendModule_EventRegistrationFormService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'contao.fragment._contao.frontend_module.event_registration_form' shared autowired service.
     *
     * @return \InspiredMinds\ContaoEventRegistration\Controller\FrontendModule\EventRegistrationFormController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Fragment/FragmentOptionsAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/AbstractFragmentController.php';
        include_once \dirname(__DIR__, 4).'/vendor/contao/core-bundle/src/Controller/FrontendModule/AbstractFrontendModuleController.php';
        include_once \dirname(__DIR__, 4).'/vendor/inspiredminds/contao-event-registration/src/Controller/FrontendModule/EventRegistrationFormController.php';

        $container->services['contao.fragment._contao.frontend_module.event_registration_form'] = $instance = new \InspiredMinds\ContaoEventRegistration\Controller\FrontendModule\EventRegistrationFormController(($container->privates['InspiredMinds\\ContaoEventRegistration\\EventRegistration'] ?? $container->load('getEventRegistrationService')));

        $instance->setFragmentOptions(['type' => 'event_registration_form', 'category' => 'events', 'template' => 'mod_event_registration_form', 'debugController' => 'InspiredMinds\\ContaoEventRegistration\\Controller\\FrontendModule\\EventRegistrationFormController']);
        $instance->setContainer(($container->privates['.service_locator..72JI_b'] ?? $container->load('get_ServiceLocator__72JIBService'))->withContext('contao.fragment._contao.frontend_module.event_registration_form', $container));

        return $instance;
    }
}