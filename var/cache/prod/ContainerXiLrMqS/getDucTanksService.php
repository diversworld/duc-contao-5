<?php

namespace ContainerXiLrMqS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDucTanksService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'Diversworld\ContaoDucappBundle\DataContainer\DucTanks' shared autowired service.
     *
     * @return \Diversworld\ContaoDucappBundle\DataContainer\DucTanks
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/diversworld/contao-ducapp-bundle/src/DataContainer/DucTanks.php';

        return $container->services['Diversworld\\ContaoDucappBundle\\DataContainer\\DucTanks'] = new \Diversworld\ContaoDucappBundle\DataContainer\DucTanks(($container->services['contao.framework'] ?? self::getContao_FrameworkService($container)));
    }
}