<?php
/**
 * Created by IntelliJ IDEA.
 * User: kana
 * Date: 17/12/2017
 * Time: 12:47
 */

namespace AppBundle\Admin;

use AppBundle\Entity\TblSubjects;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class SubjectsAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('SubjectName', 'text')
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('subjectName');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('subjectId')
            ->addIdentifier('subjectName');
    }

    public function toString($object)
    {
        return $object instanceof TblSubjects
            ? $object->getSubjectName()
            : 'Subject Mata Kuliah'; // shown in the breadcrumb on the create view
    }

}