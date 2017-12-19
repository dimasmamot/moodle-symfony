<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BaseController extends Controller
{
    public function BaseAction(Request $request)
    {
        // replace this example code with whatever you need
        $uri = $_SERVER['REQUEST_URI'];
        
    }
}
