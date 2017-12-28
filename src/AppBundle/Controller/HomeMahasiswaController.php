<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

use AppBundle\Entity\TblSubjects;

class HomeMahasiswaController extends Controller
{
    /**
     * @Route("/home/mahasiswa")
     */
    public function indexAction(Request $request)
    {
        $uri = $_SERVER['REQUEST_URI'];
        // replace this example code with whatever you need
        $repositoriTblSubjects = $this->getDoctrine()->getRepository(TblSubjects::class);
        
        $tblSubjects = $repositoriTblSubjects->findAll();
        return $this->render('home-user/home-mahasiswa.html.twig', array('url' => $uri, 'tblSubjects' => $tblSubjects)
    );
    }
}
