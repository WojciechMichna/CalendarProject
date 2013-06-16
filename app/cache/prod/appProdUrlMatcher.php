<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/hello')) {
            // acme_user_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_user_homepage')), array (  '_controller' => 'Acme\\UserBundle\\Controller\\DefaultController::indexAction',));
            }

            // acme_security_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_security_homepage')), array (  '_controller' => 'Acme\\SecurityBundle\\Controller\\DefaultController::indexAction',));
            }

            // admin
            if (0 === strpos($pathinfo, '/hello/admin') && preg_match('#^/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin')), array (  '_controller' => 'Acme\\SecurityBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/login')) {
            // login_with_wild_card
            if (preg_match('#^/login/(?P<wild>.+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_with_wild_card')), array (  '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::loginAction',));
            }

            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array (  '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login_check',);
            }

        }

        // check
        if ($pathinfo === '/check') {
            return array (  '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::CheckAction',  '_route' => 'check',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'Acme\\SecurityBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'logout',);
        }

        // callendar_homepage
        if (rtrim($pathinfo, '/') === '/hello/user') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'callendar_homepage');
            }

            return array (  '_controller' => 'Acme\\CallendarBundle\\Controller\\CallendarController::homeAction',  '_route' => 'callendar_homepage',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/user_')) {
                // user_new
                if (rtrim($pathinfo, '/') === '/admin/user_new') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_new');
                    }

                    return array (  '_controller' => 'Acme\\CallendarBundle\\Controller\\CallendarController::adduserAction',  '_route' => 'user_new',);
                }

                // user_get
                if (rtrim($pathinfo, '/') === '/admin/user_get') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_get');
                    }

                    return array (  '_controller' => 'Acme\\CallendarBundle\\Controller\\CallendarController::getuserAction',  '_route' => 'user_get',);
                }

            }

            // user_del
            if (0 === strpos($pathinfo, '/admin/del') && preg_match('#^/admin/del/(?P<Id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_del')), array (  '_controller' => 'Acme\\CallendarBundle\\Controller\\CallendarController::userdelAction',));
            }

        }

        // get_dates
        if (rtrim($pathinfo, '/') === '/user') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'get_dates');
            }

            return array (  '_controller' => 'Acme\\CallendarBundle\\Controller\\CallendarController::DatesAction',  '_route' => 'get_dates',);
        }

        // admin_home
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_home');
            }

            return array (  '_controller' => 'Acme\\CallendarBundle\\Controller\\CallendarController::getuserAction',  '_route' => 'admin_home',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // event_new
            if ($pathinfo === '/user/new') {
                return array (  '_controller' => 'Acme\\CallendarBundle\\Controller\\CallendarController::NewEventAction',  '_route' => 'event_new',);
            }

            // delete_event
            if (0 === strpos($pathinfo, '/user/del') && preg_match('#^/user/del/(?P<date>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_event')), array (  '_controller' => 'Acme\\CallendarBundle\\Controller\\CallendarController::DelEventAction',));
            }

        }

        // api
        if (0 === strpos($pathinfo, '/api/home') && preg_match('#^/api/home/(?P<name>[^/]++)/(?P<password>[^/]++)/(?P<event>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'api')), array (  '_controller' => 'Acme\\CallendarBundle\\Controller\\CallendarController::apiAction',));
        }

        // libapi
        if (0 === strpos($pathinfo, '/libapi/home') && preg_match('#^/libapi/home(?:/(?P<bs_username>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'libapi')), array (  '_controller' => 'Acme\\CallendarBundle\\Controller\\CallendarController::libapiAction',  'bs_username' => '= 0',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
