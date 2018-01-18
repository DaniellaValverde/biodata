<?php

namespace Bio\BiodataBundle\Controller;

use Bio\BiodataBundle\Entity\PsychEvalFreq;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Psychevalfreq controller.
 *
 */
class PsychEvalFreqController extends Controller
{
    /**
     * Lists all psychEvalFreq entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $psychEvalFreqs = $em->getRepository('BioBiodataBundle:PsychEvalFreq')->findAll();

        return $this->render('psychevalfreq/index.html.twig', array(
            'psychEvalFreqs' => $psychEvalFreqs,
        ));
    }

    /**
     * Creates a new psychEvalFreq entity.
     *
     */
    public function newAction(Request $request)
    {
        $psychEvalFreq = new Psychevalfreq();
        $form = $this->createForm('Bio\BiodataBundle\Form\PsychEvalFreqType', $psychEvalFreq);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($psychEvalFreq);
            $em->flush();

            return $this->redirectToRoute('eval_freq_show', array('id' => $psychEvalFreq->getId()));
        }

        return $this->render('psychevalfreq/new.html.twig', array(
            'psychEvalFreq' => $psychEvalFreq,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a psychEvalFreq entity.
     *
     */
    public function showAction(PsychEvalFreq $psychEvalFreq)
    {
        $deleteForm = $this->createDeleteForm($psychEvalFreq);

        return $this->render('psychevalfreq/show.html.twig', array(
            'psychEvalFreq' => $psychEvalFreq,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing psychEvalFreq entity.
     *
     */
    public function editAction(Request $request, PsychEvalFreq $psychEvalFreq)
    {
        $deleteForm = $this->createDeleteForm($psychEvalFreq);
        $editForm = $this->createForm('Bio\BiodataBundle\Form\PsychEvalFreqType', $psychEvalFreq);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('eval_freq_edit', array('id' => $psychEvalFreq->getId()));
        }

        return $this->render('psychevalfreq/edit.html.twig', array(
            'psychEvalFreq' => $psychEvalFreq,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a psychEvalFreq entity.
     *
     */
    public function deleteAction(Request $request, PsychEvalFreq $psychEvalFreq)
    {
        $form = $this->createDeleteForm($psychEvalFreq);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($psychEvalFreq);
            $em->flush();
        }

        return $this->redirectToRoute('eval_freq_index');
    }

    /**
     * Creates a form to delete a psychEvalFreq entity.
     *
     * @param PsychEvalFreq $psychEvalFreq The psychEvalFreq entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PsychEvalFreq $psychEvalFreq)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('eval_freq_delete', array('id' => $psychEvalFreq->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
