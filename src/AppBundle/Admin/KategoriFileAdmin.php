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

class KategoriFileAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('namaKategoriFile', 'text')
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('namaKategoriFile');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('idKategoriFile')
            ->addIdentifier('namaKategoriFile');
    }

    public function toString($object)
    {
        return $object instanceof TblKategoriFile
            ? $object->getNamaKategoriFile()
            : 'Kategori File'; // shown in the breadcrumb on the create view
    }

}