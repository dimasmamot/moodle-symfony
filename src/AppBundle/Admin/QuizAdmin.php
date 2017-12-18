<?php
/**
 * Created by IntelliJ IDEA.
 * User: kana
 * Date: 17/12/2017
 * Time: 12:47
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class QuizAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('NamaQuiz', 'text')
            ->add('DurasiQuiz', 'integer')
            ->add('TryAttempt', 'integer')
            ->add('IdPaketSoal', 'sonata_type_model', array(
                'class' => 'AppBundle\Entity\TblPaketSoal',
                'property' => 'NamaPaketSoal'
            ))
            ->add('IdCoursePk', 'sonata_type_model', array(
                'class' => 'AppBundle\Entity\TblCourse',
                'property' => 'Subject'
            ))
            /*->add('paket_soal', 'sonata_type_model', array(
                'class' => 'AppBundle\Entity\paket_soal',
                'property' => 'namaPaketSoal',
            ))*/
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        // $datagridMapper->add('idUserPk');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        ->addIdentifier('username');
    }

}