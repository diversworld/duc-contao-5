<?php

namespace ContainerXCjKscP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAltchaService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the private 'Markocupic\ContaoAltchaAntispam\Altcha' shared autowired service.
     *
     * @return \Markocupic\ContaoAltchaAntispam\Altcha
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/markocupic/contao-altcha-antispam/src/Altcha.php';

        return $container->privates['Markocupic\\ContaoAltchaAntispam\\Altcha'] = new \Markocupic\ContaoAltchaAntispam\Altcha(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), '', 'SHA-256', 10000, 100000, 3600);
    }
}