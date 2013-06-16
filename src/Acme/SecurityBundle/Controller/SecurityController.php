<?php
namespace Acme\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

use Symfony\Component\HttpFoundation\Response;

class SecurityController extends Controller
{
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render(
            'AcmeSecurityBundle:Security:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
            )
        );
    }



    public function CheckAction()
    {
	$admin= $this->get('security.context')->isGranted('ROLE_ADMIN');
	$user = $this->get('security.context')->isGranted('ROLE_USER');
	if (isset($admin)  & $admin ==1)
		$admin='yes';
	if (isset($user) & $user == 1)
		$user='yes';
	//$name=(string)$this->getUser();	 
	return new Response('<html><body>You Are :<br> Admin:'.$admin.' <br> user:<br>I m:</body></html>');
    }





}
