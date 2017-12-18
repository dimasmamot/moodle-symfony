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
            ->add('OpsiA', 'text')
            ->add('OpsiB', 'text')
            ->add('OpsiC', 'text')
            ->add('OpsiD', 'text')
            ->add('OpsiE', 'text')
            ->add('IdPaketSoal', 'sonata_type_model', array(
                'class' => 'AppBundle\Entity\TblPaketSoal',
                'property' => 'idPaketSoal',
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
        $listMapper
            ->addIdentifier('pertanyaan')
            ->add('jawaban');
    }

}