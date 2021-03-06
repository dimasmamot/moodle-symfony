<?php
/**
 * Created by IntelliJ IDEA.
 * User: kana
 * Date: 17/12/2017
 * Time: 12:47
 */

namespace AppBundle\Admin;

use AppBundle\Entity\TblCourse;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CourseAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('DateCreated', 'date')
            ->add('CourseName', 'text')
            ->add('DateStart', 'date')
            ->add('DateEnd', 'date')
            ->add('CourseDesc', 'textarea')
            ->add('idUserPk', 'sonata_type_model', array(
                'class' => 'Application\Sonata\UserBundle\Entity\User',
                'property' => 'username'
            ))
            ->add('subject', 'sonata_type_model', array(
                'class' => 'AppBundle\Entity\TblSubjects',
                'property' => 'subjectName'
            ))
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('courseName')
            ->add('idUserPk', null, array(), 'entity', array(
                'class' => 'Application\Sonata\UserBundle\Entity\User',
                'choice_label' => 'username',
            ))
            ->add('subject', null, array(), 'entity', array(
                'class' => 'AppBundle\Entity\TblSubjects',
                'choice_label' => 'subjectName',
            ))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('courseName')
            ->add('dateCreated')
            ->add('dateStart')
            ->add('dateEnd')
            ->add('courseDesc')
            ->add('subject.subjectName')
            ->add('idUserPk.username')
        ;
    }

    public function toString($object)
    {
        return $object instanceof TblCourse
            ? $object->getCourseName()
            : 'Course'; // shown in the breadcrumb on the create view
    }

}