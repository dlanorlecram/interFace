<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{	
	/**
     *@Route("/users", name="users_list")
     */
     public function profilesAction(Request $request)
     {
		$em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('AppBundle:User')->findAll();
        
		return $this->render('userslist.html.twig', array(
                'entities' => $entities,
		));
     }
}
