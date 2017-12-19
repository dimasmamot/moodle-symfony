<?php
/**
 * Created by IntelliJ IDEA.
 * User: kana
 * Date: 17/12/2017
 * Time: 12:47
 */

namespace AppBundle\Admin;

use AppBundle\Entity\TblFile;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class FileAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('namaFile', 'text')
            ->add('deskripsiFile', 'textarea')
            ->add('pathFile', 'text')
            ->add('dateUpload', 'date')
            ->add('idUserPk', 'sonata_type_model', array(
                'class' => 'Application\Sonata\UserBundle\Entity\User',
                'property' => 'username'
            ))
            ->add('idKategoriFile', 'sonata_type_model', array(
                'class' => 'AppBundle\Entity\TblKategoriFile',
                'property' => 'namaKategoriFile'
            ))
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('namaFile')
            ->add('idUserPk', null, array(), 'entity', array(
                'class' => 'Application\Sonata\UserBundle\Entity\User',
                'choice_label' => 'username',
            ))
            ->add('idKategoriFile', null, array(), 'entity', array(
                'class' => 'AppBundle\Entity\TblKategoriFile',
                'choice_label' => 'namaKategoriFile',
            ))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('namaFile')
            ->add('deskripsiFile')
            ->add('pathFile')
            ->add('dateUpload')
            ->add('idUserPk.username')
            ->add('idKategoriFile.namaKategoriFile')
        ;
    }

    public function toString($object)
    {
        return $object instanceof TblKategoriFile
            ? $object->getNamaKategoriFile()
            : 'File'; // shown in the breadcrumb on the create view
    }

}