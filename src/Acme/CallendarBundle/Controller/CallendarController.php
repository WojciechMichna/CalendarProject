<?php

namespace Acme\CallendarBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Acme\UserBundle\Entity\User;

use Acme\CallendarBundle\Entity\Dates;

//Native Mapping
use Doctrine\ORM\Query\ResultSetMapping;


class CallendarController extends Controller
{
	public function homeAction()
	{		$user = $this->get('security.context')->getToken()->getUser();
			$string = $user->getUsername();
		return $this->render('AcmeCallendarBundle:Default:user.html.twig',array('name' => $string));
	}
	

	public function libapiAction(Request $request,$bs_username)
	{
	   
		
	   
	  $method = $request->getMethod();
	    if(!isset($method))
	      $method='none';
	   
	   if($method=='GET')
		return new Response('<html><body>'.base64_decode(base64_decode($bs_username)).'</body></html>');
		
	
		
	
	      
	     $username=$request->get('username'); 
	     $password=$request->get('password');
	     $event=$request->get('event');
	     
	     
	     if ($bs_username==base64_encode(base64_encode($username)) ){
	     
		 	
		   $password=sha1($password);
	      
		    $repository = $this->getDoctrine()->getRepository('AcmeUserBundle:User');
		    $user = $repository->findOneBy(array('username' => $username, 'password'=>$password));
		
	      /*
		if(isset($user))
		  return new Response('<html><body>'.$user->getID().
		  ' '.$user->getUsername().' '.$event.
		  '</body></html>');
		else
		  return new Response('<html><body> nope</body></html>');
		*/
		
		if(isset($user)&isset($event)){
	
		  $array=explode("^$",$event);
		    foreach($array as $value){
			$subarray=explode(";",$value);
			
			if((count ($subarray) >0) & (count ($subarray) <3)){}
				
			  if(($subarray[0] > 0) & ( $subarray[0] < 32 ))
			  {
			      $object = new  Dates ;
			
			      $object->setDate($subarray[0]);
			      $object->setEvent($subarray[1]);
			      $object->setUser($user->getUsername());
			      $object->setUserId($user->getID());
			
			
			      $object->trimAndConvert();
			      
			      		     
			      /*===============================================*/
				
			
		
			      $repository = $this->getDoctrine()->getEntityManager();
				  
		  	      $event =	$repository->getRepository('AcmeCallendarBundle:Dates')
							  ->findOneBy(array('date' => $object->getDate(),
								    'user_id' => $object->getUserId(),
								    'user' => $object->getUser()));			
				  if(isset($event)){
				      $repository->remove($event);
				      $repository->flush();
				  }	
			      /*===============================================*/
			      
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($object);
				$em->flush();
			
			/*
			    if(isset($object))
			      return new Response('<html><body>'.
			      $object->getDate().'<br>'.
			      $object->getEvent().'<br>'.
			      $object->getUser().'<br>'.
			      $object->getUserId().'<br>'.
			      '</body></html>');
			*/  
			  }
			 
		 }
	      }
				
	   }
	
	
	  return new Response('<html><body>Hello<br></body></html>');

	
	}
	
	public function apiAction($name,$password,$event)
	{	
	
	   if(isset($name)&isset($password)&isset($event)){
	      $decoded_username=base64_decode(base64_decode($name));
	      $decoded_password=base64_decode(base64_decode($password));

	      $password_sh=sha1($decoded_password);
	      
	      $repository = $this->getDoctrine()->getRepository('AcmeUserBundle:User');
	      $user = $repository->findOneBy(array('username' => 'nobody', 'password'=>$password_sh));
	
	
	      if(isset($user)&isset($event)){
	
		  $active_id=$user->getID();
	
		  $array=explode("^$",$event);
		    foreach($array as $value){
			$subarray=explode(";",$value);
			
			if((count ($subarray) >0) & (count ($subarray) <3)){}
				
			  if(($subarray[0] > 0) & ( $subarray[0] < 32 ))
			  {
			
			
			
			    return new Response('<html><body>'.$subarray[0].
			    '<br>'.$subarray[1].'</body></html>');
			  
			  }
			 
		    }
	
	
		$out=$user->getUsername();
	      
		  return new Response('<html><body>'.$out.'</body></html>');
	      }
	   }
	      
	        return new Response('<html><body>Error<br></body></html>');
	      
	
	}

