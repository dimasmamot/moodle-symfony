<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

use AppBundle\Entity\MataKuliah;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MataKuliahController extends Controller
{
    /**
     * @Route("/buat-mata-kuliah")
     */
    public function BuatMataKuliahAction(Request $request)
    {
        // replace this example code with whatever you need
        $mataKuliah = new MataKuliah();
        $mataKuliah->setIdDosen(1);
        $form = $this->createFormBuilder($mataKuliah)
            ->add('mataKuliah', TextType::class)
            
            ->add('save', SubmitType::class, array('label' => 'simpan'))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mataKuliah);
            $em->flush();
        } 
        return $this->render('mata-kuliah/buat-mata-kuliah.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
