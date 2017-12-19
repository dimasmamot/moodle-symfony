<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\TblSubjects;

use AppBundle\Entity\TblCourse;
class MatkulController extends Controller
{
    /**
     * @Route("/matkul/{param}")
     */
    public function matkulAction(Request $request, $param)
    {
        $repositoriTblSubjects = $this->getDoctrine()->getRepository(TblSubjects::class);
        $tblSubjects = $repositoriTblSubjects->findOneBy(['subjectId' => $param]);
        

        $repositoriTblCourse = $this->getDoctrine()->getRepository(TblCourse::class);

        $tblCourse = $repositoriTblCourse->findBy(['subject' => $param]);
        // replace this example code with whatever you need
        return $this->render('home-user/matkul.html.twig', ['tblSubjects' => $tblSubjects, 'tblCourse' => $tblCourse]);
    }
}
