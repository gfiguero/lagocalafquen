<?php

namespace Uni\PageBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
        $notices = $em->getRepository('UniAdminBundle:Notice')->findBy(array('notice_published' => true), array('createdAt' => 'DESC'));
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($notices, $request->query->getInt('page', 1), 10);
        return $this->render('UniPageBundle:Page:notice.html.twig', array(
            'frontpage' => $frontpage,
            'notices' => $pagination,
        ));
    }

    public function noticeshowAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $frontpage = $em->getRepository('UniAdminBundle:Frontpage')->findOneBy(array('frontpage_active' => true), array('createdAt' => 'DESC'));
        $notice = $em->getRepository('UniAdminBundle:Notice')->find($id);
        return $this->render('UniPageBundle:Page:noticeshow.html.twig', array(
            'frontpage' => $frontpage,
            'notice' => $notice,
        ));
    }

    public function reportAction()
    {
        $em = $this->getDoctrine()->getManager();
        $frontpage = $em->getRepository('UniAdminBundle:Frontpage')->findOneBy(array('frontpage_active' => true), array('createdAt' => 'DESC'));
        return $this->render('UniPageBundle:Page:report.html.twig', array(
            'frontpage' => $frontpage
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

}
