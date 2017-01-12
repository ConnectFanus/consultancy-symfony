<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of TestController
 *
 * @author abrah
 */
class ConsultancyController extends Controller{
    //put your code here
    /**
     * @Route("/category/{Environment}")
     */
    public function showAction($Environment){
        $notes = ['Hello good morning', 'we wish you a wonderful week ahead!'];
        
        return $this->render('consultancy_envt/show.html.twig', [
            'name'=> $Environment,
            'notes'=>$notes 
                ]);
        
        
}

    }
