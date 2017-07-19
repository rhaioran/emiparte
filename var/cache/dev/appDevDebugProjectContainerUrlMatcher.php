<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // poa_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'poa_homepage');
            }

            return array (  '_controller' => 'PoaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'poa_homepage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/poa/t')) {
                if (0 === strpos($pathinfo, '/admin/poa/tdepartamentogeo')) {
                    // admin_poa_tdepartamentogeo_list
                    if ($pathinfo === '/admin/poa/tdepartamentogeo/list') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TdepartamentogeoAdminController::listAction',  '_sonata_admin' => 'poa.admin.tdepartamentogeo',  '_sonata_name' => 'admin_poa_tdepartamentogeo_list',  '_route' => 'admin_poa_tdepartamentogeo_list',);
                    }

                    // admin_poa_tdepartamentogeo_create
                    if ($pathinfo === '/admin/poa/tdepartamentogeo/create') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TdepartamentogeoAdminController::createAction',  '_sonata_admin' => 'poa.admin.tdepartamentogeo',  '_sonata_name' => 'admin_poa_tdepartamentogeo_create',  '_route' => 'admin_poa_tdepartamentogeo_create',);
                    }

                    // admin_poa_tdepartamentogeo_batch
                    if ($pathinfo === '/admin/poa/tdepartamentogeo/batch') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TdepartamentogeoAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tdepartamentogeo',  '_sonata_name' => 'admin_poa_tdepartamentogeo_batch',  '_route' => 'admin_poa_tdepartamentogeo_batch',);
                    }

                    // admin_poa_tdepartamentogeo_edit
                    if (preg_match('#^/admin/poa/tdepartamentogeo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tdepartamentogeo_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TdepartamentogeoAdminController::editAction',  '_sonata_admin' => 'poa.admin.tdepartamentogeo',  '_sonata_name' => 'admin_poa_tdepartamentogeo_edit',));
                    }

                    // admin_poa_tdepartamentogeo_delete
                    if (preg_match('#^/admin/poa/tdepartamentogeo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tdepartamentogeo_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TdepartamentogeoAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tdepartamentogeo',  '_sonata_name' => 'admin_poa_tdepartamentogeo_delete',));
                    }

                    // admin_poa_tdepartamentogeo_show
                    if (preg_match('#^/admin/poa/tdepartamentogeo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tdepartamentogeo_show')), array (  '_controller' => 'PoaBundle\\Controller\\TdepartamentogeoAdminController::showAction',  '_sonata_admin' => 'poa.admin.tdepartamentogeo',  '_sonata_name' => 'admin_poa_tdepartamentogeo_show',));
                    }

                    // admin_poa_tdepartamentogeo_export
                    if ($pathinfo === '/admin/poa/tdepartamentogeo/export') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TdepartamentogeoAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tdepartamentogeo',  '_sonata_name' => 'admin_poa_tdepartamentogeo_export',  '_route' => 'admin_poa_tdepartamentogeo_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/poa/tunidad')) {
                    // admin_poa_tunidad_list
                    if ($pathinfo === '/admin/poa/tunidad/list') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TunidadAdminController::listAction',  '_sonata_admin' => 'poa.admin.tunidad',  '_sonata_name' => 'admin_poa_tunidad_list',  '_route' => 'admin_poa_tunidad_list',);
                    }

                    // admin_poa_tunidad_create
                    if ($pathinfo === '/admin/poa/tunidad/create') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TunidadAdminController::createAction',  '_sonata_admin' => 'poa.admin.tunidad',  '_sonata_name' => 'admin_poa_tunidad_create',  '_route' => 'admin_poa_tunidad_create',);
                    }

                    // admin_poa_tunidad_batch
                    if ($pathinfo === '/admin/poa/tunidad/batch') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TunidadAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tunidad',  '_sonata_name' => 'admin_poa_tunidad_batch',  '_route' => 'admin_poa_tunidad_batch',);
                    }

                    // admin_poa_tunidad_edit
                    if (preg_match('#^/admin/poa/tunidad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tunidad_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TunidadAdminController::editAction',  '_sonata_admin' => 'poa.admin.tunidad',  '_sonata_name' => 'admin_poa_tunidad_edit',));
                    }

                    // admin_poa_tunidad_delete
                    if (preg_match('#^/admin/poa/tunidad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tunidad_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TunidadAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tunidad',  '_sonata_name' => 'admin_poa_tunidad_delete',));
                    }

                    // admin_poa_tunidad_show
                    if (preg_match('#^/admin/poa/tunidad/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tunidad_show')), array (  '_controller' => 'PoaBundle\\Controller\\TunidadAdminController::showAction',  '_sonata_admin' => 'poa.admin.tunidad',  '_sonata_name' => 'admin_poa_tunidad_show',));
                    }

                    // admin_poa_tunidad_export
                    if ($pathinfo === '/admin/poa/tunidad/export') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TunidadAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tunidad',  '_sonata_name' => 'admin_poa_tunidad_export',  '_route' => 'admin_poa_tunidad_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/poa/tlocacion')) {
                    // admin_poa_tlocacion_list
                    if ($pathinfo === '/admin/poa/tlocacion/list') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TlocacionAdminController::listAction',  '_sonata_admin' => 'poa.admin.tlocacion',  '_sonata_name' => 'admin_poa_tlocacion_list',  '_route' => 'admin_poa_tlocacion_list',);
                    }

                    // admin_poa_tlocacion_create
                    if ($pathinfo === '/admin/poa/tlocacion/create') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TlocacionAdminController::createAction',  '_sonata_admin' => 'poa.admin.tlocacion',  '_sonata_name' => 'admin_poa_tlocacion_create',  '_route' => 'admin_poa_tlocacion_create',);
                    }

                    // admin_poa_tlocacion_batch
                    if ($pathinfo === '/admin/poa/tlocacion/batch') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TlocacionAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tlocacion',  '_sonata_name' => 'admin_poa_tlocacion_batch',  '_route' => 'admin_poa_tlocacion_batch',);
                    }

                    // admin_poa_tlocacion_edit
                    if (preg_match('#^/admin/poa/tlocacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tlocacion_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TlocacionAdminController::editAction',  '_sonata_admin' => 'poa.admin.tlocacion',  '_sonata_name' => 'admin_poa_tlocacion_edit',));
                    }

                    // admin_poa_tlocacion_delete
                    if (preg_match('#^/admin/poa/tlocacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tlocacion_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TlocacionAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tlocacion',  '_sonata_name' => 'admin_poa_tlocacion_delete',));
                    }

                    // admin_poa_tlocacion_show
                    if (preg_match('#^/admin/poa/tlocacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tlocacion_show')), array (  '_controller' => 'PoaBundle\\Controller\\TlocacionAdminController::showAction',  '_sonata_admin' => 'poa.admin.tlocacion',  '_sonata_name' => 'admin_poa_tlocacion_show',));
                    }

                    // admin_poa_tlocacion_export
                    if ($pathinfo === '/admin/poa/tlocacion/export') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TlocacionAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tlocacion',  '_sonata_name' => 'admin_poa_tlocacion_export',  '_route' => 'admin_poa_tlocacion_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/poa/ttiposarea')) {
                    // admin_poa_ttiposarea_list
                    if ($pathinfo === '/admin/poa/ttiposarea/list') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TtiposareaAdminController::listAction',  '_sonata_admin' => 'poa.admin.ttiposarea',  '_sonata_name' => 'admin_poa_ttiposarea_list',  '_route' => 'admin_poa_ttiposarea_list',);
                    }

                    // admin_poa_ttiposarea_create
                    if ($pathinfo === '/admin/poa/ttiposarea/create') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TtiposareaAdminController::createAction',  '_sonata_admin' => 'poa.admin.ttiposarea',  '_sonata_name' => 'admin_poa_ttiposarea_create',  '_route' => 'admin_poa_ttiposarea_create',);
                    }

                    // admin_poa_ttiposarea_batch
                    if ($pathinfo === '/admin/poa/ttiposarea/batch') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TtiposareaAdminController::batchAction',  '_sonata_admin' => 'poa.admin.ttiposarea',  '_sonata_name' => 'admin_poa_ttiposarea_batch',  '_route' => 'admin_poa_ttiposarea_batch',);
                    }

                    // admin_poa_ttiposarea_edit
                    if (preg_match('#^/admin/poa/ttiposarea/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_ttiposarea_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TtiposareaAdminController::editAction',  '_sonata_admin' => 'poa.admin.ttiposarea',  '_sonata_name' => 'admin_poa_ttiposarea_edit',));
                    }

                    // admin_poa_ttiposarea_delete
                    if (preg_match('#^/admin/poa/ttiposarea/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_ttiposarea_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TtiposareaAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.ttiposarea',  '_sonata_name' => 'admin_poa_ttiposarea_delete',));
                    }

                    // admin_poa_ttiposarea_show
                    if (preg_match('#^/admin/poa/ttiposarea/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_ttiposarea_show')), array (  '_controller' => 'PoaBundle\\Controller\\TtiposareaAdminController::showAction',  '_sonata_admin' => 'poa.admin.ttiposarea',  '_sonata_name' => 'admin_poa_ttiposarea_show',));
                    }

                    // admin_poa_ttiposarea_export
                    if ($pathinfo === '/admin/poa/ttiposarea/export') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TtiposareaAdminController::exportAction',  '_sonata_admin' => 'poa.admin.ttiposarea',  '_sonata_name' => 'admin_poa_ttiposarea_export',  '_route' => 'admin_poa_ttiposarea_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/poa/tarea')) {
                    // admin_poa_tarea_list
                    if ($pathinfo === '/admin/poa/tarea/list') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TareaAdminController::listAction',  '_sonata_admin' => 'poa.admin.tarea',  '_sonata_name' => 'admin_poa_tarea_list',  '_route' => 'admin_poa_tarea_list',);
                    }

                    // admin_poa_tarea_create
                    if ($pathinfo === '/admin/poa/tarea/create') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TareaAdminController::createAction',  '_sonata_admin' => 'poa.admin.tarea',  '_sonata_name' => 'admin_poa_tarea_create',  '_route' => 'admin_poa_tarea_create',);
                    }

                    // admin_poa_tarea_batch
                    if ($pathinfo === '/admin/poa/tarea/batch') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TareaAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tarea',  '_sonata_name' => 'admin_poa_tarea_batch',  '_route' => 'admin_poa_tarea_batch',);
                    }

                    // admin_poa_tarea_edit
                    if (preg_match('#^/admin/poa/tarea/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tarea_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TareaAdminController::editAction',  '_sonata_admin' => 'poa.admin.tarea',  '_sonata_name' => 'admin_poa_tarea_edit',));
                    }

                    // admin_poa_tarea_delete
                    if (preg_match('#^/admin/poa/tarea/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tarea_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TareaAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tarea',  '_sonata_name' => 'admin_poa_tarea_delete',));
                    }

                    // admin_poa_tarea_show
                    if (preg_match('#^/admin/poa/tarea/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tarea_show')), array (  '_controller' => 'PoaBundle\\Controller\\TareaAdminController::showAction',  '_sonata_admin' => 'poa.admin.tarea',  '_sonata_name' => 'admin_poa_tarea_show',));
                    }

                    // admin_poa_tarea_export
                    if ($pathinfo === '/admin/poa/tarea/export') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TareaAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tarea',  '_sonata_name' => 'admin_poa_tarea_export',  '_route' => 'admin_poa_tarea_export',);
                    }

                    // admin_poa_tarea_tsubareas_list
                    if (preg_match('#^/admin/poa/tarea/(?P<id>[^/]++)/tsubareas/list$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tarea_tsubareas_list')), array (  '_controller' => 'PoaBundle\\Controller\\TsubareasAdminController::listAction',  '_sonata_admin' => 'poa.admin.tarea|poa.admin.tsubareas',  '_sonata_name' => 'admin_poa_tarea_tsubareas_list',));
                    }

                    // admin_poa_tarea_tsubareas_create
                    if (preg_match('#^/admin/poa/tarea/(?P<id>[^/]++)/tsubareas/create$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tarea_tsubareas_create')), array (  '_controller' => 'PoaBundle\\Controller\\TsubareasAdminController::createAction',  '_sonata_admin' => 'poa.admin.tarea|poa.admin.tsubareas',  '_sonata_name' => 'admin_poa_tarea_tsubareas_create',));
                    }

                    // admin_poa_tarea_tsubareas_batch
                    if (preg_match('#^/admin/poa/tarea/(?P<id>[^/]++)/tsubareas/batch$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tarea_tsubareas_batch')), array (  '_controller' => 'PoaBundle\\Controller\\TsubareasAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tarea|poa.admin.tsubareas',  '_sonata_name' => 'admin_poa_tarea_tsubareas_batch',));
                    }

                    // admin_poa_tarea_tsubareas_edit
                    if (preg_match('#^/admin/poa/tarea/(?P<id>[^/]++)/tsubareas/(?P<childId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tarea_tsubareas_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TsubareasAdminController::editAction',  '_sonata_admin' => 'poa.admin.tarea|poa.admin.tsubareas',  '_sonata_name' => 'admin_poa_tarea_tsubareas_edit',));
                    }

                    // admin_poa_tarea_tsubareas_delete
                    if (preg_match('#^/admin/poa/tarea/(?P<id>[^/]++)/tsubareas/(?P<childId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tarea_tsubareas_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TsubareasAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tarea|poa.admin.tsubareas',  '_sonata_name' => 'admin_poa_tarea_tsubareas_delete',));
                    }

                    // admin_poa_tarea_tsubareas_show
                    if (preg_match('#^/admin/poa/tarea/(?P<id>[^/]++)/tsubareas/(?P<childId>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tarea_tsubareas_show')), array (  '_controller' => 'PoaBundle\\Controller\\TsubareasAdminController::showAction',  '_sonata_admin' => 'poa.admin.tarea|poa.admin.tsubareas',  '_sonata_name' => 'admin_poa_tarea_tsubareas_show',));
                    }

                    // admin_poa_tarea_tsubareas_export
                    if (preg_match('#^/admin/poa/tarea/(?P<id>[^/]++)/tsubareas/export$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tarea_tsubareas_export')), array (  '_controller' => 'PoaBundle\\Controller\\TsubareasAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tarea|poa.admin.tsubareas',  '_sonata_name' => 'admin_poa_tarea_tsubareas_export',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/poa/tsubareas')) {
                    // admin_poa_tsubareas_list
                    if ($pathinfo === '/admin/poa/tsubareas/list') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TsubareasAdminController::listAction',  '_sonata_admin' => 'poa.admin.tsubareas',  '_sonata_name' => 'admin_poa_tsubareas_list',  '_route' => 'admin_poa_tsubareas_list',);
                    }

                    // admin_poa_tsubareas_create
                    if ($pathinfo === '/admin/poa/tsubareas/create') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TsubareasAdminController::createAction',  '_sonata_admin' => 'poa.admin.tsubareas',  '_sonata_name' => 'admin_poa_tsubareas_create',  '_route' => 'admin_poa_tsubareas_create',);
                    }

                    // admin_poa_tsubareas_batch
                    if ($pathinfo === '/admin/poa/tsubareas/batch') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TsubareasAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tsubareas',  '_sonata_name' => 'admin_poa_tsubareas_batch',  '_route' => 'admin_poa_tsubareas_batch',);
                    }

                    // admin_poa_tsubareas_edit
                    if (preg_match('#^/admin/poa/tsubareas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tsubareas_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TsubareasAdminController::editAction',  '_sonata_admin' => 'poa.admin.tsubareas',  '_sonata_name' => 'admin_poa_tsubareas_edit',));
                    }

                    // admin_poa_tsubareas_delete
                    if (preg_match('#^/admin/poa/tsubareas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tsubareas_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TsubareasAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tsubareas',  '_sonata_name' => 'admin_poa_tsubareas_delete',));
                    }

                    // admin_poa_tsubareas_show
                    if (preg_match('#^/admin/poa/tsubareas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tsubareas_show')), array (  '_controller' => 'PoaBundle\\Controller\\TsubareasAdminController::showAction',  '_sonata_admin' => 'poa.admin.tsubareas',  '_sonata_name' => 'admin_poa_tsubareas_show',));
                    }

                    // admin_poa_tsubareas_export
                    if ($pathinfo === '/admin/poa/tsubareas/export') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TsubareasAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tsubareas',  '_sonata_name' => 'admin_poa_tsubareas_export',  '_route' => 'admin_poa_tsubareas_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/poa/tfuerza')) {
                    // admin_poa_tfuerza_list
                    if ($pathinfo === '/admin/poa/tfuerza/list') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TfuerzaAdminController::listAction',  '_sonata_admin' => 'poa.admin.tfuerza',  '_sonata_name' => 'admin_poa_tfuerza_list',  '_route' => 'admin_poa_tfuerza_list',);
                    }

                    // admin_poa_tfuerza_create
                    if ($pathinfo === '/admin/poa/tfuerza/create') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TfuerzaAdminController::createAction',  '_sonata_admin' => 'poa.admin.tfuerza',  '_sonata_name' => 'admin_poa_tfuerza_create',  '_route' => 'admin_poa_tfuerza_create',);
                    }

                    // admin_poa_tfuerza_batch
                    if ($pathinfo === '/admin/poa/tfuerza/batch') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TfuerzaAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tfuerza',  '_sonata_name' => 'admin_poa_tfuerza_batch',  '_route' => 'admin_poa_tfuerza_batch',);
                    }

                    // admin_poa_tfuerza_edit
                    if (preg_match('#^/admin/poa/tfuerza/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tfuerza_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TfuerzaAdminController::editAction',  '_sonata_admin' => 'poa.admin.tfuerza',  '_sonata_name' => 'admin_poa_tfuerza_edit',));
                    }

                    // admin_poa_tfuerza_delete
                    if (preg_match('#^/admin/poa/tfuerza/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tfuerza_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TfuerzaAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tfuerza',  '_sonata_name' => 'admin_poa_tfuerza_delete',));
                    }

                    // admin_poa_tfuerza_show
                    if (preg_match('#^/admin/poa/tfuerza/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tfuerza_show')), array (  '_controller' => 'PoaBundle\\Controller\\TfuerzaAdminController::showAction',  '_sonata_admin' => 'poa.admin.tfuerza',  '_sonata_name' => 'admin_poa_tfuerza_show',));
                    }

                    // admin_poa_tfuerza_export
                    if ($pathinfo === '/admin/poa/tfuerza/export') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TfuerzaAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tfuerza',  '_sonata_name' => 'admin_poa_tfuerza_export',  '_route' => 'admin_poa_tfuerza_export',);
                    }

                    // admin_poa_tfuerza_tclgrados_list
                    if (preg_match('#^/admin/poa/tfuerza/(?P<id>[^/]++)/tclgrados/list$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tfuerza_tclgrados_list')), array (  '_controller' => 'PoaBundle\\Controller\\TclgradosAdminController::listAction',  '_sonata_admin' => 'poa.admin.tfuerza|poa.admin.tclgrados',  '_sonata_name' => 'admin_poa_tfuerza_tclgrados_list',));
                    }

                    // admin_poa_tfuerza_tclgrados_create
                    if (preg_match('#^/admin/poa/tfuerza/(?P<id>[^/]++)/tclgrados/create$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tfuerza_tclgrados_create')), array (  '_controller' => 'PoaBundle\\Controller\\TclgradosAdminController::createAction',  '_sonata_admin' => 'poa.admin.tfuerza|poa.admin.tclgrados',  '_sonata_name' => 'admin_poa_tfuerza_tclgrados_create',));
                    }

                    // admin_poa_tfuerza_tclgrados_batch
                    if (preg_match('#^/admin/poa/tfuerza/(?P<id>[^/]++)/tclgrados/batch$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tfuerza_tclgrados_batch')), array (  '_controller' => 'PoaBundle\\Controller\\TclgradosAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tfuerza|poa.admin.tclgrados',  '_sonata_name' => 'admin_poa_tfuerza_tclgrados_batch',));
                    }

                    // admin_poa_tfuerza_tclgrados_edit
                    if (preg_match('#^/admin/poa/tfuerza/(?P<id>[^/]++)/tclgrados/(?P<childId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tfuerza_tclgrados_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TclgradosAdminController::editAction',  '_sonata_admin' => 'poa.admin.tfuerza|poa.admin.tclgrados',  '_sonata_name' => 'admin_poa_tfuerza_tclgrados_edit',));
                    }

                    // admin_poa_tfuerza_tclgrados_delete
                    if (preg_match('#^/admin/poa/tfuerza/(?P<id>[^/]++)/tclgrados/(?P<childId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tfuerza_tclgrados_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TclgradosAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tfuerza|poa.admin.tclgrados',  '_sonata_name' => 'admin_poa_tfuerza_tclgrados_delete',));
                    }

                    // admin_poa_tfuerza_tclgrados_show
                    if (preg_match('#^/admin/poa/tfuerza/(?P<id>[^/]++)/tclgrados/(?P<childId>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tfuerza_tclgrados_show')), array (  '_controller' => 'PoaBundle\\Controller\\TclgradosAdminController::showAction',  '_sonata_admin' => 'poa.admin.tfuerza|poa.admin.tclgrados',  '_sonata_name' => 'admin_poa_tfuerza_tclgrados_show',));
                    }

                    // admin_poa_tfuerza_tclgrados_export
                    if (preg_match('#^/admin/poa/tfuerza/(?P<id>[^/]++)/tclgrados/export$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tfuerza_tclgrados_export')), array (  '_controller' => 'PoaBundle\\Controller\\TclgradosAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tfuerza|poa.admin.tclgrados',  '_sonata_name' => 'admin_poa_tfuerza_tclgrados_export',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/poa/tclgrados')) {
                    // admin_poa_tclgrados_list
                    if ($pathinfo === '/admin/poa/tclgrados/list') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TclgradosAdminController::listAction',  '_sonata_admin' => 'poa.admin.tclgrados',  '_sonata_name' => 'admin_poa_tclgrados_list',  '_route' => 'admin_poa_tclgrados_list',);
                    }

                    // admin_poa_tclgrados_create
                    if ($pathinfo === '/admin/poa/tclgrados/create') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TclgradosAdminController::createAction',  '_sonata_admin' => 'poa.admin.tclgrados',  '_sonata_name' => 'admin_poa_tclgrados_create',  '_route' => 'admin_poa_tclgrados_create',);
                    }

                    // admin_poa_tclgrados_batch
                    if ($pathinfo === '/admin/poa/tclgrados/batch') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TclgradosAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tclgrados',  '_sonata_name' => 'admin_poa_tclgrados_batch',  '_route' => 'admin_poa_tclgrados_batch',);
                    }

                    // admin_poa_tclgrados_edit
                    if (preg_match('#^/admin/poa/tclgrados/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tclgrados_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TclgradosAdminController::editAction',  '_sonata_admin' => 'poa.admin.tclgrados',  '_sonata_name' => 'admin_poa_tclgrados_edit',));
                    }

                    // admin_poa_tclgrados_delete
                    if (preg_match('#^/admin/poa/tclgrados/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tclgrados_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TclgradosAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tclgrados',  '_sonata_name' => 'admin_poa_tclgrados_delete',));
                    }

                    // admin_poa_tclgrados_show
                    if (preg_match('#^/admin/poa/tclgrados/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tclgrados_show')), array (  '_controller' => 'PoaBundle\\Controller\\TclgradosAdminController::showAction',  '_sonata_admin' => 'poa.admin.tclgrados',  '_sonata_name' => 'admin_poa_tclgrados_show',));
                    }

                    // admin_poa_tclgrados_export
                    if ($pathinfo === '/admin/poa/tclgrados/export') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TclgradosAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tclgrados',  '_sonata_name' => 'admin_poa_tclgrados_export',  '_route' => 'admin_poa_tclgrados_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/poa/ttipopersona')) {
                    // admin_poa_ttipopersona_list
                    if ($pathinfo === '/admin/poa/ttipopersona/list') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TtipopersonaAdminController::listAction',  '_sonata_admin' => 'poa.admin.ttipopersona',  '_sonata_name' => 'admin_poa_ttipopersona_list',  '_route' => 'admin_poa_ttipopersona_list',);
                    }

                    // admin_poa_ttipopersona_create
                    if ($pathinfo === '/admin/poa/ttipopersona/create') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TtipopersonaAdminController::createAction',  '_sonata_admin' => 'poa.admin.ttipopersona',  '_sonata_name' => 'admin_poa_ttipopersona_create',  '_route' => 'admin_poa_ttipopersona_create',);
                    }

                    // admin_poa_ttipopersona_batch
                    if ($pathinfo === '/admin/poa/ttipopersona/batch') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TtipopersonaAdminController::batchAction',  '_sonata_admin' => 'poa.admin.ttipopersona',  '_sonata_name' => 'admin_poa_ttipopersona_batch',  '_route' => 'admin_poa_ttipopersona_batch',);
                    }

                    // admin_poa_ttipopersona_edit
                    if (preg_match('#^/admin/poa/ttipopersona/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_ttipopersona_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TtipopersonaAdminController::editAction',  '_sonata_admin' => 'poa.admin.ttipopersona',  '_sonata_name' => 'admin_poa_ttipopersona_edit',));
                    }

                    // admin_poa_ttipopersona_delete
                    if (preg_match('#^/admin/poa/ttipopersona/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_ttipopersona_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TtipopersonaAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.ttipopersona',  '_sonata_name' => 'admin_poa_ttipopersona_delete',));
                    }

                    // admin_poa_ttipopersona_show
                    if (preg_match('#^/admin/poa/ttipopersona/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_ttipopersona_show')), array (  '_controller' => 'PoaBundle\\Controller\\TtipopersonaAdminController::showAction',  '_sonata_admin' => 'poa.admin.ttipopersona',  '_sonata_name' => 'admin_poa_ttipopersona_show',));
                    }

                    // admin_poa_ttipopersona_export
                    if ($pathinfo === '/admin/poa/ttipopersona/export') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TtipopersonaAdminController::exportAction',  '_sonata_admin' => 'poa.admin.ttipopersona',  '_sonata_name' => 'admin_poa_ttipopersona_export',  '_route' => 'admin_poa_ttipopersona_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/poa/tgerarquia')) {
                    // admin_poa_tgerarquia_list
                    if ($pathinfo === '/admin/poa/tgerarquia/list') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TgerarquiaAdminController::listAction',  '_sonata_admin' => 'poa.admin.tgerarquia',  '_sonata_name' => 'admin_poa_tgerarquia_list',  '_route' => 'admin_poa_tgerarquia_list',);
                    }

                    // admin_poa_tgerarquia_create
                    if ($pathinfo === '/admin/poa/tgerarquia/create') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TgerarquiaAdminController::createAction',  '_sonata_admin' => 'poa.admin.tgerarquia',  '_sonata_name' => 'admin_poa_tgerarquia_create',  '_route' => 'admin_poa_tgerarquia_create',);
                    }

                    // admin_poa_tgerarquia_batch
                    if ($pathinfo === '/admin/poa/tgerarquia/batch') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TgerarquiaAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tgerarquia',  '_sonata_name' => 'admin_poa_tgerarquia_batch',  '_route' => 'admin_poa_tgerarquia_batch',);
                    }

                    // admin_poa_tgerarquia_edit
                    if (preg_match('#^/admin/poa/tgerarquia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tgerarquia_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TgerarquiaAdminController::editAction',  '_sonata_admin' => 'poa.admin.tgerarquia',  '_sonata_name' => 'admin_poa_tgerarquia_edit',));
                    }

                    // admin_poa_tgerarquia_delete
                    if (preg_match('#^/admin/poa/tgerarquia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tgerarquia_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TgerarquiaAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tgerarquia',  '_sonata_name' => 'admin_poa_tgerarquia_delete',));
                    }

                    // admin_poa_tgerarquia_show
                    if (preg_match('#^/admin/poa/tgerarquia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tgerarquia_show')), array (  '_controller' => 'PoaBundle\\Controller\\TgerarquiaAdminController::showAction',  '_sonata_admin' => 'poa.admin.tgerarquia',  '_sonata_name' => 'admin_poa_tgerarquia_show',));
                    }

                    // admin_poa_tgerarquia_export
                    if ($pathinfo === '/admin/poa/tgerarquia/export') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TgerarquiaAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tgerarquia',  '_sonata_name' => 'admin_poa_tgerarquia_export',  '_route' => 'admin_poa_tgerarquia_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/poa/tpersonas')) {
                    // admin_poa_tpersonas_list
                    if ($pathinfo === '/admin/poa/tpersonas/list') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TpersonasAdminController::listAction',  '_sonata_admin' => 'poa.admin.tpersonas',  '_sonata_name' => 'admin_poa_tpersonas_list',  '_route' => 'admin_poa_tpersonas_list',);
                    }

                    // admin_poa_tpersonas_create
                    if ($pathinfo === '/admin/poa/tpersonas/create') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TpersonasAdminController::createAction',  '_sonata_admin' => 'poa.admin.tpersonas',  '_sonata_name' => 'admin_poa_tpersonas_create',  '_route' => 'admin_poa_tpersonas_create',);
                    }

                    // admin_poa_tpersonas_batch
                    if ($pathinfo === '/admin/poa/tpersonas/batch') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TpersonasAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tpersonas',  '_sonata_name' => 'admin_poa_tpersonas_batch',  '_route' => 'admin_poa_tpersonas_batch',);
                    }

                    // admin_poa_tpersonas_edit
                    if (preg_match('#^/admin/poa/tpersonas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tpersonas_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TpersonasAdminController::editAction',  '_sonata_admin' => 'poa.admin.tpersonas',  '_sonata_name' => 'admin_poa_tpersonas_edit',));
                    }

                    // admin_poa_tpersonas_delete
                    if (preg_match('#^/admin/poa/tpersonas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tpersonas_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TpersonasAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tpersonas',  '_sonata_name' => 'admin_poa_tpersonas_delete',));
                    }

                    // admin_poa_tpersonas_show
                    if (preg_match('#^/admin/poa/tpersonas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tpersonas_show')), array (  '_controller' => 'PoaBundle\\Controller\\TpersonasAdminController::showAction',  '_sonata_admin' => 'poa.admin.tpersonas',  '_sonata_name' => 'admin_poa_tpersonas_show',));
                    }

                    // admin_poa_tpersonas_export
                    if ($pathinfo === '/admin/poa/tpersonas/export') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TpersonasAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tpersonas',  '_sonata_name' => 'admin_poa_tpersonas_export',  '_route' => 'admin_poa_tpersonas_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/poa/tconceptoparte')) {
                    // admin_poa_tconceptoparte_list
                    if ($pathinfo === '/admin/poa/tconceptoparte/list') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TconceptoparteAdminController::listAction',  '_sonata_admin' => 'poa.admin.tconceptoparte',  '_sonata_name' => 'admin_poa_tconceptoparte_list',  '_route' => 'admin_poa_tconceptoparte_list',);
                    }

                    // admin_poa_tconceptoparte_create
                    if ($pathinfo === '/admin/poa/tconceptoparte/create') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TconceptoparteAdminController::createAction',  '_sonata_admin' => 'poa.admin.tconceptoparte',  '_sonata_name' => 'admin_poa_tconceptoparte_create',  '_route' => 'admin_poa_tconceptoparte_create',);
                    }

                    // admin_poa_tconceptoparte_batch
                    if ($pathinfo === '/admin/poa/tconceptoparte/batch') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TconceptoparteAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tconceptoparte',  '_sonata_name' => 'admin_poa_tconceptoparte_batch',  '_route' => 'admin_poa_tconceptoparte_batch',);
                    }

                    // admin_poa_tconceptoparte_edit
                    if (preg_match('#^/admin/poa/tconceptoparte/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tconceptoparte_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TconceptoparteAdminController::editAction',  '_sonata_admin' => 'poa.admin.tconceptoparte',  '_sonata_name' => 'admin_poa_tconceptoparte_edit',));
                    }

                    // admin_poa_tconceptoparte_delete
                    if (preg_match('#^/admin/poa/tconceptoparte/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tconceptoparte_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TconceptoparteAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tconceptoparte',  '_sonata_name' => 'admin_poa_tconceptoparte_delete',));
                    }

                    // admin_poa_tconceptoparte_show
                    if (preg_match('#^/admin/poa/tconceptoparte/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tconceptoparte_show')), array (  '_controller' => 'PoaBundle\\Controller\\TconceptoparteAdminController::showAction',  '_sonata_admin' => 'poa.admin.tconceptoparte',  '_sonata_name' => 'admin_poa_tconceptoparte_show',));
                    }

                    // admin_poa_tconceptoparte_export
                    if ($pathinfo === '/admin/poa/tconceptoparte/export') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TconceptoparteAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tconceptoparte',  '_sonata_name' => 'admin_poa_tconceptoparte_export',  '_route' => 'admin_poa_tconceptoparte_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/poa/tmodeloparte')) {
                    // admin_poa_tmodeloparte_list
                    if ($pathinfo === '/admin/poa/tmodeloparte/list') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TmodeloparteAdminController::listAction',  '_sonata_admin' => 'poa.admin.tmodeloparte',  '_sonata_name' => 'admin_poa_tmodeloparte_list',  '_route' => 'admin_poa_tmodeloparte_list',);
                    }

                    // admin_poa_tmodeloparte_create
                    if ($pathinfo === '/admin/poa/tmodeloparte/create') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TmodeloparteAdminController::createAction',  '_sonata_admin' => 'poa.admin.tmodeloparte',  '_sonata_name' => 'admin_poa_tmodeloparte_create',  '_route' => 'admin_poa_tmodeloparte_create',);
                    }

                    // admin_poa_tmodeloparte_batch
                    if ($pathinfo === '/admin/poa/tmodeloparte/batch') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TmodeloparteAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tmodeloparte',  '_sonata_name' => 'admin_poa_tmodeloparte_batch',  '_route' => 'admin_poa_tmodeloparte_batch',);
                    }

                    // admin_poa_tmodeloparte_edit
                    if (preg_match('#^/admin/poa/tmodeloparte/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tmodeloparte_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TmodeloparteAdminController::editAction',  '_sonata_admin' => 'poa.admin.tmodeloparte',  '_sonata_name' => 'admin_poa_tmodeloparte_edit',));
                    }

                    // admin_poa_tmodeloparte_delete
                    if (preg_match('#^/admin/poa/tmodeloparte/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tmodeloparte_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TmodeloparteAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tmodeloparte',  '_sonata_name' => 'admin_poa_tmodeloparte_delete',));
                    }

                    // admin_poa_tmodeloparte_show
                    if (preg_match('#^/admin/poa/tmodeloparte/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tmodeloparte_show')), array (  '_controller' => 'PoaBundle\\Controller\\TmodeloparteAdminController::showAction',  '_sonata_admin' => 'poa.admin.tmodeloparte',  '_sonata_name' => 'admin_poa_tmodeloparte_show',));
                    }

                    // admin_poa_tmodeloparte_export
                    if ($pathinfo === '/admin/poa/tmodeloparte/export') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TmodeloparteAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tmodeloparte',  '_sonata_name' => 'admin_poa_tmodeloparte_export',  '_route' => 'admin_poa_tmodeloparte_export',);
                    }

                    if (0 === strpos($pathinfo, '/admin/poa/tmodeloparteconp')) {
                        // admin_poa_tmodeloparteconp_list
                        if ($pathinfo === '/admin/poa/tmodeloparteconp/list') {
                            return array (  '_controller' => 'PoaBundle\\Controller\\TmodeloparteconpAdminController::listAction',  '_sonata_admin' => 'poa.admin.tmodeloparteconp',  '_sonata_name' => 'admin_poa_tmodeloparteconp_list',  '_route' => 'admin_poa_tmodeloparteconp_list',);
                        }

                        // admin_poa_tmodeloparteconp_create
                        if ($pathinfo === '/admin/poa/tmodeloparteconp/create') {
                            return array (  '_controller' => 'PoaBundle\\Controller\\TmodeloparteconpAdminController::createAction',  '_sonata_admin' => 'poa.admin.tmodeloparteconp',  '_sonata_name' => 'admin_poa_tmodeloparteconp_create',  '_route' => 'admin_poa_tmodeloparteconp_create',);
                        }

                        // admin_poa_tmodeloparteconp_batch
                        if ($pathinfo === '/admin/poa/tmodeloparteconp/batch') {
                            return array (  '_controller' => 'PoaBundle\\Controller\\TmodeloparteconpAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tmodeloparteconp',  '_sonata_name' => 'admin_poa_tmodeloparteconp_batch',  '_route' => 'admin_poa_tmodeloparteconp_batch',);
                        }

                        // admin_poa_tmodeloparteconp_edit
                        if (preg_match('#^/admin/poa/tmodeloparteconp/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tmodeloparteconp_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TmodeloparteconpAdminController::editAction',  '_sonata_admin' => 'poa.admin.tmodeloparteconp',  '_sonata_name' => 'admin_poa_tmodeloparteconp_edit',));
                        }

                        // admin_poa_tmodeloparteconp_delete
                        if (preg_match('#^/admin/poa/tmodeloparteconp/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tmodeloparteconp_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TmodeloparteconpAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tmodeloparteconp',  '_sonata_name' => 'admin_poa_tmodeloparteconp_delete',));
                        }

                        // admin_poa_tmodeloparteconp_show
                        if (preg_match('#^/admin/poa/tmodeloparteconp/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tmodeloparteconp_show')), array (  '_controller' => 'PoaBundle\\Controller\\TmodeloparteconpAdminController::showAction',  '_sonata_admin' => 'poa.admin.tmodeloparteconp',  '_sonata_name' => 'admin_poa_tmodeloparteconp_show',));
                        }

                        // admin_poa_tmodeloparteconp_export
                        if ($pathinfo === '/admin/poa/tmodeloparteconp/export') {
                            return array (  '_controller' => 'PoaBundle\\Controller\\TmodeloparteconpAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tmodeloparteconp',  '_sonata_name' => 'admin_poa_tmodeloparteconp_export',  '_route' => 'admin_poa_tmodeloparteconp_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/poa/ttipoparte')) {
                    // admin_poa_ttipoparte_list
                    if ($pathinfo === '/admin/poa/ttipoparte/list') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TtipoparteAdminController::listAction',  '_sonata_admin' => 'poa.admin.ttipoparte',  '_sonata_name' => 'admin_poa_ttipoparte_list',  '_route' => 'admin_poa_ttipoparte_list',);
                    }

                    // admin_poa_ttipoparte_create
                    if ($pathinfo === '/admin/poa/ttipoparte/create') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TtipoparteAdminController::createAction',  '_sonata_admin' => 'poa.admin.ttipoparte',  '_sonata_name' => 'admin_poa_ttipoparte_create',  '_route' => 'admin_poa_ttipoparte_create',);
                    }

                    // admin_poa_ttipoparte_batch
                    if ($pathinfo === '/admin/poa/ttipoparte/batch') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TtipoparteAdminController::batchAction',  '_sonata_admin' => 'poa.admin.ttipoparte',  '_sonata_name' => 'admin_poa_ttipoparte_batch',  '_route' => 'admin_poa_ttipoparte_batch',);
                    }

                    // admin_poa_ttipoparte_edit
                    if (preg_match('#^/admin/poa/ttipoparte/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_ttipoparte_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TtipoparteAdminController::editAction',  '_sonata_admin' => 'poa.admin.ttipoparte',  '_sonata_name' => 'admin_poa_ttipoparte_edit',));
                    }

                    // admin_poa_ttipoparte_delete
                    if (preg_match('#^/admin/poa/ttipoparte/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_ttipoparte_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TtipoparteAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.ttipoparte',  '_sonata_name' => 'admin_poa_ttipoparte_delete',));
                    }

                    // admin_poa_ttipoparte_show
                    if (preg_match('#^/admin/poa/ttipoparte/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_ttipoparte_show')), array (  '_controller' => 'PoaBundle\\Controller\\TtipoparteAdminController::showAction',  '_sonata_admin' => 'poa.admin.ttipoparte',  '_sonata_name' => 'admin_poa_ttipoparte_show',));
                    }

                    // admin_poa_ttipoparte_export
                    if ($pathinfo === '/admin/poa/ttipoparte/export') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TtipoparteAdminController::exportAction',  '_sonata_admin' => 'poa.admin.ttipoparte',  '_sonata_name' => 'admin_poa_ttipoparte_export',  '_route' => 'admin_poa_ttipoparte_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/poa/tparte')) {
                    if (0 === strpos($pathinfo, '/admin/poa/tpartearea')) {
                        // admin_poa_tpartearea_list
                        if ($pathinfo === '/admin/poa/tpartearea/list') {
                            return array (  '_controller' => 'PoaBundle\\Controller\\TparteareaAdminController::listAction',  '_sonata_admin' => 'poa.admin.tpartearea',  '_sonata_name' => 'admin_poa_tpartearea_list',  '_route' => 'admin_poa_tpartearea_list',);
                        }

                        // admin_poa_tpartearea_create
                        if ($pathinfo === '/admin/poa/tpartearea/create') {
                            return array (  '_controller' => 'PoaBundle\\Controller\\TparteareaAdminController::createAction',  '_sonata_admin' => 'poa.admin.tpartearea',  '_sonata_name' => 'admin_poa_tpartearea_create',  '_route' => 'admin_poa_tpartearea_create',);
                        }

                        // admin_poa_tpartearea_batch
                        if ($pathinfo === '/admin/poa/tpartearea/batch') {
                            return array (  '_controller' => 'PoaBundle\\Controller\\TparteareaAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tpartearea',  '_sonata_name' => 'admin_poa_tpartearea_batch',  '_route' => 'admin_poa_tpartearea_batch',);
                        }

                        // admin_poa_tpartearea_edit
                        if (preg_match('#^/admin/poa/tpartearea/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tpartearea_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TparteareaAdminController::editAction',  '_sonata_admin' => 'poa.admin.tpartearea',  '_sonata_name' => 'admin_poa_tpartearea_edit',));
                        }

                        // admin_poa_tpartearea_delete
                        if (preg_match('#^/admin/poa/tpartearea/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tpartearea_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TparteareaAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tpartearea',  '_sonata_name' => 'admin_poa_tpartearea_delete',));
                        }

                        // admin_poa_tpartearea_show
                        if (preg_match('#^/admin/poa/tpartearea/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tpartearea_show')), array (  '_controller' => 'PoaBundle\\Controller\\TparteareaAdminController::showAction',  '_sonata_admin' => 'poa.admin.tpartearea',  '_sonata_name' => 'admin_poa_tpartearea_show',));
                        }

                        // admin_poa_tpartearea_export
                        if ($pathinfo === '/admin/poa/tpartearea/export') {
                            return array (  '_controller' => 'PoaBundle\\Controller\\TparteareaAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tpartearea',  '_sonata_name' => 'admin_poa_tpartearea_export',  '_route' => 'admin_poa_tpartearea_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/poa/tpartesubarea')) {
                        // admin_poa_tpartesubarea_list
                        if ($pathinfo === '/admin/poa/tpartesubarea/list') {
                            return array (  '_controller' => 'PoaBundle\\Controller\\TpartesubareaAdminController::listAction',  '_sonata_admin' => 'poa.admin.tpartesubarea',  '_sonata_name' => 'admin_poa_tpartesubarea_list',  '_route' => 'admin_poa_tpartesubarea_list',);
                        }

                        // admin_poa_tpartesubarea_create
                        if ($pathinfo === '/admin/poa/tpartesubarea/create') {
                            return array (  '_controller' => 'PoaBundle\\Controller\\TpartesubareaAdminController::createAction',  '_sonata_admin' => 'poa.admin.tpartesubarea',  '_sonata_name' => 'admin_poa_tpartesubarea_create',  '_route' => 'admin_poa_tpartesubarea_create',);
                        }

                        // admin_poa_tpartesubarea_batch
                        if ($pathinfo === '/admin/poa/tpartesubarea/batch') {
                            return array (  '_controller' => 'PoaBundle\\Controller\\TpartesubareaAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tpartesubarea',  '_sonata_name' => 'admin_poa_tpartesubarea_batch',  '_route' => 'admin_poa_tpartesubarea_batch',);
                        }

                        // admin_poa_tpartesubarea_edit
                        if (preg_match('#^/admin/poa/tpartesubarea/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tpartesubarea_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TpartesubareaAdminController::editAction',  '_sonata_admin' => 'poa.admin.tpartesubarea',  '_sonata_name' => 'admin_poa_tpartesubarea_edit',));
                        }

                        // admin_poa_tpartesubarea_delete
                        if (preg_match('#^/admin/poa/tpartesubarea/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tpartesubarea_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TpartesubareaAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tpartesubarea',  '_sonata_name' => 'admin_poa_tpartesubarea_delete',));
                        }

                        // admin_poa_tpartesubarea_show
                        if (preg_match('#^/admin/poa/tpartesubarea/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tpartesubarea_show')), array (  '_controller' => 'PoaBundle\\Controller\\TpartesubareaAdminController::showAction',  '_sonata_admin' => 'poa.admin.tpartesubarea',  '_sonata_name' => 'admin_poa_tpartesubarea_show',));
                        }

                        // admin_poa_tpartesubarea_export
                        if ($pathinfo === '/admin/poa/tpartesubarea/export') {
                            return array (  '_controller' => 'PoaBundle\\Controller\\TpartesubareaAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tpartesubarea',  '_sonata_name' => 'admin_poa_tpartesubarea_export',  '_route' => 'admin_poa_tpartesubarea_export',);
                        }

                    }

                    // admin_poa_tparte_list
                    if ($pathinfo === '/admin/poa/tparte/list') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TparteAdminController::listAction',  '_sonata_admin' => 'poa.admin.tparte',  '_sonata_name' => 'admin_poa_tparte_list',  '_route' => 'admin_poa_tparte_list',);
                    }

                    // admin_poa_tparte_create
                    if ($pathinfo === '/admin/poa/tparte/create') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TparteAdminController::createAction',  '_sonata_admin' => 'poa.admin.tparte',  '_sonata_name' => 'admin_poa_tparte_create',  '_route' => 'admin_poa_tparte_create',);
                    }

                    // admin_poa_tparte_batch
                    if ($pathinfo === '/admin/poa/tparte/batch') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TparteAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tparte',  '_sonata_name' => 'admin_poa_tparte_batch',  '_route' => 'admin_poa_tparte_batch',);
                    }

                    // admin_poa_tparte_edit
                    if (preg_match('#^/admin/poa/tparte/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tparte_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TparteAdminController::editAction',  '_sonata_admin' => 'poa.admin.tparte',  '_sonata_name' => 'admin_poa_tparte_edit',));
                    }

                    // admin_poa_tparte_delete
                    if (preg_match('#^/admin/poa/tparte/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tparte_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TparteAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tparte',  '_sonata_name' => 'admin_poa_tparte_delete',));
                    }

                    // admin_poa_tparte_show
                    if (preg_match('#^/admin/poa/tparte/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tparte_show')), array (  '_controller' => 'PoaBundle\\Controller\\TparteAdminController::showAction',  '_sonata_admin' => 'poa.admin.tparte',  '_sonata_name' => 'admin_poa_tparte_show',));
                    }

                    // admin_poa_tparte_export
                    if ($pathinfo === '/admin/poa/tparte/export') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TparteAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tparte',  '_sonata_name' => 'admin_poa_tparte_export',  '_route' => 'admin_poa_tparte_export',);
                    }

                    // admin_poa_tparte_tdetalleparte_list
                    if (preg_match('#^/admin/poa/tparte/(?P<id>[^/]++)/tdetalleparte/list$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tparte_tdetalleparte_list')), array (  '_controller' => 'PoaBundle\\Controller\\TdetalleparteAdminController::listAction',  '_sonata_admin' => 'poa.admin.tparte|poa.admin.tdetalleparte',  '_sonata_name' => 'admin_poa_tparte_tdetalleparte_list',));
                    }

                    // admin_poa_tparte_tdetalleparte_create
                    if (preg_match('#^/admin/poa/tparte/(?P<id>[^/]++)/tdetalleparte/create$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tparte_tdetalleparte_create')), array (  '_controller' => 'PoaBundle\\Controller\\TdetalleparteAdminController::createAction',  '_sonata_admin' => 'poa.admin.tparte|poa.admin.tdetalleparte',  '_sonata_name' => 'admin_poa_tparte_tdetalleparte_create',));
                    }

                    // admin_poa_tparte_tdetalleparte_batch
                    if (preg_match('#^/admin/poa/tparte/(?P<id>[^/]++)/tdetalleparte/batch$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tparte_tdetalleparte_batch')), array (  '_controller' => 'PoaBundle\\Controller\\TdetalleparteAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tparte|poa.admin.tdetalleparte',  '_sonata_name' => 'admin_poa_tparte_tdetalleparte_batch',));
                    }

                    // admin_poa_tparte_tdetalleparte_edit
                    if (preg_match('#^/admin/poa/tparte/(?P<id>[^/]++)/tdetalleparte/(?P<childId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tparte_tdetalleparte_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TdetalleparteAdminController::editAction',  '_sonata_admin' => 'poa.admin.tparte|poa.admin.tdetalleparte',  '_sonata_name' => 'admin_poa_tparte_tdetalleparte_edit',));
                    }

                    // admin_poa_tparte_tdetalleparte_delete
                    if (preg_match('#^/admin/poa/tparte/(?P<id>[^/]++)/tdetalleparte/(?P<childId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tparte_tdetalleparte_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TdetalleparteAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tparte|poa.admin.tdetalleparte',  '_sonata_name' => 'admin_poa_tparte_tdetalleparte_delete',));
                    }

                    // admin_poa_tparte_tdetalleparte_show
                    if (preg_match('#^/admin/poa/tparte/(?P<id>[^/]++)/tdetalleparte/(?P<childId>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tparte_tdetalleparte_show')), array (  '_controller' => 'PoaBundle\\Controller\\TdetalleparteAdminController::showAction',  '_sonata_admin' => 'poa.admin.tparte|poa.admin.tdetalleparte',  '_sonata_name' => 'admin_poa_tparte_tdetalleparte_show',));
                    }

                    // admin_poa_tparte_tdetalleparte_export
                    if (preg_match('#^/admin/poa/tparte/(?P<id>[^/]++)/tdetalleparte/export$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tparte_tdetalleparte_export')), array (  '_controller' => 'PoaBundle\\Controller\\TdetalleparteAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tparte|poa.admin.tdetalleparte',  '_sonata_name' => 'admin_poa_tparte_tdetalleparte_export',));
                    }

                    // admin_poa_tparte_tpartepersona_list
                    if (preg_match('#^/admin/poa/tparte/(?P<id>[^/]++)/tpartepersona/list$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tparte_tpartepersona_list')), array (  '_controller' => 'PoaBundle\\Controller\\TpartepersonaAdminController::listAction',  '_sonata_admin' => 'poa.admin.tparte|poa.admin.tpartepersona',  '_sonata_name' => 'admin_poa_tparte_tpartepersona_list',));
                    }

                    // admin_poa_tparte_tpartepersona_create
                    if (preg_match('#^/admin/poa/tparte/(?P<id>[^/]++)/tpartepersona/create$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tparte_tpartepersona_create')), array (  '_controller' => 'PoaBundle\\Controller\\TpartepersonaAdminController::createAction',  '_sonata_admin' => 'poa.admin.tparte|poa.admin.tpartepersona',  '_sonata_name' => 'admin_poa_tparte_tpartepersona_create',));
                    }

                    // admin_poa_tparte_tpartepersona_batch
                    if (preg_match('#^/admin/poa/tparte/(?P<id>[^/]++)/tpartepersona/batch$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tparte_tpartepersona_batch')), array (  '_controller' => 'PoaBundle\\Controller\\TpartepersonaAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tparte|poa.admin.tpartepersona',  '_sonata_name' => 'admin_poa_tparte_tpartepersona_batch',));
                    }

                    // admin_poa_tparte_tpartepersona_edit
                    if (preg_match('#^/admin/poa/tparte/(?P<id>[^/]++)/tpartepersona/(?P<childId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tparte_tpartepersona_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TpartepersonaAdminController::editAction',  '_sonata_admin' => 'poa.admin.tparte|poa.admin.tpartepersona',  '_sonata_name' => 'admin_poa_tparte_tpartepersona_edit',));
                    }

                    // admin_poa_tparte_tpartepersona_delete
                    if (preg_match('#^/admin/poa/tparte/(?P<id>[^/]++)/tpartepersona/(?P<childId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tparte_tpartepersona_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TpartepersonaAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tparte|poa.admin.tpartepersona',  '_sonata_name' => 'admin_poa_tparte_tpartepersona_delete',));
                    }

                    // admin_poa_tparte_tpartepersona_show
                    if (preg_match('#^/admin/poa/tparte/(?P<id>[^/]++)/tpartepersona/(?P<childId>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tparte_tpartepersona_show')), array (  '_controller' => 'PoaBundle\\Controller\\TpartepersonaAdminController::showAction',  '_sonata_admin' => 'poa.admin.tparte|poa.admin.tpartepersona',  '_sonata_name' => 'admin_poa_tparte_tpartepersona_show',));
                    }

                    // admin_poa_tparte_tpartepersona_export
                    if (preg_match('#^/admin/poa/tparte/(?P<id>[^/]++)/tpartepersona/export$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tparte_tpartepersona_export')), array (  '_controller' => 'PoaBundle\\Controller\\TpartepersonaAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tparte|poa.admin.tpartepersona',  '_sonata_name' => 'admin_poa_tparte_tpartepersona_export',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/poa/tdetalleparte')) {
                    // admin_poa_tdetalleparte_list
                    if ($pathinfo === '/admin/poa/tdetalleparte/list') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TdetalleparteAdminController::listAction',  '_sonata_admin' => 'poa.admin.tdetalleparte',  '_sonata_name' => 'admin_poa_tdetalleparte_list',  '_route' => 'admin_poa_tdetalleparte_list',);
                    }

                    // admin_poa_tdetalleparte_create
                    if ($pathinfo === '/admin/poa/tdetalleparte/create') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TdetalleparteAdminController::createAction',  '_sonata_admin' => 'poa.admin.tdetalleparte',  '_sonata_name' => 'admin_poa_tdetalleparte_create',  '_route' => 'admin_poa_tdetalleparte_create',);
                    }

                    // admin_poa_tdetalleparte_batch
                    if ($pathinfo === '/admin/poa/tdetalleparte/batch') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TdetalleparteAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tdetalleparte',  '_sonata_name' => 'admin_poa_tdetalleparte_batch',  '_route' => 'admin_poa_tdetalleparte_batch',);
                    }

                    // admin_poa_tdetalleparte_edit
                    if (preg_match('#^/admin/poa/tdetalleparte/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tdetalleparte_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TdetalleparteAdminController::editAction',  '_sonata_admin' => 'poa.admin.tdetalleparte',  '_sonata_name' => 'admin_poa_tdetalleparte_edit',));
                    }

                    // admin_poa_tdetalleparte_delete
                    if (preg_match('#^/admin/poa/tdetalleparte/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tdetalleparte_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TdetalleparteAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tdetalleparte',  '_sonata_name' => 'admin_poa_tdetalleparte_delete',));
                    }

                    // admin_poa_tdetalleparte_show
                    if (preg_match('#^/admin/poa/tdetalleparte/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tdetalleparte_show')), array (  '_controller' => 'PoaBundle\\Controller\\TdetalleparteAdminController::showAction',  '_sonata_admin' => 'poa.admin.tdetalleparte',  '_sonata_name' => 'admin_poa_tdetalleparte_show',));
                    }

                    // admin_poa_tdetalleparte_export
                    if ($pathinfo === '/admin/poa/tdetalleparte/export') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TdetalleparteAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tdetalleparte',  '_sonata_name' => 'admin_poa_tdetalleparte_export',  '_route' => 'admin_poa_tdetalleparte_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/poa/tpartepersona')) {
                    // admin_poa_tpartepersona_list
                    if ($pathinfo === '/admin/poa/tpartepersona/list') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TpartepersonaAdminController::listAction',  '_sonata_admin' => 'poa.admin.tpartepersona',  '_sonata_name' => 'admin_poa_tpartepersona_list',  '_route' => 'admin_poa_tpartepersona_list',);
                    }

                    // admin_poa_tpartepersona_create
                    if ($pathinfo === '/admin/poa/tpartepersona/create') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TpartepersonaAdminController::createAction',  '_sonata_admin' => 'poa.admin.tpartepersona',  '_sonata_name' => 'admin_poa_tpartepersona_create',  '_route' => 'admin_poa_tpartepersona_create',);
                    }

                    // admin_poa_tpartepersona_batch
                    if ($pathinfo === '/admin/poa/tpartepersona/batch') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TpartepersonaAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tpartepersona',  '_sonata_name' => 'admin_poa_tpartepersona_batch',  '_route' => 'admin_poa_tpartepersona_batch',);
                    }

                    // admin_poa_tpartepersona_edit
                    if (preg_match('#^/admin/poa/tpartepersona/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tpartepersona_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TpartepersonaAdminController::editAction',  '_sonata_admin' => 'poa.admin.tpartepersona',  '_sonata_name' => 'admin_poa_tpartepersona_edit',));
                    }

                    // admin_poa_tpartepersona_delete
                    if (preg_match('#^/admin/poa/tpartepersona/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tpartepersona_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TpartepersonaAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tpartepersona',  '_sonata_name' => 'admin_poa_tpartepersona_delete',));
                    }

                    // admin_poa_tpartepersona_show
                    if (preg_match('#^/admin/poa/tpartepersona/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tpartepersona_show')), array (  '_controller' => 'PoaBundle\\Controller\\TpartepersonaAdminController::showAction',  '_sonata_admin' => 'poa.admin.tpartepersona',  '_sonata_name' => 'admin_poa_tpartepersona_show',));
                    }

                    // admin_poa_tpartepersona_export
                    if ($pathinfo === '/admin/poa/tpartepersona/export') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TpartepersonaAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tpartepersona',  '_sonata_name' => 'admin_poa_tpartepersona_export',  '_route' => 'admin_poa_tpartepersona_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/poa/trespareaparte')) {
                    // admin_poa_trespareaparte_list
                    if ($pathinfo === '/admin/poa/trespareaparte/list') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TrespareaparteAdminController::listAction',  '_sonata_admin' => 'poa.admin.trespareaparte',  '_sonata_name' => 'admin_poa_trespareaparte_list',  '_route' => 'admin_poa_trespareaparte_list',);
                    }

                    // admin_poa_trespareaparte_create
                    if ($pathinfo === '/admin/poa/trespareaparte/create') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TrespareaparteAdminController::createAction',  '_sonata_admin' => 'poa.admin.trespareaparte',  '_sonata_name' => 'admin_poa_trespareaparte_create',  '_route' => 'admin_poa_trespareaparte_create',);
                    }

                    // admin_poa_trespareaparte_batch
                    if ($pathinfo === '/admin/poa/trespareaparte/batch') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TrespareaparteAdminController::batchAction',  '_sonata_admin' => 'poa.admin.trespareaparte',  '_sonata_name' => 'admin_poa_trespareaparte_batch',  '_route' => 'admin_poa_trespareaparte_batch',);
                    }

                    // admin_poa_trespareaparte_edit
                    if (preg_match('#^/admin/poa/trespareaparte/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_trespareaparte_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TrespareaparteAdminController::editAction',  '_sonata_admin' => 'poa.admin.trespareaparte',  '_sonata_name' => 'admin_poa_trespareaparte_edit',));
                    }

                    // admin_poa_trespareaparte_delete
                    if (preg_match('#^/admin/poa/trespareaparte/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_trespareaparte_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TrespareaparteAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.trespareaparte',  '_sonata_name' => 'admin_poa_trespareaparte_delete',));
                    }

                    // admin_poa_trespareaparte_show
                    if (preg_match('#^/admin/poa/trespareaparte/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_trespareaparte_show')), array (  '_controller' => 'PoaBundle\\Controller\\TrespareaparteAdminController::showAction',  '_sonata_admin' => 'poa.admin.trespareaparte',  '_sonata_name' => 'admin_poa_trespareaparte_show',));
                    }

                    // admin_poa_trespareaparte_export
                    if ($pathinfo === '/admin/poa/trespareaparte/export') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TrespareaparteAdminController::exportAction',  '_sonata_admin' => 'poa.admin.trespareaparte',  '_sonata_name' => 'admin_poa_trespareaparte_export',  '_route' => 'admin_poa_trespareaparte_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/poa/tdetalleefectivo')) {
                    // admin_poa_tdetalleefectivo_list
                    if ($pathinfo === '/admin/poa/tdetalleefectivo/list') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TdetalleefectivoAdminController::listAction',  '_sonata_admin' => 'poa.admin.tdetalleefectivo',  '_sonata_name' => 'admin_poa_tdetalleefectivo_list',  '_route' => 'admin_poa_tdetalleefectivo_list',);
                    }

                    // admin_poa_tdetalleefectivo_create
                    if ($pathinfo === '/admin/poa/tdetalleefectivo/create') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TdetalleefectivoAdminController::createAction',  '_sonata_admin' => 'poa.admin.tdetalleefectivo',  '_sonata_name' => 'admin_poa_tdetalleefectivo_create',  '_route' => 'admin_poa_tdetalleefectivo_create',);
                    }

                    // admin_poa_tdetalleefectivo_batch
                    if ($pathinfo === '/admin/poa/tdetalleefectivo/batch') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TdetalleefectivoAdminController::batchAction',  '_sonata_admin' => 'poa.admin.tdetalleefectivo',  '_sonata_name' => 'admin_poa_tdetalleefectivo_batch',  '_route' => 'admin_poa_tdetalleefectivo_batch',);
                    }

                    // admin_poa_tdetalleefectivo_edit
                    if (preg_match('#^/admin/poa/tdetalleefectivo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tdetalleefectivo_edit')), array (  '_controller' => 'PoaBundle\\Controller\\TdetalleefectivoAdminController::editAction',  '_sonata_admin' => 'poa.admin.tdetalleefectivo',  '_sonata_name' => 'admin_poa_tdetalleefectivo_edit',));
                    }

                    // admin_poa_tdetalleefectivo_delete
                    if (preg_match('#^/admin/poa/tdetalleefectivo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tdetalleefectivo_delete')), array (  '_controller' => 'PoaBundle\\Controller\\TdetalleefectivoAdminController::deleteAction',  '_sonata_admin' => 'poa.admin.tdetalleefectivo',  '_sonata_name' => 'admin_poa_tdetalleefectivo_delete',));
                    }

                    // admin_poa_tdetalleefectivo_show
                    if (preg_match('#^/admin/poa/tdetalleefectivo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_poa_tdetalleefectivo_show')), array (  '_controller' => 'PoaBundle\\Controller\\TdetalleefectivoAdminController::showAction',  '_sonata_admin' => 'poa.admin.tdetalleefectivo',  '_sonata_name' => 'admin_poa_tdetalleefectivo_show',));
                    }

                    // admin_poa_tdetalleefectivo_export
                    if ($pathinfo === '/admin/poa/tdetalleefectivo/export') {
                        return array (  '_controller' => 'PoaBundle\\Controller\\TdetalleefectivoAdminController::exportAction',  '_sonata_admin' => 'poa.admin.tdetalleefectivo',  '_sonata_name' => 'admin_poa_tdetalleefectivo_export',  '_route' => 'admin_poa_tdetalleefectivo_export',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
