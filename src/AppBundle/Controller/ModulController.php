<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

use AppBundle\Entity\Modul;
use AppBundle\Entity\MataKuliah;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ModulController extends Controller
{
    /**
     * @Route("/buat-modul", name="buat_modul")
     */
    public function BuatModulAction(Request $request)
    {
        // replace this example code with whatever you need
        $repositoryMataKuliah = $this->getDoctrine()->getRepository(MataKuliah::class)->findAll();

        $modul = new Modul();
        $modul->setIdDosen(1);
        $form = $this->createFormBuilder()
            ->add('modul', TextType::class)
            ->add('idMataKuliah', EntityType::class, array('class' => MataKuliah::class, 'choice_value' => 'id','choice_label' => 'mata_kuliah'))
            // ->add('idMataKuliah', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'simpan'))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            // var_dump($data['idMataKuliah']->getId());

            $modul->setIdMataKuliah($data['idMataKuliah']->getId());
            $modul->setModul($data['modul']);
            // var_dump($modul);
            $em = $this->getDoctrine()->getManager();
            $em->persist($modul);
            $em->flush();
        } 
        return $this->render('modul/buat-modul.html.twig', [
            'form' => $form->createView() , 'repositoryMataKuliah' => $repositoryMataKuliah
        ]);
    }
}
