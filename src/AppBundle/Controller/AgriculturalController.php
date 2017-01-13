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
 * Description of AgriculturalController
 *
 * @author gebruiker
 */
class AgriculturalController extends Controller {
    //put your code here
    /**
     * @Route("/agricultural")
     */
    
    public function consultAction() {
        $navigation = [
            'agricultural'=>'Agricultural Science',
            'environmental'=>'Environmental Science',
            'agribusiness'=>'Agribusiness Management',
            'contactform'=> 'Contact'
        ];
        return $this->render('consultancy/agricultural.html.twig', array(
            
            'services' => $navigation
        ));
        
    }
}
