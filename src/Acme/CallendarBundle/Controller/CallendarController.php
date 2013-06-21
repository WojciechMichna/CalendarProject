<?php

namespace Acme\CallendarBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Acme\UserBundle\Entity\User;

use Acme\CallendarBundle\Entity\Dates;

//Native Mapping
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * @brief Main controller for Calendar
 *
 * Contains: 
 * simple api for conecting with libcurl aplication
 * user managment, creating homeAction for each logged user 
 * simple function for creating view for new users
 * dates and event menagment
 * 
 */
 
class CallendarController extends Controller
{


/**
 * @brief function that just show curently logged user
 */
	public function homeAction()
	{		$user = $this->get('security.context')->getToken()->getUser();
			$string = $user->getUsername();
		return $this->render('AcmeCallendarBundle:Default:user.html.twig',array('name' => $string));
	}
	
/**
 * @brief function providing way to connect with calendar aplication
 * function providing way to connect with calendar aplication
 *	aplication is using following adress
 *	/libapi/home/{bs_username} where bs_username is username encoded with base 64 
 * 	by post our aplication send information about dates and events
 * 	before writing this information to database it check:
 *	is user in post and in {bs_username} the same user?
 *	user exist ?
 *	can he login?
 */
	
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

	
/**
 * @brief old and useless function 
 *	this is old api function the problem is that it get informations from get with was dangerous
 *	
 */	
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

	
/**
 * @brief dunction deleting existing events from database  
 *	function deletes event from database if user is logged 
 *	
 */	
	
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
	

/**
 * @brief function generating user "home"  
 *	it generally generates welcome page with callendar filled up with events 
 *	
 */	
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
	 
/**
 * @brief function creating events   
 *	fucntion check if user have privilages and then create new event
 *	if event exist in our calendar it will be overwriten
 */	
	
	
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
		
			
		
		
	
			    
	
/**
 * @brief function create user for symfony aplication and for database
 *	after reassuring that user is admin function create user for symfony aplication 
 *	and for database. After creating user it gives him role and create view on database with events and dates.
 *	user will have acces ony to his view (he will be granted only select on it). the view is created 
 *	after succesfuly crating user
 *	
 */		
	
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
	
			  $sql= "CREATE VIEW symfony.".
				$user->getUsername().
				"_view AS SELECT date,event FROM symfony.Dates where user='".
				$user->getUsername().
				"' and user_id=".
				$user->getID().";";
			  
			  
			  $em->getConnection()->executeUpdate($sql);

			  
			  $sql=	"GRANT SELECT ON symfony.".
				$user->getUsername().
				"_view  TO '".
				$user->getUsername()."'@'%'";			  
			   
			  $em->getConnection()->executeUpdate($sql);
			
			
			  	return $this->redirect($this->generateUrl('user_get'));
			}
		    }	    
		  

		return $this->render('AcmeCallendarBundle:Default:menage.html.twig', array(
		'form' => $form->createView(),
		));
	
		}
	}
/**
 * @brief function generates list of active users (only avalible in /admin/)
 *	
 */
	public function getuserAction()
	{
		if ($this->get('security.context')->isGranted('ROLE_ADMIN')) {
			$repository = $this->getDoctrine()->getRepository('AcmeUserBundle:User');
			$users = $repository->findAll();
				return $this->render('AcmeCallendarBundle:Default:getuser.html.twig',array('users' => $users));
		}	
	}

/**
 * @brief function deletes user and his view in database
 *	
 */
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
