<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of AgribusinessController
 *
 * @author samiz
 */
class AgribusinessController extends Controller{
    /**
     * @Route("/agribusiness")
     */
    public function agribusinessConsultnacy() {
         $navigation = [
            'agricultural'=>'Agricultural Science',
            'environmental'=>'Environmental Science',
            'agribusiness'=>'Agribusiness Management',
            'contactform'=> 'Contact'
        ];
        return $this->render('consultancy/agribusiness.html.twig', array(
            
            'services' => $navigation
        ));
        
    }
}
