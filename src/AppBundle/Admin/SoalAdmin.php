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

class SoalAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Soal', array('class' => 'col-md-6'))
            ->add('pertanyaan', 'textarea')
            ->add('jawaban', 'text')
            ->end()
            ->with('Opsi', array('class' => 'col-md-6'))
            ->add('opsi_a', 'text')
            ->add('opsi_b', 'text')
            ->add('opsi_c', 'text')
            ->add('opsi_d', 'text')
            ->add('opsi_e', 'text')
            ->add('id_paket_soal', 'sonata_type_model', array(
                'class' => 'AppBundle\Entity\TblPaketSoal',
                'property' => 'nama_paket_soal',
            ))
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('pertanyaan');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('pertanyaan');
    }

}