<?php
/**
 * Created by PhpStorm.
 * User: francescobasile
 * Date: 07/07/18
 * Time: 17:07
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(){
        return $this->render('fab-admin/base.html.twig', array('titolo'=>'Applicazione Windor'));
    }

}