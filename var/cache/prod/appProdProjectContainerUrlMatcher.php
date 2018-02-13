<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // app_api_index
        if ('/api' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_app_api_index;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\ApiController::indexAction',  '_route' => 'app_api_index',);
        }
        not_app_api_index:

        if (0 === strpos($pathinfo, '/api/doc')) {
            // app.swagger_ui
            if ('/api/doc' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_appswagger_ui;
                }

                return array (  '_controller' => 'nelmio_api_doc.controller.swagger_ui',  '_route' => 'app.swagger_ui',);
            }
            not_appswagger_ui:

            // app.swagger
            if ('/api/doc.json' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_appswagger;
                }

                return array (  '_controller' => 'nelmio_api_doc.controller.swagger',  '_route' => 'app.swagger',);
            }
            not_appswagger:

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        // fos_oauth_server_token
        if ('/oauth/v2/token' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_oauth_server_token;
            }

            return array (  '_controller' => 'fos_oauth_server.controller.token:tokenAction',  '_route' => 'fos_oauth_server_token',);
        }
        not_fos_oauth_server_token:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
