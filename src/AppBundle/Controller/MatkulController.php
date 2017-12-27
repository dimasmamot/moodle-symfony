<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\ORM\EntityManagerInterface;

use AppBundle\Entity\TblSubjects;
use AppBundle\Entity\TblCourse;
use AppBundle\Entity\Modul;
use AppBundle\Entity\MataKuliah;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Filesystem\Filesystem;
class MatkulController extends Controller
{
    /**
     * @Route("/matkul/{matkul}")
     */
    public function matkulAction(Request $request, $matkul)
    {
        $repositoriTblSubjects = $this->getDoctrine()->getRepository(TblSubjects::class);
        $tblSubjects = $repositoriTblSubjects->findOneBy(['subjectId' => $matkul]);
        

        $repositoriTblCourse = $this->getDoctrine()->getRepository(TblCourse::class);

        $tblCourse = $repositoriTblCourse->findBy(['subject' => $matkul]);
        // replace this example code with whatever you need
        return $this->render('mata-kuliah/matkul.html.twig', ['tblSubjects' => $tblSubjects, 'tblCourse' => $tblCourse, 'matkul' => $matkul]);
    }

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
        return $this->render('mata-kuliah/buat-modul.html.twig', [
            'form' => $form->createView() , 'repositoryMataKuliah' => $repositoryMataKuliah
        ]);
    }
    /**
     * @Route("/matkul/{matkul}/{modul}", name="index-upload")
     */
    public function uploadFile(Request $request, $matkul, $modul)
    {
        $gambarInput = null;
        $fs = new Filesystem();
        $rootDir = realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR;
        if(!$fs->exists($rootDir.'/data-file/'.$matkul))
            $fs->mkdir($rootDir.'/data-file/'.$matkul);
        $direktori = $rootDir.'/data-file/'.$matkul.'/'.$modul;

        $form = $this->createFormBuilder()
            ->add('file', FileType::class)
            ->add('upload', SubmitType::class, array('label' => 'upload'))
            ->getForm();
        $form->handleRequest($request);
        if(!$fs->exists($direktori))
            $fs->mkdir($direktori);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData() ;
            $fs->copy($data['file'], '../data-file/'.$matkul.'/'.$modul.'/'.$data['file']->getClientOriginalName(), true);
            // $gambarInput = 'image.jpg';
        }
        
        $files = scandir($direktori);
        array_shift($files);
        array_shift($files);

        
        

        return $this->render('mata-kuliah/modul.html.twig', [
            'form' => $form->createView(), 'gambarInput' => $gambarInput, 'files' => $files, 'rootDir' => $rootDir, 'matkul' => $matkul, 'modul' => $modul
        ]);
    }
    /**
     * @Route("/download/{matkul}/{modul}/{filename}", name="download")
     */
    public function downloadAction($matkul, $modul, $filename)
    {
        $file = $this->getParameter('kernel.project_dir').DIRECTORY_SEPARATOR.'/data-file/'.$matkul.'/'.$modul.'/'.$filename;

        return $this->file($file);
    }
}
