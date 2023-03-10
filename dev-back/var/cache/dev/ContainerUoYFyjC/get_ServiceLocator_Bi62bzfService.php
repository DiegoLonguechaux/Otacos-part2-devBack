<?php

namespace ContainerUoYFyjC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Bi62bzfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bi62bzf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bi62bzf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.st3ASTR', 'get_ServiceLocator_St3ASTRService', true],
            'App\\Controller\\Admin\\OptionsCrudController::autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\OptionsCrudController::batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\OptionsCrudController::configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\OptionsCrudController::configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\OptionsCrudController::configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\OptionsCrudController::configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\OptionsCrudController::configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\OptionsCrudController::createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\OptionsCrudController::createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\OptionsCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\OptionsCrudController::createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\OptionsCrudController::createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\OptionsCrudController::delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\OptionsCrudController::deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\OptionsCrudController::detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\OptionsCrudController::edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\OptionsCrudController::index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\OptionsCrudController::new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\OptionsCrudController::persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\OptionsCrudController::renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\OptionsCrudController::updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ProduitsCrudController::autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController::batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\ProduitsCrudController::configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController::configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\ProduitsCrudController::configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController::configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\ProduitsCrudController::configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController::createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ProduitsCrudController::createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ProduitsCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController::createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ProduitsCrudController::createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ProduitsCrudController::delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController::deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ProduitsCrudController::detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController::edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController::index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController::new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController::persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ProduitsCrudController::renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController::updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\TacosController::goto' => ['privates', '.service_locator.C.yszV0', 'get_ServiceLocator_C_YszV0Service', true],
            'App\\Controller\\TacosController::renderProduits' => ['privates', '.service_locator._aTt_.U', 'get_ServiceLocator_ATt_UService', true],
            'App\\Controller\\TacosController::renderTacos' => ['privates', '.service_locator.dKFd_QX', 'get_ServiceLocator_DKFdQXService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.st3ASTR', 'get_ServiceLocator_St3ASTRService', true],
            'App\\Controller\\Admin\\OptionsCrudController:autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\OptionsCrudController:batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\OptionsCrudController:configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\OptionsCrudController:configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\OptionsCrudController:configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\OptionsCrudController:configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\OptionsCrudController:configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\OptionsCrudController:createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\OptionsCrudController:createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\OptionsCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\OptionsCrudController:createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\OptionsCrudController:createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\OptionsCrudController:delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\OptionsCrudController:deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\OptionsCrudController:detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\OptionsCrudController:edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\OptionsCrudController:index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\OptionsCrudController:new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\OptionsCrudController:persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\OptionsCrudController:renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\OptionsCrudController:updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ProduitsCrudController:autocomplete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController:batchDelete' => ['privates', '.service_locator.esmk6IF', 'get_ServiceLocator_Esmk6IFService', true],
            'App\\Controller\\Admin\\ProduitsCrudController:configureActions' => ['privates', '.service_locator.R8Qy2_.', 'get_ServiceLocator_R8Qy2_Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController:configureAssets' => ['privates', '.service_locator.XdMPwIJ', 'get_ServiceLocator_XdMPwIJService', true],
            'App\\Controller\\Admin\\ProduitsCrudController:configureCrud' => ['privates', '.service_locator.XpfeRo6', 'get_ServiceLocator_XpfeRo6Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController:configureFilters' => ['privates', '.service_locator.OGjUKCt', 'get_ServiceLocator_OGjUKCtService', true],
            'App\\Controller\\Admin\\ProduitsCrudController:configureResponseParameters' => ['privates', '.service_locator.W.c5h2_', 'get_ServiceLocator_W_C5h2Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController:createEditForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ProduitsCrudController:createEditFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ProduitsCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.ENGuM7_', 'get_ServiceLocator_ENGuM7Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController:createNewForm' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ProduitsCrudController:createNewFormBuilder' => ['privates', '.service_locator.riFbGaB', 'get_ServiceLocator_RiFbGaBService', true],
            'App\\Controller\\Admin\\ProduitsCrudController:delete' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController:deleteEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ProduitsCrudController:detail' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController:edit' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController:index' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController:new' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController:persistEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\Admin\\ProduitsCrudController:renderFilters' => ['privates', '.service_locator.kEvhmk9', 'get_ServiceLocator_KEvhmk9Service', true],
            'App\\Controller\\Admin\\ProduitsCrudController:updateEntity' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\TacosController:goto' => ['privates', '.service_locator.C.yszV0', 'get_ServiceLocator_C_YszV0Service', true],
            'App\\Controller\\TacosController:renderProduits' => ['privates', '.service_locator._aTt_.U', 'get_ServiceLocator_ATt_UService', true],
            'App\\Controller\\TacosController:renderTacos' => ['privates', '.service_locator.dKFd_QX', 'get_ServiceLocator_DKFdQXService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::delete' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::detail' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::edit' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::index' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::new' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\OptionsCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::delete' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::detail' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::edit' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::index' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::new' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::delete' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::detail' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::edit' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::index' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::new' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController::updateEntity' => '?',
            'App\\Controller\\TacosController::goto' => '?',
            'App\\Controller\\TacosController::renderProduits' => '?',
            'App\\Controller\\TacosController::renderTacos' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:delete' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:detail' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:edit' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:index' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:new' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\OptionsCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:delete' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:detail' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:edit' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:index' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:new' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\ProduitsCategorieCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:delete' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:detail' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:edit' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:index' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:new' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\ProduitsCrudController:updateEntity' => '?',
            'App\\Controller\\TacosController:goto' => '?',
            'App\\Controller\\TacosController:renderProduits' => '?',
            'App\\Controller\\TacosController:renderTacos' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}