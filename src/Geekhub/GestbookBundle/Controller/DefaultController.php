<?php

namespace Geekhub\GestbookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use \Geekhub\GestbookBundle\Entity\record;
use \Geekhub\GestbookBundle\Form\recordType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $records = $this->getDoctrine()->getRepository('GeekhubGestbookBundle:record')->findAll();
        $ad = new record();
        $form = $this->createFormBuilder($ad)
            ->add('name')
            ->add('email', 'email')
            ->add('body')
            ->getForm()
        ;
        //$form = new recordType();
        return $this->render('GeekhubGestbookBundle:Default:index.html.twig', array(
            'records'=> $records,
            'form' => $form->createView()
        ));
    }

    public function addAction(Request $request)
    {
        //$request = Request::createFromGlobals();
        //$name = $request->request->get('name');
        //$email = $request->request->get('email');
        //$body = $request->request->get('body');
        $record = new record();
        $form = $this->createFormBuilder($record)
            ->add('name')
            ->add('email', 'email')
            ->add('body')
            ->getForm()
        ;

        //$record = new record();
        /*$record->setBody($body);
        $record->setEmail($email);
        $record->setName($name);*/
        $form->bind($request);
        if($form->isValid()){
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($record);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('geekhub_gestbook_homepage'));
    }

    public function editAction($id)
    {

        $record = $this->getDoctrine()->getRepository('GeekhubGestbookBundle:record')->find((int) $id);

        $form = $this->createFormBuilder($record)
            ->add('name')
            ->add('email', 'email')
            ->add('body')
            ->getForm()
        ;

        return $this->render('GeekhubGestbookBundle:Default:edit.html.twig', array('form'=>$form->createView(), 'record'=>$record));
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
        /*$request = Request::createFromGlobals();
        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $body = $request->request->get('body');
        $record = $this->getDoctrine()->getRepository('GeekhubGestbookBundle:record')->find((int) $id);
        $record->setBody($body);
        $record->setEmail($email);
        $record->setName($name);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($record);
        $em->flush();
        return $this->redirect($this->generateUrl('geekhub_gestbook_homepage'));*/
        $request = Request::createFromGlobals();
        $record = $this->getDoctrine()->getRepository('GeekhubGestbookBundle:record')->find((int) $id);
        $form = $this->createFormBuilder($record)
            ->add('name')
            ->add('email', 'email')
            ->add('body')
            ->getForm()
        ;
        $form->bind($request);
        if($form->isValid()){
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($record);
            $em->flush();
        }
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
