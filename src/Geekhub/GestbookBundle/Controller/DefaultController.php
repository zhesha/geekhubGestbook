<?php

namespace Geekhub\GestbookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use \Geekhub\GestbookBundle\Entity\record;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $records = $this->getDoctrine()->getRepository('GeekhubGestbookBundle:record')->findAll();
        return $this->render('GeekhubGestbookBundle:Default:index.html.twig', array('records'=>$records));
    }

    public function addAction()
    {
        $request = Request::createFromGlobals();
        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $body = $request->request->get('body');
        $record = new record();
        $record->setBody($body);
        $record->setEmail($email);
        $record->setName($name);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($record);
        $em->flush();
        return $this->redirect($this->generateUrl('geekhub_gestbook_homepage'));
    }

    public function editAction($id)
    {
        $record = $this->getDoctrine()->getRepository('GeekhubGestbookBundle:record')->find((int) $id);
        return $this->render('GeekhubGestbookBundle:Default:edit.html.twig', array('record'=>$record));
        /*$request = Request::createFromGlobals();
        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $body = $request->request->get('body');
        $record = new record();
        $record->setBody($body);
        $record->setEmail($email);
        $record->setName($name);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($record);
        $em->flush();
        return $this->redirect($this->generateUrl('geekhub_gestbook_homepage'));*/
    }

    public function changeAction($id)
    {
        $request = Request::createFromGlobals();
        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $body = $request->request->get('body');
        //$id = $request->request->get('id');
        $record = $this->getDoctrine()->getRepository('GeekhubGestbookBundle:record')->find((int) $id);
        //return $this->render('GeekhubGestbookBundle:Default:edit.html.twig', array('record'=>$record));
        //$record = new record();
        $record->setBody($body);
        $record->setEmail($email);
        $record->setName($name);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($record);
        $em->flush();
        return $this->redirect($this->generateUrl('geekhub_gestbook_homepage'));
    }

    public function delAction($id)
    {
        $record = $this->getDoctrine()->getRepository('GeekhubGestbookBundle:record')->find((int) $id);
        $em = $this->getDoctrine()->getEntityManager();
        if(!$record)
            return $this->redirect($this->generateUrl('geekhub_gestbook_homepage'));
        $em->remove($record);
        $em->flush();
        return $this->redirect($this->generateUrl('geekhub_gestbook_homepage'));
    }
}
