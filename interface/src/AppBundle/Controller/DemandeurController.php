<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Demandeur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Demandeur controller.
 *
 * @Route("demandeur")
 */
class DemandeurController extends Controller
{
    /**
     * Lists all demandeur entities.
     *
     * @Route("/", name="demandeur_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $demandeurs = $em->getRepository('AppBundle:Demandeur')->findBy(array(),array('nom' => 'ASC'));

        return $this->render('demandeur/index.html.twig', array(
            'demandeurs' => $demandeurs,
        ));
    }

    /**
     * Creates a new demandeur entity.
     *
     * @Route("/new", name="demandeur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $demandeur = new Demandeur();
        $form = $this->createForm('AppBundle\Form\DemandeurType', $demandeur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($demandeur);
            $em->flush($demandeur);

            return $this->redirectToRoute('demandeur_show', array('id' => $demandeur->getId()));
        }

        return $this->render('demandeur/new.html.twig', array(
            'demandeur' => $demandeur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a demandeur entity.
     *
     * @Route("/{id}", name="demandeur_show")
     * @Method("GET")
     */
    public function showAction(Demandeur $demandeur)
    {
        $deleteForm = $this->createDeleteForm($demandeur);

        return $this->render('demandeur/show.html.twig', array(
            'demandeur' => $demandeur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing demandeur entity.
     *
     * @Route("/{id}/edit", name="demandeur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Demandeur $demandeur)
    {
        $deleteForm = $this->createDeleteForm($demandeur);
        $editForm = $this->createForm('AppBundle\Form\DemandeurType', $demandeur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('demandeur_edit', array('id' => $demandeur->getId()));
        }

        return $this->render('demandeur/edit.html.twig', array(
            'demandeur' => $demandeur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a demandeur entity.
     *
     * @Route("/{id}", name="demandeur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Demandeur $demandeur)
    {
        $form = $this->createDeleteForm($demandeur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($demandeur);
            $em->flush($demandeur);
        }

        return $this->redirectToRoute('demandeur_index');
    }

    /**
     * Creates a form to delete a demandeur entity.
     *
     * @param Demandeur $demandeur The demandeur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Demandeur $demandeur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('demandeur_delete', array('id' => $demandeur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
