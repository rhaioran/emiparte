<?php

namespace PoaBundle\Controller;

use PoaBundle\Entity\Unidadacademica;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Unidadacademica controller.
 *
 * @Route("unidadacademica")
 */
class UnidadAcademicaController extends Controller
{
    /**
     * Lists all unidadAcademica entities.
     *
     * @Route("/", name="unidadacademica_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $unidadAcademicas = $em->getRepository('PoaBundle:Unidadacademica')->findAll();

        return $this->render('unidadacademica/index.html.twig', array(
            'unidadAcademicas' => $unidadAcademicas,
        ));
    }

    /**
     * Creates a new unidadAcademica entity.
     *
     * @Route("/new", name="unidadacademica_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $unidadAcademica = new Unidadacademica();
        $form = $this->createForm('PoaBundle\Form\UnidadAcademicaType', $unidadAcademica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($unidadAcademica);
            $em->flush();

            return $this->redirectToRoute('unidadacademica_show', array('iduniacdemica' => $unidadAcademica->getIduniacdemica()));
        }

        return $this->render('unidadacademica/new.html.twig', array(
            'unidadAcademica' => $unidadAcademica,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a unidadAcademica entity.
     *
     * @Route("/{iduniacdemica}", name="unidadacademica_show")
     * @Method("GET")
     */
    public function showAction(UnidadAcademica $unidadAcademica)
    {
        $deleteForm = $this->createDeleteForm($unidadAcademica);

        return $this->render('unidadacademica/show.html.twig', array(
            'unidadAcademica' => $unidadAcademica,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing unidadAcademica entity.
     *
     * @Route("/{iduniacdemica}/edit", name="unidadacademica_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, UnidadAcademica $unidadAcademica)
    {
        $deleteForm = $this->createDeleteForm($unidadAcademica);
        $editForm = $this->createForm('PoaBundle\Form\UnidadAcademicaType', $unidadAcademica);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('unidadacademica_edit', array('iduniacdemica' => $unidadAcademica->getIduniacdemica()));
        }

        return $this->render('unidadacademica/edit.html.twig', array(
            'unidadAcademica' => $unidadAcademica,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a unidadAcademica entity.
     *
     * @Route("/{iduniacdemica}", name="unidadacademica_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, UnidadAcademica $unidadAcademica)
    {
        $form = $this->createDeleteForm($unidadAcademica);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($unidadAcademica);
            $em->flush();
        }

        return $this->redirectToRoute('unidadacademica_index');
    }

    /**
     * Creates a form to delete a unidadAcademica entity.
     *
     * @param UnidadAcademica $unidadAcademica The unidadAcademica entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(UnidadAcademica $unidadAcademica)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('unidadacademica_delete', array('iduniacdemica' => $unidadAcademica->getIduniacdemica())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
