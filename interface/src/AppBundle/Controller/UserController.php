<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use AppBundle\Form\UserType;

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
    
    /**
     * Finds and displays a user entity.
     *
     * @Route("/users/{id}", name="users_show")
     * @Method("GET")
     */
	public function showAction(Request $request, $id)
	{
		$user = $this->getDoctrine()->getRepository('AppBundle:User')->find($id);
		if (!$user) {
			throw $this->createNotFoundException('No User found for id '.$id);
		}
		return $this->render('usershow.html.twig', array(
			'user' => $user,
		));
	}
	
		/**
		 * Edit the user.
		 *
		 * @Route("/users/{id}/edit", name="users_edit")
		 * @Method({"GET", "POST"})
		 */
		public function editAction(Request $request, $id)
		{
			$user = $this->getDoctrine()->getRepository('AppBundle:User')->find($id);
			if (!$user) {
				throw $this->createNotFoundException('No User found for id '.$id);
			}
			
			/** @var $dispatcher EventDispatcherInterface */
			$dispatcher = $this->get('event_dispatcher');

			$event = new GetResponseUserEvent($user, $request);
			$dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

			if (null !== $event->getResponse()) {
				return $event->getResponse();
			}

			/** @var $formFactory FactoryInterface */
			$form = $this->get('form.factory')->create(new UserType(), $user);
			$form->setData($user);

			$form->handleRequest($request);

			if ($form->isValid()) {
				/** @var $userManager UserManagerInterface */
				$userManager = $this->get('fos_user.user_manager');

				$event = new FormEvent($form, $request);
				$dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

				$userManager->updateUser($user);

				if (null === $response = $event->getResponse()) {
					$url = $this->generateUrl('users_list');
					$response = new RedirectResponse($url);
				}

				$dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

				return $response;
			}

			return $this->render('useredit.html.twig', array(
				'form' => $form->createView(),
			));
		}
}
