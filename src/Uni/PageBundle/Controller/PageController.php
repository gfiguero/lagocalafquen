<?php

namespace Uni\PageBundle\Controller;

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
        return $this->render('UniPageBundle:Page:member.html.twig', array(
            'frontpage' => $frontpage
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

    public function noticeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $frontpage = $em->getRepository('UniAdminBundle:Frontpage')->findOneBy(array('frontpage_active' => true), array('createdAt' => 'DESC'));
        return $this->render('UniPageBundle:Page:notice.html.twig', array(
            'frontpage' => $frontpage
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
