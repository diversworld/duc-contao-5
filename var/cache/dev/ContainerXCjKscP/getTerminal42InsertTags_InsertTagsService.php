<?php

namespace ContainerXCjKscP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTerminal42InsertTags_InsertTagsService extends Contao_ManagerBundle_HttpKernel_ContaoKernelDevDebugContainer
{
    /**
     * Gets the public 'terminal42_insert_tags.insert_tags' shared service.
     *
     * @return \Terminal42\InsertTagsBundle\EventListener\InsertTagsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/terminal42/contao-inserttags/src/EventListener/InsertTagsListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/terminal42/contao-inserttags/src/InsertTagHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/terminal42/contao-inserttags/src/Parser.php';

        return $container->services['terminal42_insert_tags.insert_tags'] = new \Terminal42\InsertTagsBundle\EventListener\InsertTagsListener(new \Terminal42\InsertTagsBundle\InsertTagHandler(($container->services['doctrine.dbal.default_connection'] ?? self::getDoctrine_Dbal_DefaultConnectionService($container)), new \Terminal42\InsertTagsBundle\Parser(($container->services['contao.insert_tag.parser'] ?? $container->load('getContao_InsertTag_ParserService')), ($container->services['contao.string.simple_token_parser'] ?? $container->load('getContao_String_SimpleTokenParserService'))), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->services['security.helper'] ?? self::getSecurity_HelperService($container)), ($container->services['Codefog\\HasteBundle\\Formatter'] ?? $container->load('getFormatterService'))), ($container->services['monolog.logger.contao.error'] ?? self::getMonolog_Logger_Contao_ErrorService($container)));
    }
}