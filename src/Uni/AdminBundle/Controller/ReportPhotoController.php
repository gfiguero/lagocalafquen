<?php

namespace Uni\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uni\AdminBundle\Entity\ReportPhoto;
use Uni\AdminBundle\Form\ReportPhotoType;

/**
 * ReportPhoto controller.
 *
 */
class ReportPhotoController extends Controller
{

    /**
     * Lists all ReportPhoto entities.
     *
     */
    public function indexAction(Request $request)
    {
        $sort = $request->query->get('sort');
        $direction = $request->query->get('direction');
        $em = $this->getDoctrine()->getManager();
        if($sort) $entities = $em->getRepository('UniAdminBundle:ReportPhoto')->findBy(array(), array($sort => $direction));
        else $entities = $em->getRepository('UniAdminBundle:ReportPhoto')->findAll();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($entities, $request->query->getInt('page', 1), 10);

        return $this->render('UniAdminBundle:ReportPhoto:index.html.twig', array(
            'pagination' => $pagination,
            'direction'  => $direction,
            'sort'       => $sort,
        ));
    }
    /**
     * Creates a new ReportPhoto entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ReportPhoto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add( 'success', 'ReportPhoto has been created.' );    
            return $this->redirect($this->generateUrl('reportphoto'));
        }

        return $this->render('UniAdminBundle:ReportPhoto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ReportPhoto entity.
     *
     * @param ReportPhoto $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ReportPhoto $entity)
    {
        $form = $this->createForm(new ReportPhotoType(), $entity, array(
            'action' => $this->generateUrl('reportphoto_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'create', 'attr' => array('icon' => 'save' )));

        return $form;
    }

    /**
     * Displays a form to create a new ReportPhoto entity.
     *
     */
    public function newAction()
    {
        $entity = new ReportPhoto();
        $form   = $this->createCreateForm($entity);

        return $this->render('UniAdminBundle:ReportPhoto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ReportPhoto entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UniAdminBundle:ReportPhoto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('The ReportPhoto cannot be found.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UniAdminBundle:ReportPhoto:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ReportPhoto entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UniAdminBundle:ReportPhoto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('The ReportPhoto cannot be found.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('UniAdminBundle:ReportPhoto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ReportPhoto entity.
    *
    * @param ReportPhoto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ReportPhoto $entity)
    {
        $form = $this->createForm(new ReportPhotoType(), $entity, array(
            'action' => $this->generateUrl('reportphoto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('actions', 'form_actions', [
            'buttons' => [
                'submit' => ['type' => 'submit', 'options' => ['label' => 'save', 'attr' => array('icon' => 'save', 'class' => 'btn-primary')]],
            ]
        ]);

        return $form;
    }
    /**
     * Edits an existing ReportPhoto entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UniAdminBundle:ReportPhoto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('The ReportPhoto cannot be found.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $request->getSession()->getFlashBag()->add( 'success', 'ReportPhoto has been updated.' );
            return $this->redirect($this->generateUrl('reportphoto'));
        }

        return $this->render('UniAdminBundle:ReportPhoto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }
    /**
     * Deletes a ReportPhoto entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $deleteForm = $this->createDeleteForm($id);
        $deleteForm->handleRequest($request);

        if ($deleteForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UniAdminBundle:ReportPhoto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('The ReportPhoto cannot be found.');
            }

            $em->remove($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add( 'danger', 'ReportPhoto has been deleted.' );
        }

        return $this->redirect($this->generateUrl('reportphoto'));
    }

    /**
     * Creates a form to delete a ReportPhoto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reportphoto_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('actions', 'form_actions', [
                'buttons' => [
                    'cancel' => ['type' => 'button', 'options' => ['label' => 'cancel', 'attr' => array('icon' => 'remove', 'class' => 'btn-default', 'data-dismiss' => 'modal')]],
                    'delete' => ['type' => 'submit', 'options' => ['label' => 'confirm', 'attr' => array('icon' => 'trash-o', 'class' => 'btn-danger')]],
                ]
            ])
            ->getForm()
        ;
    }

}
