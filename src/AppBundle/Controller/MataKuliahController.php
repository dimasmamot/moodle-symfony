<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

use AppBundle\Entity\TblCourse;

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
        $tblCourse = new TblCourse();
        $tblCourse->setIdUserPk("1");
        $form = $this->createFormBuilder($tblCourse)
            ->add('dateCreated', DateType::class)
            ->add('courseName', TextType::class)
            ->add('dateStart', DateType::class)
            ->add('dateEnd', DateType::class)
            ->add('courseDesc', TextType::class)
            ->add('subject', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'simpan'))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tblCourse);
            $em->flush();
        } 
        return $this->render('mata-kuliah/buat-mata-kuliah.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
