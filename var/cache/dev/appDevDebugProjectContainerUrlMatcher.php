<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // survey_car_homepage
        if ('/car/home' === $pathinfo) {
            return array (  '_controller' => 'Survey\\CarBundle\\Controller\\DefaultController::indexAction',  '_route' => 'survey_car_homepage',);
        }

        if (0 === strpos($pathinfo, '/car/project')) {
            if (0 === strpos($pathinfo, '/car/project/i')) {
                // survey_car_project
                if ('/car/project/index' === $pathinfo) {
                    return array (  '_controller' => 'Survey\\CarBundle\\Controller\\ProjectController::indexAction',  '_route' => 'survey_car_project',);
                }

                // survey_car_project_insert
                if ('/car/project/insert' === $pathinfo) {
                    return array (  '_controller' => 'Survey\\CarBundle\\Controller\\ProjectController::insertAction',  '_route' => 'survey_car_project_insert',);
                }

                // survey_car_project_import
                if ('/car/project/import' === $pathinfo) {
                    return array (  '_controller' => 'Survey\\CarBundle\\Controller\\ProjectController::importAction',  '_route' => 'survey_car_project_import',);
                }

            }

            // survey_car_project_list
            if ('/car/project/list' === $pathinfo) {
                return array (  '_controller' => 'Survey\\CarBundle\\Controller\\ProjectController::listAction',  '_route' => 'survey_car_project_list',);
            }

            // survey_car_project_update
            if ('/car/project/update' === $pathinfo) {
                return array (  '_controller' => 'Survey\\CarBundle\\Controller\\ProjectController::updateAction',  '_route' => 'survey_car_project_update',);
            }

            // survey_car_project_delete
            if ('/car/project/delete' === $pathinfo) {
                return array (  '_controller' => 'Survey\\CarBundle\\Controller\\ProjectController::deleteAction',  '_route' => 'survey_car_project_delete',);
            }

            // survey_car_project_survey
            if (0 === strpos($pathinfo, '/car/project/suvrey') && preg_match('#^/car/project/suvrey/(?P<project_id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'survey_car_project_survey')), array (  '_controller' => 'Survey\\CarBundle\\Controller\\ProjectController::surveyAction',));
            }

            // survey_car_project_save
            if ('/car/project/save' === $pathinfo) {
                return array (  '_controller' => 'Survey\\CarBundle\\Controller\\ProjectController::saveAction',  '_route' => 'survey_car_project_save',);
            }

            // survey_car_project_export
            if (0 === strpos($pathinfo, '/car/project/export') && preg_match('#^/car/project/export/(?P<project_id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'survey_car_project_export')), array (  '_controller' => 'Survey\\CarBundle\\Controller\\ProjectController::exportAction',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_fos_js_routing_js;
            }

            return $ret;
        }
        not_fos_js_routing_js:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
