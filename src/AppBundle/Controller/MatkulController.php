<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\EntityManagerInterface;

use AppBundle\Entity\TblAssignment;
use AppBundle\Entity\TblQuiz;
use AppBundle\Entity\TblSubjects;
use AppBundle\Entity\TblPaketSoal;
use AppBundle\Entity\TblCourse;
use AppBundle\Entity\Modul;
use AppBundle\Entity\MataKuliah;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
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
        // form upload modul
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

        //
        // form quiz
        $quiz = new TblQuiz();
        $repositoryTblCourse = $this->getDoctrine()->getRepository(TblCourse::class);
        $tblCourse = $repositoryTblCourse->findOneBy(['idCoursePk' => $modul]);
        $quiz->setIdCoursePk($tblCourse);
        $form2 = $this->createFormBuilder($quiz)
            ->add('namaQuiz', TextType::class)
            ->add('idPaketSoal', EntityType::class, array('class' => TblPaketSoal::class, 'choice_value' => 'ID_PAKET_SOAL','choice_label' => 'NAMA_PAKET_SOAL'))

            ->add('tryAttempt', TextType::class)
            ->add('durasiQuiz', NumberType::class)
            ->add('tambah', SubmitType::class, array('label' => 'tambah'))
            ->getForm();
        $form2->handleRequest($request);
        
        if ($form2->isSubmitted() && $form2->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($quiz);
            $em->flush();
        }

        $repositoryTblQuiz = $this->getDoctrine()->getRepository(TblQuiz::class);
        $tblQuiz = $repositoryTblQuiz->findBy(['idCoursePk' => $modul]);

        // form assignment
        $assignment = new TblAssignment();
        $assignment->setIdCoursePk($tblCourse);
        $assignment->setStartDate(new \DateTime());
        $assignment->setTrySubmitCount(1);

        $form3 = $this->createFormBuilder($assignment)
            ->add('namaAssignment', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('tambah', SubmitType::class, array('label' => 'tambah'))
            ->getForm();
        $form3->handleRequest($request);
        
        if ($form3->isSubmitted() && $form3->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($assignment);
            $em->flush();
        }
        $repositoryTblAssignment = $this->getDoctrine()->getRepository(TblAssignment::class);
        $tblAssignment = $repositoryTblAssignment->findBy(['idCoursePk' => $modul]);

        $repositoriTblSubjects = $this->getDoctrine()->getRepository(TblSubjects::class);
        $tblSubjects = $repositoriTblSubjects->findOneBy(['subjectId' => $matkul]);

        $repositoriTblCourse = $this->getDoctrine()->getRepository(TblCourse::class);
        $tblCourse = $repositoriTblCourse->findOneBy(['idCoursePk' => $modul]);

        return $this->render('mata-kuliah/modul.html.twig', [
            'form' => $form->createView(), 'form2' => $form2->createView(), 'form3' => $form3->createView(),  'gambarInput' => $gambarInput, 'files' => $files, 'rootDir' => $rootDir, 'matkul' => $matkul, 'modul' => $modul, 'tblQuiz' => $tblQuiz, 'tblAssignment' => $tblAssignment, 'tblSubjects' => $tblSubjects, 'tblCourse' => $tblCourse
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
