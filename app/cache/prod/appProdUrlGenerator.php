<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'acme_user_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\UserBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'acme_security_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\SecurityBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'admin' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\SecurityBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello/admin',    ),  ),  4 =>   array (  ),),
        'login_with_wild_card' => array (  0 =>   array (    0 => 'wild',  ),  1 =>   array (    '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (    'wild' => '.+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '.+',      3 => 'wild',    ),    1 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::CheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/check',    ),  ),  4 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\SecurityBundle\\Controller\\DefaultController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'callendar_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\CallendarBundle\\Controller\\CallendarController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/hello/user/',    ),  ),  4 =>   array (  ),),
        'user_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\CallendarBundle\\Controller\\CallendarController::adduserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user_new/',    ),  ),  4 =>   array (  ),),
        'user_get' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\CallendarBundle\\Controller\\CallendarController::getuserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user_get/',    ),  ),  4 =>   array (  ),),
        'user_del' => array (  0 =>   array (    0 => 'Id',  ),  1 =>   array (    '_controller' => 'Acme\\CallendarBundle\\Controller\\CallendarController::userdelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'Id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/del',    ),  ),  4 =>   array (  ),),
        'get_dates' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\CallendarBundle\\Controller\\CallendarController::DatesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/',    ),  ),  4 =>   array (  ),),
        'admin_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\CallendarBundle\\Controller\\CallendarController::getuserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),),
        'event_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\CallendarBundle\\Controller\\CallendarController::NewEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/new',    ),  ),  4 =>   array (  ),),
        'delete_event' => array (  0 =>   array (    0 => 'date',  ),  1 =>   array (    '_controller' => 'Acme\\CallendarBundle\\Controller\\CallendarController::DelEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'date',    ),    1 =>     array (      0 => 'text',      1 => '/user/del',    ),  ),  4 =>   array (  ),),
        'api' => array (  0 =>   array (    0 => 'name',    1 => 'password',    2 => 'event',  ),  1 =>   array (    '_controller' => 'Acme\\CallendarBundle\\Controller\\CallendarController::apiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'event',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'password',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    3 =>     array (      0 => 'text',      1 => '/api/home',    ),  ),  4 =>   array (  ),),
        'libapi' => array (  0 =>   array (    0 => 'bs_username',  ),  1 =>   array (    '_controller' => 'Acme\\CallendarBundle\\Controller\\CallendarController::libapiAction',    'bs_username' => '= 0',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'bs_username',    ),    1 =>     array (      0 => 'text',      1 => '/libapi/home',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
