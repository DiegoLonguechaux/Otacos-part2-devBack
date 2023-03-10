<?php

namespace ContainerUoYFyjC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DKFdQXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dKFd_QX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dKFd_QX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'data' => ['privates', '.errored..service_locator.dKFd_QX.App\\Entity\\ProduitsCategorie', NULL, 'Cannot autowire service ".service_locator.dKFd_QX": it references class "App\\Entity\\ProduitsCategorie" but no such service exists.'],
            'pc' => ['privates', 'App\\Repository\\ProduitsCategorieRepository', 'getProduitsCategorieRepositoryService', true],
        ], [
            'data' => 'App\\Entity\\ProduitsCategorie',
            'pc' => 'App\\Repository\\ProduitsCategorieRepository',
        ]);
    }
}
