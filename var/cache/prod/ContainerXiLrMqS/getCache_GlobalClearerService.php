<?php

namespace ContainerXiLrMqS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_GlobalClearerService extends Contao_ManagerBundle_HttpKernel_ContaoKernelProdContainer
{
    /*
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $container->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($container->services['cache.app'] ?? $container->load('getCache_AppService')), 'cache.system' => ($container->services['cache.system'] ?? self::getCache_SystemService($container)), 'cache.validator' => ($container->privates['cache.validator'] ?? $container->load('getCache_ValidatorService')), 'cache.annotations' => ($container->privates['cache.annotations'] ?? $container->load('getCache_AnnotationsService')), 'cache.property_info' => ($container->privates['cache.property_info'] ?? $container->load('getCache_PropertyInfoService')), 'cache.messenger.restart_workers_signal' => ($container->privates['cache.messenger.restart_workers_signal'] ?? $container->load('getCache_Messenger_RestartWorkersSignalService')), 'cache.rate_limiter' => ($container->services['cache.rate_limiter'] ?? $container->load('getCache_RateLimiterService')), 'doctrine.result_cache_pool' => ($container->privates['doctrine.result_cache_pool'] ?? self::getDoctrine_ResultCachePoolService($container)), 'doctrine.system_cache_pool' => ($container->privates['doctrine.system_cache_pool'] ?? self::getDoctrine_SystemCachePoolService($container)), 'cache.property_access' => ($container->privates['cache.property_access'] ?? $container->load('getCache_PropertyAccessService')), 'cache.validator_expression_language' => ($container->services['cache.validator_expression_language'] ?? $container->load('getCache_ValidatorExpressionLanguageService')), 'cache.security_expression_language' => ($container->privates['cache.security_expression_language'] ?? $container->load('getCache_SecurityExpressionLanguageService')), 'cache.security_is_granted_attribute_expression_language' => ($container->services['cache.security_is_granted_attribute_expression_language'] ?? self::getCache_SecurityIsGrantedAttributeExpressionLanguageService($container)), 'cache.security_token_verifier' => ($container->privates['cache.security_token_verifier'] ?? $container->load('getCache_SecurityTokenVerifierService'))]);
    }
}