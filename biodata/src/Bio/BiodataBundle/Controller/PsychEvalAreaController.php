<?php

namespace Bio\BiodataBundle\Controller;

use Bio\BiodataBundle\Entity\PsychEvalArea;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Psychevalarea controller.
 *
 */
class PsychEvalAreaController extends Controller
{
    /**
     * Lists all psychEvalArea entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $psychEvalAreas = $em->getRepository('BioBiodataBundle:PsychEvalArea')->findAll();

        return $this->render('psychevalarea/index.html.twig', array(
            'psychEvalAreas' => $psychEvalAreas,
        ));
    }

    /**
     * Creates a new psychEvalArea entity.
     *
     */
    public function newAction(Request $request)
    {
        $psychEvalArea = new Psychevalarea();
        $form = $this->createForm('Bio\BiodataBundle\Form\PsychEvalAreaType', $psychEvalArea);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($psychEvalArea);
            $em->flush();

            return $this->redirectToRoute('eval_area_show', array('id' => $psychEvalArea->getId()));
        }

        return $this->render('psychevalarea/new.html.twig', array(
            'psychEvalArea' => $psychEvalArea,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a psychEvalArea entity.
     *
     */
    public function showAction(PsychEvalArea $psychEvalArea)
    {
        $deleteForm = $this->createDeleteForm($psychEvalArea);

        return $this->render('psychevalarea/show.html.twig', array(
            'psychEvalArea' => $psychEvalArea,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing psychEvalArea entity.
     *
     */
    public function editAction(Request $request, PsychEvalArea $psychEvalArea)
    {
        $deleteForm = $this->createDeleteForm($psychEvalArea);
        $editForm = $this->createForm('Bio\BiodataBundle\Form\PsychEvalAreaType', $psychEvalArea);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('eval_area_edit', array('id' => $psychEvalArea->getId()));
        }

        return $this->render('psychevalarea/edit.html.twig', array(
            'psychEvalArea' => $psychEvalArea,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a psychEvalArea entity.
     *
     */
    public function deleteAction(Request $request, PsychEvalArea $psychEvalArea)
    {
        $form = $this->createDeleteForm($psychEvalArea);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($psychEvalArea);
            $em->flush();
        }

        return $this->redirectToRoute('eval_area_index');
    }

    /**
     * Creates a form to delete a psychEvalArea entity.
     *
     * @param PsychEvalArea $psychEvalArea The psychEvalArea entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PsychEvalArea $psychEvalArea)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('eval_area_delete', array('id' => $psychEvalArea->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
