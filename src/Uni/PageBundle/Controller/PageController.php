<?php

namespace Uni\PageBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Uni\AdminBundle\Entity\NoticeCategory;
use Uni\AdminBundle\Form\NoticeCategoryType;

class PageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $frontpage = $em->getRepository('UniAdminBundle:Frontpage')->findOneBy(array('frontpage_active' => true), array('createdAt' => 'DESC'));
        $services = $em->getRepository('UniAdminBundle:Service')->findBy(array('service_published' => true), array('service_rank' => 'ASC'));
        return $this->render('UniPageBundle:Page:index.html.twig', array(
            'frontpage' => $frontpage,
            'services' => $services,
        ));
    }

    public function memberAction()
    {
        $em = $this->getDoctrine()->getManager();
        $frontpage = $em->getRepository('UniAdminBundle:Frontpage')->findOneBy(array('frontpage_active' => true), array('createdAt' => 'DESC'));
        $members = $em->getRepository('UniAdminBundle:Member')
            ->createQueryBuilder('m')
            ->leftJoin('m.member_role', 'mr')
            ->where('m.member_active = true')
            ->orderBy('mr.role_rank', 'ASC')
            ->getQuery()
            ->getResult();
        return $this->render('UniPageBundle:Page:member.html.twig', array(
            'frontpage' => $frontpage,
            'members' => $members,
        ));
    }

    public function historyAction()
    {
        $em = $this->getDoctrine()->getManager();
        $frontpage = $em->getRepository('UniAdminBundle:Frontpage')->findOneBy(array('frontpage_active' => true), array('createdAt' => 'DESC'));
        $histories = $em->getRepository('UniAdminBundle:History')->findBy(array('history_published' => true), array('history_rank' => 'ASC'));
        return $this->render('UniPageBundle:Page:history.html.twig', array(
            'frontpage' => $frontpage,
            'histories' => $histories,
        ));
    }

    public function noticeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $frontpage = $em->getRepository('UniAdminBundle:Frontpage')->findOneBy(array('frontpage_active' => true), array('createdAt' => 'DESC'));
        if($noticeCategory = $request->query->getInt('notice_noticecategory')) {
            $notices = $em->getRepository('UniAdminBundle:Notice')
                ->createQueryBuilder('n')
                ->leftJoin('n.notice_noticecategory', 'nc')
                ->where('n.notice_published = TRUE')
                ->andWhere('nc.id = :noticeCategory')
                ->orderBy('n.createdAt', 'DESC')
                ->setParameter('noticeCategory', $noticeCategory)
                ->getQuery()
                ->getResult();
        } else {
            $notices = $em->getRepository('UniAdminBundle:Notice')->findBy(array('notice_published' => true), array('createdAt' => 'DESC'));
        }
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($notices, $request->query->getInt('page', 1), 12);
        $data = array();
        $noticeCategoryForm = $this->get('form.factory')->createNamedBuilder('', 'form', $data, array('csrf_protection' => false ))
            ->setMethod('GET')
            ->add('notice_noticecategory', 'entity', array(
                'label' => 'notice_noticecategory',
                'class' => 'UniAdminBundle:NoticeCategory',
                'choice_label' => 'noticecategory_name',
                'placeholder' => 'notice_noticecategory_filter',
                'required' => false,
            ))
            ->add('notice_noticecategory_submit', 'button', array(
                'label' => 'notice_noticecategory_submit',
                'attr' => array(
                    'icon' => 'search',
                    'class' => 'btn-default',
                )
            ))
            ->getForm();
        return $this->render('UniPageBundle:Page:notice.html.twig', array(
            'frontpage' => $frontpage,
            'notices' => $pagination,
            'noticeCategoryForm' => $noticeCategoryForm->createView(),
        ));
    }

    public function noticeshowAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $frontpage = $em->getRepository('UniAdminBundle:Frontpage')->findOneBy(array('frontpage_active' => true), array('createdAt' => 'DESC'));
        $notices = $em->getRepository('UniAdminBundle:Notice')->findBy(array('notice_published' => true), array('createdAt' => 'DESC'), 10);
        $notice = $em->getRepository('UniAdminBundle:Notice')->find($id);
        return $this->render('UniPageBundle:Page:noticeshow.html.twig', array(
            'frontpage' => $frontpage,
            'notices' => $notices,
            'notice' => $notice,
        ));
    }

    public function reportAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $frontpage = $em->getRepository('UniAdminBundle:Frontpage')->findOneBy(array('frontpage_active' => true), array('createdAt' => 'DESC'));
        $reports = $em->getRepository('UniAdminBundle:Report')->findBy(array('report_published' => true), array('createdAt' => 'DESC'));
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($reports, $request->query->getInt('page', 1), 12);
        return $this->render('UniPageBundle:Page:report.html.twig', array(
            'frontpage' => $frontpage,
            'reports' => $pagination,
        ));
    }

    public function reportshowAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $frontpage = $em->getRepository('UniAdminBundle:Frontpage')->findOneBy(array('frontpage_active' => true), array('createdAt' => 'DESC'));
        $reports = $em->getRepository('UniAdminBundle:Report')->findBy(array('report_published' => true), array('createdAt' => 'DESC'), 10);
        $report = $em->getRepository('UniAdminBundle:Report')->find($id);
        return $this->render('UniPageBundle:Page:reportshow.html.twig', array(
            'frontpage' => $frontpage,
            'reports' => $reports,
            'report' => $report,
        ));
    }

    public function roleAction()
    {
        $em = $this->getDoctrine()->getManager();
        $frontpage = $em->getRepository('UniAdminBundle:Frontpage')->findOneBy(array('frontpage_active' => true), array('createdAt' => 'DESC'));
        return $this->render('UniPageBundle:Page:role.html.twig', array(
            'frontpage' => $frontpage
        ));
    }

    public function publicationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $frontpage = $em->getRepository('UniAdminBundle:Frontpage')->findOneBy(array('frontpage_active' => true), array('createdAt' => 'DESC'));
        $publications = $em->getRepository('UniAdminBundle:Publication')->findBy(array('publication_active' => true), array('publication_rank' => 'ASC'));
        return $this->render('UniPageBundle:Page:publication.html.twig', array(
            'frontpage' => $frontpage,
            'publications' => $publications,
        ));
    }

}
