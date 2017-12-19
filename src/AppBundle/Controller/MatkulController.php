<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MatkulController extends Controller
{
    /**
     * @Route("/matkul/{param}")
     */
    public function matkulAction(Request $request, $param)
    {
        // replace this example code with whatever you need
        return $this->render('home-user/matkul.html.twig', ['param' => $param]);
    }
}