	public function DelEventAction($date)
	{		    
	  	if ($this->get('security.context')->isGranted('ROLE_USER')) {		

		  
		    $token= $this->get('security.context')->getToken()->getUser();			      
			    $active_user =(string)$token->getUsername();
			    $active_id   =(integer)$token->getID();		
					  
		      
	    
		      
		      $repository = $this->getDoctrine()->getEntityManager();
	
		      $event =	$repository->getRepository('AcmeCallendarBundle:Dates')
						     ->findOneBy(array('date' => $date,
							      'user_id' => $active_id,
							      'user' => $active_user));			
			if(isset($event)){
			    $repository->remove($event);
			    $repository->flush();
			}
		  }
		  
		return $this->redirect($this->generateUrl('get_dates'));    
	  
	}	
	
	
	public function DatesAction()
	{

	
	  $date = time ();
	  $first_day = date("D", mktime(0, 0, 0, date("m"), 1, date("Y")));
	      if($first_day=='Mon')
		    $start=0;
	      else if($first_day=='Tue')
		    $start=1;
	      else if($first_day=='Wed')
		    $start=2;
	      else if($first_day=='Thu')
		    $start=3;
	      else if($first_day=='Fri')
		    $start=4;		    
	      else if($first_day=='Sat')
		    $start=5;		    
	      else if($first_day=='Sun')
		    $start=6;
	$stop=	date("t");    
		    
		if ($this->get('security.context')->isGranted('ROLE_USER')) {
		   $token= $this->get('security.context')->getToken()->getUser();
		   $active_user =(string)$token->getUsername();
		   $active_id   =(integer)$token->getID();
		   
			$repository = $this->getDoctrine()->getRepository('AcmeCallendarBundle:Dates');
			$dates = $repository->findBy(array('user' => $active_user
			  ,'user_id' => $active_id ));
			 return $this->render('AcmeCallendarBundle:Default:getdates.html.twig',array('dates' => $dates 
			 ,'start' => $start,'stop' =>$stop));
	      }	
	      
	     return new Response('<html><body>Please Login</body></html>');
	 }
	 
	
	public function NewEventAction(Request $request)
	{
		if ($this->get('security.context')->isGranted('ROLE_USER')) {		

		$dates = new Dates();
		    $form = $this->createFormBuilder($dates)
			->add('date', 'integer')
			->add('event', 'text')
			->getForm();

		    if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);
			
			if ($form->isValid()) {	
			
			      $token= $this->get('security.context')->getToken()->getUser();			      
			      $active_user =(string)$token->getUsername();
			      $active_id   =(integer)$token->getID();		
			      
			      $dates = $form->getData();

			      
			      
			      $dates->setUserId($active_id);
			      $dates->setUser($active_user);
			      $dates->trimAndConvert();
			      
			      		     
			      $this->DelEventAction($dates->getDate());
			      
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($dates);
				$em->flush();
			
			  return $this->redirect($this->generateUrl('get_dates'));
			}
			
		      }
				return $this->render('AcmeCallendarBundle:Default:createevent.html.twig', array(
				'form' => $form->createView(),
				));
		}
	}
		
			
		
		
	
			    
	
	
	
	public function adduserAction(Request $request)
	{
		if ($this->get('security.context')->isGranted('ROLE_ADMIN')) {		
		    // just setup a fresh $task object (remove the dummy data)
		    $user = new User();

		    $form = $this->createFormBuilder($user)
			->add('username', 'text')
			->add('password', 'text')
			->add('role', 'choice',array(
			  'choices' => array('admin' => 'admin', 'user' => 'user')))		
			->getForm();

		    if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);

			if ($form->isValid()) {					  	
				$user = $form->getData();
				$password_temp=$user->getPassword();
				$username_temp=$user->getUsername();
				//$user->setUser_sh(sha1($username_temp));
				$user->setPassword( sha1($password_temp) );
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($user);
				$em->flush();
			
			//========================================================
			  $sql="create user '".$user->getUsername()."'@'%' identified by '". $password_temp."';";
			  $em->getConnection()->executeUpdate($sql);
	
$sql="CREATE VIEW symfony.".$user->getUsername()."_view AS SELECT date,event FROM symfony.Dates where user='".$user->getUsername()."' and user_id=".$user->getID().";";
			  $em->getConnection()->executeUpdate($sql);

			  
$sql="GRANT SELECT ON symfony.".$user->getUsername()."_view  TO '".$user->getUsername()."'@'%'";			  
			   $em->getConnection()->executeUpdate($sql);
			
			
			  	return $this->redirect($this->generateUrl('user_get'));
			}
		    }	    
		  

		return $this->render('AcmeCallendarBundle:Default:menage.html.twig', array(
		'form' => $form->createView(),
		));
	
		}
	}

	public function getuserAction()
	{
		if ($this->get('security.context')->isGranted('ROLE_ADMIN')) {
			$repository = $this->getDoctrine()->getRepository('AcmeUserBundle:User');
			$users = $repository->findAll();
				return $this->render('AcmeCallendarBundle:Default:getuser.html.twig',array('users' => $users));
		}	
	}


	public function userdelAction($Id)
	{
		if ($this->get('security.context')->isGranted('ROLE_ADMIN')) {			
			    $repository = $this->getDoctrine()->getManager();
			    $users = $repository->getRepository('AcmeUserBundle:User')->find($Id);

			    if (!$users) {
				throw $this->createNotFoundException(
				    'No User '.$Id
				);
			    }
			
			$temp=$users->getUsername();    
			   
			$repository->remove($users);
			$repository->flush();		
			
		      $em = $this->getDoctrine()->getEntityManager();
		      $sql="drop user '".$temp."';";
		      $em->getConnection()->executeUpdate($sql);
		      $sql="drop view  symfony.".$temp."_view ;";
		      $em->getConnection()->executeUpdate($sql);
			
			$repository = $this->getDoctrine()->getRepository('AcmeUserBundle:User');
			$users = $repository->findAll();
				return $this->render('AcmeCallendarBundle:Default:getuser.html.twig',array('users' => $users));
		}

	}


}
