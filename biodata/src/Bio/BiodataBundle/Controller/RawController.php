<?php

namespace Bio\BiodataBundle\Controller;

use Bio\BiodataBundle\Entity\Raw;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Raw controller.
 *
 */
class RawController extends Controller
{
    /**
     * Lists all raw entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $raws = $em->getRepository('BioBiodataBundle:Raw')->findAll();

        return $this->render('raw/index.html.twig', array(
            'raws' => $raws,
        ));
    }

    /**
     * Creates a new raw entity.
     *
     */
    public function newAction(Request $request)
    {
        $raw = new Raw();
        $form = $this->createForm('Bio\BiodataBundle\Form\RawType', $raw);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($raw);
            $em->flush();

            return $this->redirectToRoute('raw_show', array('id' => $raw->getId()));
        }

        return $this->render('raw/new.html.twig', array(
            'raw' => $raw,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a raw entity.
     *
     */
    public function showAction(Raw $raw)
    {
        $deleteForm = $this->createDeleteForm($raw);

        return $this->render('raw/show.html.twig', array(
            'raw' => $raw,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing raw entity.
     *
     */
    public function editAction(Request $request, Raw $raw)
    {
        $deleteForm = $this->createDeleteForm($raw);
        $editForm = $this->createForm('Bio\BiodataBundle\Form\RawType', $raw);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('raw_edit', array('id' => $raw->getId()));
        }

        return $this->render('raw/edit.html.twig', array(
            'raw' => $raw,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a raw entity.
     *
     */
    public function deleteAction(Request $request, Raw $raw)
    {
        $form = $this->createDeleteForm($raw);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($raw);
            $em->flush();
        }

        return $this->redirectToRoute('raw_index');
    }

    /**
     * Creates a form to delete a raw entity.
     *
     * @param Raw $raw The raw entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Raw $raw)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('raw_delete', array('id' => $raw->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
