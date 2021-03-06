<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

use AppBundle\Entity\TblSubjects;

class HomeController extends Controller
{
    /**
     * @Route("/home")
     */
    public function indexAction(Request $request)
    {
        $uri = $_SERVER['REQUEST_URI'];
        // replace this example code with whatever you need
        $repositoriTblSubjects = $this->getDoctrine()->getRepository(TblSubjects::class);
        
        $tblSubjects = $repositoriTblSubjects->findAll();
        return $this->render('home-user/home.html.twig', array('url' => $uri, 'tblSubjects' => $tblSubjects)
    );
    }
}
