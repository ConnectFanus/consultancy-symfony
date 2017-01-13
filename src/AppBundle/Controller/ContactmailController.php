<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;




/**
 * Description of ContactmailController
 *
 * @author gebruiker
 */
class ContactmailController extends Controller {
    //put your code here
    /**
     * @Route("/contactform")
     */
    public function contactmailAction(Request $request) {
        
        $form = $this->createFormBuilder()
            ->add('Subject', TextType::class)
                ->add('Name', TextType::class)
                ->add('Email', TextType::class)
                ->add('Message', TextType::class)
            ->add('submit', SubmitType::class, [
                'label' => 'Submit',
                'attr'  => [
                    'class' => 'btn btn-success'
                ]
            ])
            ->getForm();
        
         $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {            
            $name = $form->getData()['Name'];
            $this->sendMail($name);
        }
                 
        return $this->render('consultancy/contactmail.html.twig', [
            'myform' => $form->createView()
        ]);
 
        
    }
     private function sendMail($body)
    {
        $mail = \Swift_Message::newInstance()
            ->setSubject('test mail')
            ->setFrom('someone@somewhere.com')
            ->setTo('3n1r4r+6wphw4wogrfs0@sharklasers.com')
            ->setBody('message body goes here ' . $body)
        ;

        $this->get('mailer')->send($mail);
    }
}
