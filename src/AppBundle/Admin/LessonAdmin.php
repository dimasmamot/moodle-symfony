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

class LessonAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('NamaLesson', 'text')
            ->add('IdFile', 'sonata_type_model', array(
                'class' => 'AppBundle\Entity\TblFile',
                'property' => 'File'
            ))
            ->add('IdCoursePk', 'sonata_type_model', array(
                'class' => 'AppBundle\Entity\TblCourse',
                'property' => 'Course'
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